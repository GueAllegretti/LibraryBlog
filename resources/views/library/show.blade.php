<x-layout>
    <x-slot name="title">Dettagli libreria</x-slot>


    <div class="container-fluid p-5">
      <div class="row justify-content-center align-items-center">
        <div class="col-12-col-md-6">
          {{-- flash message --}}
            @if (session('message'))
              <div class="alert alert-success">
                  {{ session('message') }}
              </div>
            @endif
          <h1>Dettagli</h1>
        </div>
      </div>
    </div>

  <div class="container mb-5">
    <div class="row justify-content-center align-items-center">
       
            <div class="col-12 col-md-6">
              <div class="card">
                <div class="card-header" style="text-align:center; color:#601f1a; font-size:20px;">{{$library->name}}</div>
                  <img src="{{Storage::url($library->image)}}" class="card-img-top" alt="img_library">
                  <div class="card-body">
                    <p class="card-text">{{$library->city}}</p>
                    <p class="card-text">{{$library->description}}</p>
                    <hr>
                    <p class="card-text">Aggiunta il {{$library->created_at->format('d/M/Y')}} da {{$library->user->name}}</p>
                    <hr>
                    <p class="card-text">Rarità da segnalare</p>
                      <ul>
                        @foreach ($library->books as $book)
                            <li>{{$book->title}}, {{$book->author}}</li>
                        @endforeach
                      </ul>
                    <hr>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                      <a href="{{route('library.index')}}" class="btn button"><i class="fas fa-undo-alt"></i></a>
                      <a href="{{route('library.edit', compact('library'))}}" class="btn button">Modifica</a>
                    
                      <form method="POST" action="{{route('library.destroy', compact('library'))}}" class="">
                        @csrf
                        @method('delete')
                        <button class="btn button" type="submit">Delete</button>
                      </form>
                    </div>
                  </div>
                </div>
                </div>
            </div>

    </div>  
  </div> 

</x-layout>

