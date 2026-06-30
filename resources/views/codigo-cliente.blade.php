@extends('production.1')
@section('content')
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            background-color: #000;
        }

        .contendor_card_consulta {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding: 40px 16px;
            box-sizing: border-box;
        }

        .card_consulta {
            width: 100%;
            max-width: 420px;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            background-color: #fff;
            animation: fadeIn 0.8s ease;
        }

        .card_consulta_cabecera {
            background-color: #054E5C;
            text-align: center;
            padding: 24px 16px;
            color: white;
        }

        .card_consulta_cabecera .logo {
            width: 160px;
            margin-bottom: 10px;
        }

        .card_consulta_cabecera h2 {
            font-weight: 600;
            margin: 0;
            font-size: 1.4rem;
            color: white;
        }

        .card_consulta_formulario {
            background-color: #fff;
            padding: 24px;
            text-align: center;
        }

        .card_consulta_formulario label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #054E5C;
        }

        .card_consulta_formulario input {
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 1rem;
            margin-bottom: 16px;
            text-align: center;
        }

        .card_consulta_formulario input::placeholder {
            color: #6b6b6b;
            opacity: 1;
            font-style: italic;
        }

        .card_consulta_formulario button {
            background-color: #054E5C;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .card_consulta_formulario button:hover {
            background-color: #066a7b;
        }

        .card_consulta_resultado {
            background-color: #f8f8f8;
            padding: 20px;
            text-align: center;
            max-height: 70vh;
            overflow-y: auto;
            border-top: 1px solid #eee;
        }

        .resultado_ok {
            color: #0a8754;
            font-weight: 600;
            font-size: 1rem;
        }

        .resultado_error {
            color: #c0392b;
            font-weight: 600;
        }

        .resultado_datos {
            margin-top: 12px;
            text-align: left;
            display: inline-block;
        }

        .resultado_datos p {
            margin: 4px 0;
            font-size: 0.95rem;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    
      <div class="contendor_card_consulta">
        <div class="card_consulta">
            <div class="card_consulta_cabecera">
                <img src="https://aybarcorp.com/resource/1738076896_logo%20aybar%20blanco.svg" class="logo"
                    alt="Aybar Corp">
                <h2>Consulta tu código</h2>
            </div>

            <div class="card_consulta_formulario">
                <form method="GET" action="{{ url('/consulta-tu-codigo') }}">
                    <label for="dni">Ingresa tu DNI:</label>
                    <input type="text" id="dni" name="dni" value="{{ old('dni', $dni) }}"
                        placeholder="Ejemplo: 76729131">
                    <button type="submit">🔍 Buscar</button>
                </form>
            </div>

            <div class="card_consulta_resultado">
                @if ($informaciones->isNotEmpty())
                <div class="resultado_ok">✅ Se encontraron {{ $informaciones->count() }} resultado(s)</div>

                @foreach ($informaciones as $informacion)
                <div class="resultado_datos">
                    <p><strong>Razón Social:</strong> {{ $informacion->razon_social }}</p>
                    <p><strong>Proyecto:</strong> {{ $informacion->proyecto }}</p>
                    <p><strong>N° Lote:</strong> {{ $informacion->numero_lote }}</p>

                    <p><strong>Nombre Completo:</strong> {{ $informacion->nombre_completo_cliente }}</p>
                    <p><strong>Código Cliente:</strong> {{ $informacion->codigo_cliente }}</p>
                    <p><strong>DNI/RUC:</strong> {{ $informacion->dni_ruc_cliente }}</p>
                </div>

                @if (!$loop->last)
                <hr style="border: 1px dashed #ccc; margin: 20px 0;">
                @endif
                @endforeach
                @elseif ($dni)
                <div class="resultado_error">❌ No se encontró información para el DNI/RUC ingresado.</div>
                @endif
            </div>
        </div>
    </div>
@endsection
