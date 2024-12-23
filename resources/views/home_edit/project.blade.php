@extends('home_edit.template')
@section('content')
    <style>
        .shadowed-text {
            text-shadow: 1px 1px 1px #000000;
            /* Contorno sombreado */
        }

        .transparencia_cabecera_md {


            /* Ajuste opcional */
            mask-image: linear-gradient(to top, #000000 10%, transparent 100%);

            /* -webkit-mask-image: linear-gradient(to top, #000000 60%, transparent 100%); */
        }

        .transparencia_cabecera_xl {


            /* Ajuste opcional */
            mask-image: linear-gradient(to top, #000000 60%, transparent 100%);

            /* -webkit-mask-image: linear-gradient(to top, #000000 60%, transparent 100%); */
        }
    </style>





    <style>
        /* Necesario para el efecto hover */
        .card-hover {
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 15px;
        }

        .card-hover img {
            transition: opacity 0.3s ease;
        }

        .card-hover:hover img {
            opacity: 0;
            /* Oculta la imagen en hover */
        }

        .card-hover .hover-content {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            /* Oculta el texto por defecto */
            transition: opacity 0.3s ease;
        }

        .card-hover:hover .hover-content {
            opacity: 1;
            /* Muestra el texto en hover */
        }
    </style>
@endsection
