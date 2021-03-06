<!-- course section -->
<section class="course-section spad">
    <div class="container">
        <div class="section-title mb-3">
            <h2>{{ __("Listado de cursos") }}</h2>
            <p>{{ __("Aquí tienes los cursos destacados de la plataforma.") }}</p>
        </div>
    </div>
    <div class="course-warp">

        <div class="row course-items-area">

            @forelse($cursos as $curso)
                @include('principal.cursos.unico')
            @empty
                <div class="col-12">
                    <div class="empty-results">
                        {!! __("No hay cursos para mostrar") !!}
                    </div>
                </div>
            @endforelse
        </div>

        <div class="row justify-content-center mt-2">
        @if(count($cursos))
            {{ $cursos->links('vendor.pagination.bootstrap-4') }}
        @endif
        <!-- course -->
        </div>
    </div>
</section>
<!-- course section end -->
