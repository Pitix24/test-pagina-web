@extends('production.1')

@section('content')
<style>
    .maintenance-wrapper {
        background-color: #043c47;
        width: 100%;
        min-height: 80vh;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        position: relative;
        padding-top: 100px; /* Evita superposición con el header flotante */
        padding-bottom: 50px;
    }
    
    .maintenance-img {
        width: 100%;
        height: auto;
        max-width: 100%;
        display: block;
        margin: 0 auto;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    /* Vista para pantallas grandes y medianas */
    .desktop-view {
        display: block;
        max-width: 1000px;
        width: 90%;
        padding: 20px;
    }

    /* Vista para pantallas móviles */
    .mobile-view {
        display: none;
        max-width: 450px;
        width: 90%;
        padding: 10px;
    }

    @media (max-width: 768px) {
        .desktop-view {
            display: none;
        }
        .mobile-view {
            display: block;
        }
        .maintenance-wrapper {
            padding-top: 120px;
            min-height: 75vh;
        }
    }
</style>

<div class="maintenance-wrapper">
    <!-- Desktop/Tablet Image -->
    <div class="desktop-view animate__animated animate__fadeIn animate__slow">
        <img src="{{ asset('resource/maintenance-desktop.png') }}" alt="Plataforma en reestructuración" class="maintenance-img">
    </div>

    <!-- Mobile Image -->
    <div class="mobile-view animate__animated animate__fadeIn animate__slow">
        <img src="{{ asset('resource/maintenance-mobile.png') }}" alt="Plataforma en reestructuración" class="maintenance-img">
    </div>
</div>
@endsection
