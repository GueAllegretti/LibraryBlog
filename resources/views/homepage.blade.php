<x-layout>
    <x-slot name="title">Home</x-slot>
        <h1 class="mb-5"><b>Librerie d'Italia</b></h1>

    <section class="vh-100">
        <div class="container">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
    
                    @foreach ($libraries as $library)
    
                    <div class="carousel-item {{$library['id']==1?'active':''}} mt-5">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{Storage::url($library->image)}}" class="d-block slider-img" alt="...">
                            </div>
                            <div class="col-md-4 d-flex flex-wrap justify-content-center align-items-center">
                                <h3>{{$library->name}}</h3>
                                <p class="card-text card-style-box text-center">{{$library->description}}</p>
                                <a href="{{route('library.show', ["library" => $library, "name" => $library->name])}}" class="btn button">Scopri di più</a>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>        
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left fa-2x library-icone"></i></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right fa-2x library-icone"></i></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section> 

        {{-- contatori --}}
    <section class="wh-100 counter-section">
        <div class="container vh-100">
            <div class="row">
                <div class="col-12 col-lg-6 p-5 text-center">
                    <h2><b>Lorem ipsum dolor</b></h2>
                        <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dignissimos dicta mollitia totam explicabo obcaecati quia laudantium repudiandae.
                        </p>
                    <div>
                        <div class="row">
                            <div class="col-6 text-center mt-5">
                                <i class="fas fa-atlas fa-2x library-icone"></i>
                                <h2 id="italianLibraries">0</h2>
                                <p class="mb-5">LIBRERIE ITALIANE</p>
                                <i class="fas fa-book-open fa-2x library-icone"></i>
                                <h2 id="insertedBooks">0</h2>
                                <p>LIBRI INSERITI</p>
                            </div>
                            <div class="col-6 text-center mt-5">
                                <i class="fas fa-plus-square fa-2x library-icone"></i>
                                <h2 id="insertedLibraries">0</h2>
                                <p class="mb-5">LIBRERIE INSERITE</p>
                                <i class="fas fa-users fa-2x library-icone"></i>
                                <h2 id="userActive">0</h2>
                                <p>UTENTI ATTIVI</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 mt-5">
                    <img src="./media/bg-sec-cont.jpg" alt="" class="img-fluid rounded-circle">
                </div>
            </div>
        </div>
    </section> 
            
</x-layout>