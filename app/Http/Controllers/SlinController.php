<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SlinController extends Controller
{
    private $baseUrl = "https://cloudapp.slin.com.pe:7444/activity/v1/api/aybar";
    private $baseUrlCronograma = "https://cloudapp.slin.com.pe:7444/activity/api/v1/aybarweb/cronograma";
    private $baseUrlEstadoCuenta = "https://cloudapp.slin.com.pe:7444/activity/api/v1/aybarweb/estadocuenta";
    private $baseUrlComprobante = "https://prod.slin-ade.pe:8443/Utilidades/api/v1/aybarcorp/GetComprobantesBase64";
    private $baseUrlGuardarEvidencia = 'https://prod.slin-ade.pe:8443/Utilidades/api/v1/aybarcorp/GuardarEvidencia';
    private $baseUrlTicket = "https://prod.slin-ade.pe:8443/Utilidades/api/v1/aybarcorp/DownloadTicket";

    private $user = "api_slin_aybar";
    private $password = "a6c6f7f3e234482d0e7eaead29a3ea3d82fe731a8849927efc81d739eb6c5d7a";
    private $basePassword = "S!lin_AyB@r2025#SecureX";

    /**
     * 1. CLIENTES
     * GET /slin/cliente/{dni}
     */
    public function getCliente($dni)
    {
        $response = Http::withBasicAuth($this->user, $this->password)
            ->get("{$this->baseUrl}/clientes/nit/{$dni}");

        if ($response->failed()) {
            return response()->json([
                'error' => true,
                'message' => 'Error consultando cliente',
                'details' => $response->body(),
            ], 500);
        }

        return $response->json();
    }


    /**
     * 2. LOTES
     * GET /slin/lotes?id_cliente=C00896&id_empresa=019
     */
    public function getLotes(Request $request)
    {
        $request->validate([
            'id_cliente' => 'required',
            'id_empresa' => 'required',
        ]);

        $response = Http::withBasicAuth($this->user, $this->password)
            ->get("{$this->baseUrl}/lotes", [
                'id_cliente' => $request->id_cliente,
                'id_empresa' => $request->id_empresa
            ]);

        if ($response->failed()) {
            return response()->json([
                'error' => true,
                'message' => 'Error consultando lotes',
                'details' => $response->body(),
            ], 500);
        }

        return $response->json();
    }


    /**
     * 3. CUOTAS
     * GET /slin/cuotas?id_empresa=019&id_cliente=C00896&id_proyecto=005&id_etapa=01&id_manzana=F&id_lote=28.R
     */
public function getCuotas(Request $request)
{
    $request->validate([
        'empresa'  => 'required|string',
        'lote'     => 'required|string',
        'cliente'  => 'required|string',
        'contrato' => 'nullable|string',
        'servicio' => 'required|string',
    ]);

    $params = [
        'empresa'  => $request->empresa,
        'lote'     => $request->lote,
        'cliente'  => $request->cliente,
        'contrato' => $request->contrato ?? '',
        'servicio' => $request->servicio,
    ];

    $response = Http::withBasicAuth($this->user, $this->password)
        ->acceptJson()
        ->timeout(15)
        ->get($this->baseUrlCronograma, $params);

    if ($response->failed()) {
        return response()->json([
            'error'  => true,
            'status' => $response->status(),
            'detail' => $response->body(),
        ], 502);
    }

    return response()->json($response->json());
}

public function getEstadoCuenta(Request $request)
{
    $request->validate([
        'empresa'  => 'required|string',
        'lote'     => 'required|string',
        'cliente'  => 'required|string',
        'contrato' => 'nullable|string',
        'servicio' => 'required|string',
    ]);

    $params = [
        'empresa'  => $request->empresa,
        'lote'     => $request->lote,
        'cliente'  => $request->cliente,
        'contrato' => $request->contrato ?? '',
        'servicio' => $request->servicio,
    ];

    $response = Http::withBasicAuth($this->user, $this->password)
        ->acceptJson()
        ->timeout(15)
        ->get($this->baseUrlEstadoCuenta, $params);

    if ($response->failed()) {
        return response()->json([
            'error'  => true,
            'status' => $response->status(),
            'detail' => $response->body(),
        ], 502);
    }

    return response()->json($response->json());
}

   public function getCuotaEstadoCuenta(Request $request)
    {
        $request->validate([
            'empresa' => 'required|string',
            'lote' => 'required|string',
            'cliente' => 'required|string',
            'contrato' => 'nullable|string',
            'servicio' => 'required|string',
        ]);

        $params = [
            'empresa' => $request->empresa,
            'lote' => $request->lote,
            'cliente' => $request->cliente,
            'contrato' => $request->contrato ?? '',
            'servicio' => $request->servicio,
        ];

        $lote = $params['lote'];

        /* ===============================
         * CRONOGRAMA
         * =============================== */
        $cronogramaResp = Http::withBasicAuth($this->user, $this->password)
            ->acceptJson()
            ->timeout(15)
            ->get($this->baseUrlCronograma, $params);

        if ($cronogramaResp->failed()) {
            return response()->json([
                'error' => true,
                'origen' => 'cronograma',
                'status' => $cronogramaResp->status(),
                'detail' => $cronogramaResp->body(),
            ], 502);
        }

        $cronograma = $cronogramaResp->json();

        $cronogramaCuotas = collect($cronograma['detalle_cuotas'] ?? [])
            ->keyBy('NroCuota');

        /* ===============================
         * ESTADO DE CUENTA
         * =============================== */
        $estadoResp = Http::withBasicAuth($this->user, $this->password)
            ->acceptJson()
            ->timeout(15)
            ->get($this->baseUrlEstadoCuenta, $params);

        if ($estadoResp->failed()) {
            return response()->json([
                'error' => true,
                'origen' => 'estado_cuenta',
                'status' => $estadoResp->status(),
                'detail' => $estadoResp->body(),
            ], 502);
        }

        $estadoCuentaApi = $estadoResp->json();

        /* ===============================
         * UNIFICACIÓN DE CUOTAS
         * =============================== */
        $cuotasUnificadas = collect($estadoCuentaApi['Cuotas'] ?? [])
            ->map(function ($cuota) use ($cronogramaCuotas, $lote) {

                $nroCuota = $cuota['NroCuota'];
                $cronograma = $cronogramaCuotas->get($nroCuota);

                return array_merge($cuota, [
                    'idCuota' => "{$lote}-{$nroCuota}",
                    'saldo_cronograma' => $cronograma['saldo'] ?? null,
                    'monto_cronograma' => $cronograma['Montocuota'] ?? null,
                    'codigo_cronograma' => $cronograma['codigo'] ?? null,
                ]);
            })
            ->values();

        /* ===============================
         * ESTRUCTURA FINAL
         * =============================== */

        // Mantener cabecera original del estado de cuenta
        $unificado = $estadoCuentaApi;

        // Agregar datos financieros reales desde cronograma
        $unificado['importe_financiado']
        = $cronograma['datos_cabecera']['importe_financiado'] ?? null;

        $unificado['importe_amortizado']
        = $cronograma['datos_cabecera']['importe_amortizado'] ?? null;

        // Reemplazar cuotas por versión unificada
        $unificado['Cuotas'] = $cuotasUnificadas;

        return response()->json($unificado);
    }


   public function getComprobante(Request $request)
{
    $data = $request->validate([
        'empresa'     => 'required|string',
        'comprobante' => 'required|string',
    ]);

    try {
        $url = sprintf(
            '%s/%s/%s',
            $this->baseUrlComprobante,
            $data['empresa'],
            $data['comprobante']
        );

        $response = Http::withBasicAuth($this->user, $this->basePassword)
            ->acceptJson()
            ->timeout(20)
            ->get($url);

        if ($response->failed()) {
            return response()->json([
                'error'   => true,
                'message' => 'Error consultando comprobante en SLIN',
                'status'  => $response->status(),
                'details'=> $response->body(),
            ], 502);
        }

        return response()->json($response->json());

    } catch (\Throwable $e) {
        \Log::error('SLIN GetComprobante error', [
            'exception' => $e->getMessage(),
        ]);

        return response()->json([
            'error'   => true,
            'message' => 'Error interno del servidor',
        ], 500);
    }
}

   public function getTicket(Request $request)
{
    $data = $request->validate([
        'empresa'     => 'required|string',
        'Ticket' => 'required|string',
    ]);

    try {
        $url = sprintf(
            '%s/%s/%s',
            $this->baseUrlTicket,
            $data['empresa'],
            $data['Ticket']
        );

        $response = Http::withBasicAuth($this->user, $this->basePassword)
            ->acceptJson()
            ->timeout(20)
            ->get($url);

        if ($response->failed()) {
            return response()->json([
                'error'   => true,
                'message' => 'Error consultando Ticket en SLIN',
                'status'  => $response->status(),
                'details'=> $response->body(),
            ], 502);
        }

        return response()->json($response->json());

    } catch (\Throwable $e) {
        \Log::error('SLIN GetComprobante error', [
            'exception' => $e->getMessage(),
        ]);

        return response()->json([
            'error'   => true,
            'message' => 'Error interno del servidor',
        ], 500);
    }
}
    
    public function postGuardarEvidencia(Request $request)
    {
        $request->validate([
            'empresa'          => 'required|string',
            'lote'          => 'required|string',
            'cliente'       => 'required|string',
            'contrato'      => 'nullable|string',
            'idcobranzas'   => 'required|string',
            'nrooperacion'   => 'required|string',
            'fechaoperacion'   => 'required|string',
            'mtooperacion'   => 'required|string',
            'base64Image'   => 'required|string',
        ]);

        $payload = [
            'empresa'          => $request->empresa,
            'lote'        => $request->lote,
            'cliente'     => $request->cliente,
            'contrato'    => $request->contrato ?? '',
            'idcobranzas' => $request->idcobranzas,
            'nrooperacion' => $request->nrooperacion,
            'fechaoperacion' => $request->fechaoperacion,
            'mtooperacion' => $request->mtooperacion,
            'base64Image' => $request->base64Image,
        ];

        $response = Http::withBasicAuth($this->user, $this->basePassword)
            ->acceptJson()
            ->contentType('application/json')
            ->timeout(30)
            ->post($this->baseUrlGuardarEvidencia, $payload);

        if ($response->failed()) {
            return response()->json([
                'error'  => true,
                'status' => $response->status(),
                'detail' => $response->body(),
            ], 502);
        }

        return response()->json([
            'error' => false,
            'data'  => $response->json(),
        ]);
    }


}
