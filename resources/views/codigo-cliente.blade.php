@extends('production.1')

@section('content')
    <!-- Cargamos Google Fonts para una tipografía premium (Outfit o Montserrat) -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        .page-wrapper-consulta {
            margin: 0;
            padding: 0;
            font-family: 'Outfit', 'Montserrat', sans-serif;
            /* Fondo con degradado premium que complementa la marca Aybar Corp */
            background: radial-gradient(circle at center, #084c59 0%, #01161a 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            padding: 120px 20px 60px 20px; /* Padding superior para evitar superposición con el header flotante */
            box-sizing: border-box;
        }

        .card_consulta {
            width: 100%;
            max-width: 500px;
            border-radius: 24px;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.95);
            /* Sombra profunda y suave */
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transform: translateY(0);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            animation: slideUpFade 0.8s ease-out;
        }

        .card_consulta_cabecera {
            background: linear-gradient(135deg, #054E5C 0%, #032d36 100%);
            text-align: center;
            padding: 35px 24px;
            color: white;
            position: relative;
        }

        /* Línea decorativa inferior de la cabecera */
        .card_consulta_cabecera::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #FFA726, #FFCC80);
        }

        .card_consulta_cabecera .logo {
            width: 130px;
            height: auto;
            margin-bottom: 15px;
            filter: drop-shadow(0 4px 6px rgba(0,0,0,0.1));
            animation: pulseLogo 3s infinite ease-in-out;
        }

        .card_consulta_cabecera h2 {
            font-weight: 700;
            margin: 0;
            font-size: 1.6rem;
            color: #ffffff;
            letter-spacing: 0.5px;
        }

        .card_consulta_cabecera p {
            margin: 5px 0 0 0;
            font-size: 0.9rem;
            color: #cbd5e1;
            font-weight: 300;
        }

        .card_consulta_formulario {
            padding: 30px 30px 20px 30px;
            text-align: center;
        }

        .card_consulta_formulario label {
            display: block;
            margin-bottom: 12px;
            font-weight: 600;
            color: #054E5C;
            font-size: 1.1rem;
            text-align: left;
        }

        .input-group-custom {
            position: relative;
            display: flex;
            align-items: center;
            width: 100%;
            margin-bottom: 20px;
        }

        .input-group-custom .input-icon {
            position: absolute;
            left: 15px;
            color: #94a3b8;
            font-size: 1.2rem;
            pointer-events: none;
            transition: color 0.3s;
        }

        .card_consulta_formulario input {
            width: 100%;
            padding: 14px 16px 14px 45px;
            border-radius: 14px;
            border: 2px solid #e2e8f0;
            font-size: 1.05rem;
            font-family: inherit;
            color: #1e293b;
            background-color: #f8fafc;
            transition: all 0.3s ease;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.02);
        }

        .card_consulta_formulario input:focus {
            border-color: #054E5C;
            background-color: #fff;
            box-shadow: 0 0 0 4px rgba(5, 78, 92, 0.15);
            outline: none;
        }

        .card_consulta_formulario input:focus + .input-icon {
            color: #054E5C;
        }

        .card_consulta_formulario input::placeholder {
            color: #94a3b8;
            font-style: normal;
        }

        .card_consulta_formulario button {
            width: 100%;
            background: linear-gradient(135deg, #FFA726 0%, #FB8C00 100%);
            color: white;
            border: none;
            padding: 14px 24px;
            border-radius: 14px;
            font-weight: 700;
            font-size: 1.1rem;
            cursor: pointer;
            box-shadow: 0 8px 20px rgba(251, 140, 0, 0.3);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            font-family: inherit;
        }

        .card_consulta_formulario button:hover {
            background: linear-gradient(135deg, #fb923c 0%, #f97316 100%);
            box-shadow: 0 10px 25px rgba(251, 140, 0, 0.4);
            transform: translateY(-2px);
        }

        .card_consulta_formulario button:active {
            transform: translateY(1px);
        }

        .card_consulta_resultado {
            background-color: #f8fafc;
            padding: 30px;
            max-height: 55vh;
            overflow-y: auto;
            border-top: 1px solid #e2e8f0;
            border-bottom-left-radius: 24px;
            border-bottom-right-radius: 24px;
        }

        /* Personalización de la barra de desplazamiento del panel de resultados */
        .card_consulta_resultado::-webkit-scrollbar {
            width: 6px;
        }
        .card_consulta_resultado::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        .card_consulta_resultado::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }
        .card_consulta_resultado::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        .resultado_ok {
            background-color: #ecfdf5;
            color: #065f46;
            border: 1px solid #a7f3d0;
            padding: 12px 16px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.95rem;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 8px;
            justify-content: center;
        }

        .resultado_error {
            background-color: #fef2f2;
            color: #991b1b;
            border: 1px solid #fca5a5;
            padding: 14px 16px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 8px;
            justify-content: center;
        }

        .resultado_datos {
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 20px;
            margin-bottom: 16px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.02);
            transition: all 0.3s ease;
        }

        .resultado_datos:hover {
            border-color: #cbd5e1;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.05);
            transform: scale(1.01);
        }

        .info-row {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 0;
            border-bottom: 1px solid #f1f5f9;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-row .icon-wrapper {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            background-color: rgba(5, 78, 92, 0.08);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #054E5C;
            flex-shrink: 0;
        }

        .info-row .info-content {
            display: flex;
            flex-direction: column;
        }

        .info-row .info-label {
            font-size: 0.75rem;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

        .info-row .info-value {
            font-size: 0.95rem;
            color: #1e293b;
            font-weight: 600;
        }

        /* Animaciones */
        @keyframes slideUpFade {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulseLogo {
            0%, 100% {
                transform: scale(1);
                filter: drop-shadow(0 4px 6px rgba(0,0,0,0.1));
            }
            50% {
                transform: scale(1.03);
                filter: drop-shadow(0 8px 15px rgba(255,255,255,0.15));
            }
        }
    </style>

    <div class="page-wrapper-consulta">
        <div class="card_consulta">
            <div class="card_consulta_cabecera">
                <img src="https://aybarcorp.com/resource/1738076896_logo%20aybar%20blanco.svg" class="logo" alt="Aybar Corp">
                <h2>Consulta tu código</h2>
                <p>Verifica tu información y código de cliente</p>
            </div>

            <div class="card_consulta_formulario">
                <form method="GET" action="{{ url('/consulta-tu-codigo') }}">
                    <label for="dni">Ingresa tu DNI o RUC:</label>
                    <div class="input-group-custom">
                        <input type="text" id="dni" name="dni" value="{{ old('dni', $dni) }}" placeholder="Ejemplo: 76729131" required maxlength="11">
                        <i class="ti ti-id input-icon"></i>
                    </div>
                    <button type="submit">
                        <i class="ti ti-search"></i> Buscar código
                    </button>
                </form>
            </div>

            <div class="card_consulta_resultado">
                @if ($informaciones->isNotEmpty())
                    <div class="resultado_ok">
                        <i class="ti ti-circle-check"></i> Se encontraron {{ $informaciones->count() }} resultado(s)
                    </div>

                    @foreach ($informaciones as $informacion)
                        <div class="resultado_datos">
                            <!-- Fila Razón Social -->
                            <div class="info-row">
                                <div class="icon-wrapper">
                                    <i class="ti ti-briefcase"></i>
                                </div>
                                <div class="info-content">
                                    <span class="info-label">Razón Social</span>
                                    <span class="info-value">{{ $informacion->razon_social }}</span>
                                </div>
                            </div>

                            <!-- Fila Nombre Completo -->
                            <div class="info-row">
                                <div class="icon-wrapper">
                                    <i class="ti ti-user"></i>
                                </div>
                                <div class="info-content">
                                    <span class="info-label">Nombre del Cliente</span>
                                    <span class="info-value">{{ $informacion->nombre_completo_cliente }}</span>
                                </div>
                            </div>

                            <!-- Fila DNI/RUC -->
                            <div class="info-row">
                                <div class="icon-wrapper">
                                    <i class="ti ti-id"></i>
                                </div>
                                <div class="info-content">
                                    <span class="info-label">DNI / RUC</span>
                                    <span class="info-value">{{ $informacion->dni_ruc_cliente }}</span>
                                </div>
                            </div>

                            <!-- Fila Proyecto -->
                            <div class="info-row">
                                <div class="icon-wrapper">
                                    <i class="ti ti-building"></i>
                                </div>
                                <div class="info-content">
                                    <span class="info-label">Proyecto</span>
                                    <span class="info-value">{{ $informacion->proyecto }}</span>
                                </div>
                            </div>

                            <!-- Fila Lote -->
                            <div class="info-row">
                                <div class="icon-wrapper">
                                    <i class="ti ti-map-pin"></i>
                                </div>
                                <div class="info-content">
                                    <span class="info-label">N° Lote</span>
                                    <span class="info-value">{{ $informacion->numero_lote }}</span>
                                </div>
                            </div>

                            <!-- Fila Código Cliente -->
                            <div class="info-row" style="background-color: rgba(255, 167, 38, 0.05); border-radius: 8px; padding: 10px;">
                                <div class="icon-wrapper" style="background-color: rgba(255, 167, 38, 0.15); color: #e67e22;">
                                    <i class="ti ti-barcode"></i>
                                </div>
                                <div class="info-content">
                                    <span class="info-label" style="color: #d35400;">Código de Pago Cliente</span>
                                    <span class="info-value" style="color: #d35400; font-size: 1.1rem; font-family: monospace;">{{ $informacion->codigo_cliente }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @elseif ($dni)
                    <div class="resultado_error">
                        <i class="ti ti-alert-circle"></i> No se encontró información para el documento ingresado. Por favor, verifique el número.
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
