<x-layout>

   <!-- /resources/views/post/create.blade.php -->
 
    <h1>Accedi  al tuo profilo</h1>
 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<!-- Create Post Form -->
    <form action="/login" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Accedi">
    </form>
</x-layout>