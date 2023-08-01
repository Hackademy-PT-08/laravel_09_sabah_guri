<x-layout>
    
    <h1 class="h1 text-center ">Modifica l'articolo : {{$article->title}}</h1>
    <form action="{{route('articles-update',[$article])}}" method="POST" enctype="multipart/form-data">
        @csrf   
        @method('PUT')
        <input type="text" name="titolo" placeholder="Titolo" value="{{old('titolo')}}">
        <textarea name="contenuto"  cols="50" rows="1" placeholder="{{old('contenuto')}} Descrizione" ></textarea>
        <input type="file" name="immagine" placeholder="Nuova immagine">
        <input type="submit" value="Modifica">
    </form>
    

    <form action="{{route('articles-delete',[$article])}}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Elimina</button>
    </form>
</x-layout>