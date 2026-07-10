@extends('production.1')

@section('content')
@php
use Illuminate\Support\Str;
@endphp

<style>
    .transparency-hero {
        background: linear-gradient(180deg, rgba(4, 29, 35, 0.96), rgba(4, 29, 35, 0.88));
        color: #ffffff;
        padding: 96px 0 40px;
    }

    .transparency-panel {
        background: #f7f9fa;
        border-radius: 24px;
        box-shadow: 0 18px 50px rgba(0, 0, 0, 0.12);
        overflow: hidden;
    }

    .transparency-shell {
        max-width: 1460px;
        margin: 0 auto;
    }

    .transparency-accordion .accordion-item {
        border: 0;
        border-bottom: 1px solid rgba(4, 29, 35, 0.08);
    }

    .transparency-accordion .accordion-button {
        background: #ffffff;
        color: #03424e;
        font-family: Montserrat-SemiBold;
        font-size: 1.05rem;
        box-shadow: none;
        padding: 1.15rem 1.25rem;
    }

    .transparency-accordion .accordion-button:not(.collapsed) {
        background: #054e5c;
        color: #ffffff;
    }

    .transparency-accordion .accordion-button::after {
        filter: brightness(0) invert(0.3);
    }

    .transparency-accordion .accordion-button:not(.collapsed)::after {
        filter: brightness(0) invert(1);
    }

    .project-submenu-link {
        display: block;
        width: 100%;
        text-align: left;
        border: 1px solid rgba(5, 78, 92, 0.12);
        border-radius: 14px;
        padding: 0.9rem 1rem;
        color: #054e5c;
        text-decoration: none;
        background: #ffffff;
        transition: transform 0.18s ease, box-shadow 0.18s ease, border-color 0.18s ease;
    }

    .project-submenu-link:hover {
        transform: translateY(-2px);
        border-color: rgba(255, 167, 38, 0.45);
        box-shadow: 0 10px 24px rgba(5, 78, 92, 0.12);
        color: #03424e;
    }

    .project-submenu-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.45rem;
        font-size: 0.9rem;
        color: #ffffff;
        background: #054e5c;
        border-radius: 999px;
        padding: 0.45rem 0.8rem;
    }

    .project-submenu-dot {
        width: 8px;
        height: 8px;
        border-radius: 999px;
        background: #ffa726;
        display: inline-block;
    }

    .subproject-card {
        border: 1px solid rgba(5, 78, 92, 0.12);
        border-radius: 18px;
        background: #ffffff;
        overflow: hidden;
    }

    .subproject-card .accordion-button {
        background: #f5fbfc;
        color: #03424e;
        font-size: 0.98rem;
        padding: 0.95rem 1rem;
        border-radius: 0;
    }

    .subproject-card .accordion-button:not(.collapsed) {
        background: #e7f4f6;
        color: #03424e;
    }

    .subproject-media {
        border-radius: 18px;
        overflow: hidden;
        min-height: 240px;
        background: linear-gradient(180deg, rgba(5, 78, 92, 0.2), rgba(5, 78, 92, 0.75));
    }

    .subproject-media img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .subproject-description {
        color: #37555c;
        line-height: 1.7;
    }

    .document-grid {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 0.75rem;
    }

    .document-card {
        display: block;
        padding: 0.85rem 0.9rem;
        border-radius: 16px;
        border: 1px solid rgba(5, 78, 92, 0.1);
        background: #ffffff;
        text-decoration: none;
        color: #054e5c;
        transition: transform 0.18s ease, box-shadow 0.18s ease, border-color 0.18s ease;
    }

    .document-card:hover {
        transform: translateY(-2px);
        border-color: rgba(255, 167, 38, 0.4);
        box-shadow: 0 10px 20px rgba(5, 78, 92, 0.1);
        color: #03424e;
    }

    .document-card.disabled {
        opacity: 0.55;
        pointer-events: none;
    }

    .document-icon {
        width: 34px;
        height: 34px;
        border-radius: 10px;
        background: #054e5c;
        color: #ffffff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .document-title {
        font-family: Montserrat-SemiBold;
        font-size: 0.93rem;
    }

    .document-subtitle {
        font-size: 0.78rem;
        color: #6c7a80;
    }
</style>

<section class="transparency-hero">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-9">
                <p class="mb-2 text-uppercase"
                    style="letter-spacing: 0.35em; color: #ffa726; font-family: Montserrat-SemiBold;">Portal de
                    transparencia</p>
                <h1 class="display-5 mb-3" style="font-family: Montserrat-SemiBold;">Conoce nuestros proyectos y sus
                    subproyectos</h1>
                <p class="lead mb-0" style="color: rgba(255,255,255,0.82);">
                    Cada proyecto se despliega por separado y cada subproyecto puede abrir información, imagen
                    referencial y documentos PDF.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style="background: #0b1317;">
    <div class="container-fluid px-3 px-lg-5 transparency-shell">
        <div class="transparency-panel p-3 p-md-4">
            <div class="accordion transparency-accordion" id="transparencyAccordion">
                @forelse ($projects as $project)
                @php
                $projectId = 'project-' . $project->id;
                $projectSlug = $project->detail ?: Str::slug($project->title);
                $subprojects = [];

                for ($i = 1; $i <= 20; $i++) { $subproject=$project->{'subproject_' . $i};
                    $subprojectImage = $project->{'subproject_image_' . $i};

                    if (!empty($subproject) && !empty($subprojectImage) && $subproject !== 'VILLA PALERMO') {
                    $subprojects[] = [
                    'index' => $i,
                    'label' => $subproject,
                    'image' => $subprojectImage,
                    'slug' => Str::slug($subproject),
                    ];
                    }
                    }

                    $documentTypes = [
                    ['key' => 'legal', 'label' => 'Legales'],
                    ['key' => 'proyecto', 'label' => 'Proyecto'],
                    ['key' => 'casos', 'label' => 'Casos'],
                    ['key' => 'anexos', 'label' => 'Anexos'],
                    ];
                    @endphp

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading-{{ $projectId }}">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-{{ $projectId }}" aria-expanded="false"
                                aria-controls="collapse-{{ $projectId }}">
                                {{ $project->title ?? 'Proyecto sin nombre' }}
                            </button>
                        </h2>

                        <div id="collapse-{{ $projectId }}" class="accordion-collapse collapse"
                            aria-labelledby="heading-{{ $projectId }}" data-bs-parent="#transparencyAccordion">
                            <div class="accordion-body bg-white">
                                <div class="row g-4 align-items-start">
                                    <div class="col-12">
                                        <p class="mb-3 subproject-description">
                                            {{ Str::limit($project->description ?? 'Información disponible del
                                            proyecto.', 260) }}
                                        </p>

                                        <a href="{{ url('proyectos/' . $projectSlug) }}" class="btn btn-sm px-3 py-2"
                                            style="background:#ffa726; color:#ffffff; border-radius:999px; font-family:Montserrat-SemiBold;">
                                            Ver proyecto
                                        </a>

                                        <div class="mt-4 project-submenu-badge">
                                            <span class="project-submenu-dot"></span>
                                            Subproyectos
                                        </div>

                                        <div class="accordion mt-3" id="subprojectAccordion-{{ $projectId }}">
                                            @forelse ($subprojects as $subproject)
                                            @php
                                            $subId = $projectId . '-sub-' . $subproject['index'];
                                            $subprojectFileBase = 'documentos/transparencia/' . $projectSlug . '/' .
                                            $subproject['slug'];
                                            @endphp

                                            <div class="subproject-card mb-3">
                                                <h2 class="accordion-header" id="heading-{{ $subId }}">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapse-{{ $subId }}" aria-expanded="false"
                                                        aria-controls="collapse-{{ $subId }}">
                                                        {{ $subproject['label'] }}
                                                    </button>
                                                </h2>

                                                <div id="collapse-{{ $subId }}" class="accordion-collapse collapse"
                                                    aria-labelledby="heading-{{ $subId }}"
                                                    data-bs-parent="#subprojectAccordion-{{ $projectId }}">
                                                    <div class="p-3 p-lg-4">
                                                        <div class="row g-4">
                                                            <div class="col-12 col-xl-5">
                                                                <div class="subproject-media h-100">
                                                                    <img src="{{ asset('resource/' . $subproject['image']) }}"
                                                                        alt="{{ $subproject['label'] }}">
                                                                </div>
                                                            </div>

                                                            <div class="col-12 col-xl-7">
                                                                <div class="mb-3">
                                                                    <h4 class="mb-1"
                                                                        style="font-family: Montserrat-SemiBold; color:#03424e;">
                                                                        {{ $subproject['label'] }}</h4>
                                                                    <p class="mb-0 subproject-description">
                                                                        {{ $project->description ?? 'Bloque referencial
                                                                        del subproyecto. Aquí puedes mostrar texto
                                                                        legal, avances, casos y documentos
                                                                        relacionados.' }}
                                                                    </p>
                                                                </div>

                                                                <div class="document-grid">
                                                                    @foreach ($documentTypes as $documentType)
                                                                    @php
                                                                    $pdfRelativePath = $subprojectFileBase . '/' .
                                                                    $documentType['key'] . '.pdf';
                                                                    $pdfExists =
                                                                    file_exists(public_path($pdfRelativePath));
                                                                    @endphp

                                                                    @if ($pdfExists)
                                                                    <a class="document-card"
                                                                        href="{{ asset($pdfRelativePath) }}"
                                                                        target="_blank" rel="noopener noreferrer">
                                                                        <div class="d-flex align-items-start gap-2">
                                                                            <span class="document-icon">PDF</span>
                                                                            <div>
                                                                                <div class="document-title">{{
                                                                                    $documentType['label'] }}</div>
                                                                                <div class="document-subtitle">Descargar
                                                                                    documento</div>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    @else
                                                                    <div class="document-card disabled">
                                                                        <div class="d-flex align-items-start gap-2">
                                                                            <span class="document-icon">PDF</span>
                                                                            <div>
                                                                                <div class="document-title">{{
                                                                                    $documentType['label'] }}</div>
                                                                                <div class="document-subtitle">Pendiente
                                                                                    de carga</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @empty
                                            <div class="alert alert-light border mb-0"
                                                style="border-radius: 16px; color:#37555c;">
                                                No hay subproyectos registrados para este proyecto.
                                            </div>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="p-4 text-center">
                        <h3 style="font-family: Montserrat-SemiBold; color:#03424e;">No hay proyectos registrados</h3>
                        <p class="mb-0" style="color:#37555c;">Agrega proyectos en la BD para que aparezcan aquí.</p>
                    </div>
                    @endforelse
            </div>
        </div>
    </div>
</section>
@endsection
