<x-layout>
    <x-slot name="title">Librerie</x-slot>


    <div class="container-fluid p-5">
      <div class="row justify-content-center align-items-center">
        <div class="col-12-col-md-6">
          {{-- flash message --}}
            @if (session('message'))
              <div class="alert alert-success">
                  {{ session('message') }}
              </div>
            @endif
          <h1>Librerie d'Italia</h1>
        </div>
      </div>
    </div>

  <div class="container">
    <div class="row justify-content-center align-items-center">
       
      @if (count($libraries) == 0)
        <div class="col-12 col-md-6">
          <h3>Non sono presenti librerie al momento</h3>
        </div>
      @else

          @foreach ($libraries as $library)
            <div class="col-12 col-md-4">
              <div class="card card-style m-3">
                @if (!$library->image)
                <img src="/media/libreria.jpeg" class="card-img-top img-style" alt="library">
                @else

                @endif

                  <img src="{{Storage::url($library->image)}}" class="card-img-top img-style" alt="library">
                  <div class="card-body">
                    <h5 class="card-title">{{$library->name}}</h5>
                    <p class="card-text">{{$library->city}}</p>
                    <p class="card-text card-style-box">{{$library->description}}</p>
                    <a href="{{route('library.show', ["library" => $library, "name" => $library->name])}}" class="btn button">Scopri di più</a>
                  </div>
                </div>
            </div>
          @endforeach

      @endif

    </div>  
  </div>   
</x-layout>