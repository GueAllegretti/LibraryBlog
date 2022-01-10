<x-layout>
    <x-slot name="title">Register</x-slot>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

{{-- Form register --}}

<section>
    <div class="container m-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">

                <form method="POST" action="{{route('register')}}">

                    @csrf
                
                    <div class="mb-3">
                      <label for="exampleInputUsername" class="form-label">Username</label>
                      <input type="text" name="name" class="form-control" id="exampleInputUsername" aria-describedby="usernameHelp">
                    </div>
                
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                      </div>
                
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                
                    <div class="mb-3">
                        <label for="exampleInputPasswordConfirmation" class="form-label">Conferma password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPasswordConfirmation">
                      </div>
                
                    <button type="submit" class="btn button">Submit</button>
                
                  </form>

            </div>
        </div>
    </div>
</section>





</x-layout>