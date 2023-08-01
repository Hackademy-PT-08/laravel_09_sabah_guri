<x-layout>
    <h1 class="h1">Profilo utente</h1>

    <h2 class="h2">{{$users->name}} </h2>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- form per aggiornare il profilo --}}
    <form action="/user/profile-information" method="post">
        <h2 class="h4">Aggiorna informazioni utente</h2>
        @csrf
        @method('PUT')
        <input class="form-control-sm" type="text" name="name" placeholder="Nome Cognome">
        <input class="form-control-sm" type="email" name="email" placeholder="Email" >
        <input class="btn btn-sm btn-secondary" type="submit" value="Aggiorna">

    </form>

    <form class="mt-5" action="/user/password" method="post">
        <h2 class="h4">Aggiorna password</h2>
        @csrf
        @method('PUT')
        <input class="form-control-sm" type="password" name="current_password" placeholder="Password Attuale" >
        <input class="form-control-sm" type="password" name="password" placeholder="Nuova password" >
        <input class="form-control-sm" type="password" name="password_confirmation" placeholder="Conferma password" >
        <input class="btn btn-sm btn-secondary" type="submit" value="Aggiorna password">

    </form>


</x-layout>