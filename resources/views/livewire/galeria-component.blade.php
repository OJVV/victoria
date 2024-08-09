<div>
    <section class="gallery min-vh-100">
        <div class="heading_container justify-content-center">
            <h2>
                Galeria
            </h2>
        </div>
       
        <div class="container-lg ">
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                @forelse ($imagenes as $imagen)
                <div class="col">
                    <div class="img-wrapper">
                        <img src="{{ asset('storage/imagenes/' . $imagen->filename) }}">
                    </div>
                </div>
                @empty
                <h1>No hay Publicaciones</h1>
                @endforelse
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            {{$imagenes->links('pagination::bootstrap-4')}} 
        </div>
    </section>

   
</div>