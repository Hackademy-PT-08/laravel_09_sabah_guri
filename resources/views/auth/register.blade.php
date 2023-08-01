<x-layout>
   <!-- /resources/views/post/create.blade.php -->
 

 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<!-- creo il fomr per la registrazione utilizzando ulcune classi di bootstrap-->

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <form action="/register" method="post" class="shadow mt-5 py-5">
                            @csrf <!--token necessario per il form-->
                            <h1 class="h1 px-2 text-center">Registrati al nostro portale</h1>
                            <div class="ms-3 justify-content-center">
                                <input type="text" class="form-control-lg my-2" name="name" placeholder="Nome Cognome" value="{{old('name')}}"><br>
                                <input type="email" class="form-control-lg my-2"  name="email" placeholder="Email" value="{{old('email')}}"><br>
                                <input type="password" class="form-control-lg my-2"  name="password" placeholder="Password"><br>
                                <input type="password" class="form-control-lg my-2"  name="password_confirmation" placeholder="Conferma la password"><br>
                                <input type="submit" class="btn btn-primary" value="registrati ">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
</x-layout>
