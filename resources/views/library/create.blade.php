<x-layout>
    <x-slot name="title">Inserisci</x-slot>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

{{-- Form create --}}

<section>
    <div class="container m-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">

                <form method="post" action="{{route('library.store')}}" enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Nome</label>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control" id="exampleInputName" aria-describedby="name">
                      </div>
                    
                    <div class="mb-3">
                        <label for="exampleInputCity" class="form-label">Città</label>
                        <input type="text" name="city" value="{{old('city')}}" class="form-control" id="exampleInputCity" aria-describedby="city">
                    </div>
                
                    <div class="mb-3">
                        <label for="exampleInputImage" class="form-label">Immagine</label>
                        <input type="file" name="image" class="form-control" id="exampleInputImage">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputBooks" class="form-label">Rarità da segnalare</label>
                        <select name="books[]" multiple class="form-control">

                            @foreach ($books as $book)
                                <option value="{{$book->id}}">{{$book->title}} - {{$book->author}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputDescription" class="form-label">Descrizione</label>
                        <textarea name="description" class="form-control" id="exampleInputDescription" aria-describedby="description">{{old('description')}}</textarea>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="btn button px-5">Conferma</button>
                    </div>
                    
                
                  </form>

            </div>
        </div>
    </div>
</section>





</x-layout>