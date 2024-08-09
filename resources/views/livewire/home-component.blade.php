<div>
    <div class="hero_area">
        <section class=" slider_section position-relative">
            <div class="slider_number-container ">
            </div>
            <div class="container">
                <div class="row">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="col-lg-6 col-md-8">
                                    <div class="detail_box">
                                        <h2>
                                            Bienvenidos
                                        </h2>
                                        <h1>
                                            Floristeria, Eventos y más
                                        </h1>
                                        <p class="text-left">
                                            Las flores son más que simples adornos, son expresiones de amor, alegría y
                                            cariño. En Decora Con Victoria, no solo creamos arreglos florales, sino que
                                            tenemos historias con cada pétalo, brindando experiencias únicas que llenan
                                            de vida cualquier espacio.
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-lg-6 col-md-8">
                                    <div class="detail_box">
                                        <h2>
                                            Welcome
                                        </h2>
                                        <h1>
                                            Flowers, Events, and More
                                        </h1>
                                        <p class="text-left">
                                            Flowers are more than just decorations, they are expressions of love, joy,
                                            and affection. At Decora Con Victoria, we not only create floral
                                            arrangements, but we weave stories with every petal, providing unique
                                            experiences that bring life to any space.
                                        </p>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </section>
    </div>
    <section class="about_section ">

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-7">
                    <div class="img-box">
                        <img src="{{asset('assets/images/about-img.png')}}" alt="" />
                    </div>
                </div>
                <div class="col-md-5 col-xl-5">
                    <div class="detail_box">
                        <div class="heading_container justify-content-center">
                            <h2>
                                Con Victoria: Las Flores
                            </h2>
                        </div>
                        <p class="text-left">
                            Son el lenguaje universal de la belleza. Cada pétalo, un susurro de color que
                            transmite alegría, ternura y calidez. Desde la delicadeza de las violetas hasta la
                            majestuosidad de las hortensias, forman un caleidoscopio de formas y aromas que cautivan
                            nuestros sentidos. Son embajadoras de la naturaleza, capaces de transformar cualquier
                            espacio en un oasis de serenidad. Unas flores frescas iluminan un día sombrío, mientras que
                            otras realzan momentos especiales con su elegancia. Más allá de su belleza visual, las
                            flores simbolizan esperanza y renovación. Su ciclo de vida, desde el brote hasta la
                            floración, nos recuerda la impermanencia y la constante transformación del mundo natural.
                            Son un regalo para el alma, un recordatorio de la simpleza y la belleza que nos rodea a
                            diario
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end about section -->

    <!-- why section -->
    <section class="why_section layout_padding">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>
                        ¿Por qué elegirnos?
                    </h2>
                    <p class="text-left">
                        En nuestro acogedor refugio floral, la pasión por las flores se entrelaza con la creatividad y
                        la atención al detalle. Victoria, la artista floral detrás de cada creación, selecciona
                        cuidadosamente las flores más frescas y de la más alta calidad, transformándolas en obras de
                        arte que capturan la esencia de cada ocasión.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <!-- end why section -->

    <!-- gallery section -->
    {{-- <section class="gallery_section layout_padding">

        <div class="heading_container justify-content-center">
            <h2>
                Galeria
            </h2>
        </div>
        <div class="container">
            <div class="img_container">
                <div class="box-1">
                    <div class="box-1-container">
                        @forelse ($imagenes as $imagen )
                        <div class="b-1 w-2">
                            <div class="image-item">
                                <img src="{{ asset('storage/imagenes/' . $imagen->filename) }}">
                            </div>
                        </div>
                        @empty
                        <h1>No hay </h1>
                        @endforelse

                    </div>
                </div>


            </div>

    </section>
   
    <!-- end gallery section -->
 --}}

    <section class="gallery min-vh-100">
        <div class="heading_container justify-content-center mb-2">
            <h2>
                Galeria
            </h2>
        </div>
        <div class="container-lg ">
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                @forelse ($imagenes as $imagen)
                <div class="col">
                    <img src="{{ asset('storage/imagenes/' . $imagen->filename) }}">
                </div>


                @empty
                <h1>No hay Publicaciones</h1>
                @endforelse
            </div>
        </div>
        <div class="button-container">
            <a class="inline-button items-center" href='galeria'>
                {{ __('Ver Más') }}
            </a>
        </div>
    </section>
    <!-- arrange section modal -->


    <section class="arrange_section">
        <div class="container">
            <div class="detail_box">
                <h2>
                    Eventos
                </h2>
                <p class="text-left">
                    En Decora Con Victoria, no solo somos expertos en crear arreglos florales que cautivan los sentidos,
                    sino que también somos maestros en transformar cualquier espacio en un escenario inolvidable para
                    tus eventos más especiales.

                    Bodas de ensueño, quinceañeras vibrantes, eventos corporativos que inspiren y decoraciones
                    personalizadas que reflejen tu esencia, son solo algunas de las experiencias únicas que podemos
                    crear para ti.

                    Con pasión por el detalle y una visión creativa excepcional, nuestra artista te
                    acompañará en cada paso del proceso, desde la conceptualización de tus ideas hasta la ejecución
                    impecable de cada elemento decorativo.

                    Déjate llevar por la magia de las flores y permite que Decora Con Victoria convierta tus eventos en
                    momentos extraordinarios que permanecerán por siempre en tu memoria.
                </p>
            </div>
        </div>
    </section>

    <!-- end arrange section -->

    <!-- map section -->

    <div class="map_section">
        <div class="map_container">
            <div class="map">
                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.00192102562!2d-88.78618002408871!3d14.768921885737672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6409ee4f11b147%3A0xbbea964e433ec8a3!2sCasa%20Victoria!5e0!3m2!1sen!2sde!4v1716390374137!5m2!1sen!2sde"
                        width="1700" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- end map section -->
</div>


@push('scripts')
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
@endpush