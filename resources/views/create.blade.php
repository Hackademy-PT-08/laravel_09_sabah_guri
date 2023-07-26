<x-layout>
   <div class="container">
    <h4 class="h1 text-center">Aggiungi articolo</h4>
    <form action="{{route('post-articolo')}}" method="POST" >
     @csrf
     <input type="text" name="titolo" placeholder="titolo articolo" class="form-control">
     <textarea name="contenuto"  cols="30" rows="10" placeholder="Descrizione articolo" class="form-control"></textarea>
     <button type="submit" class="btn btn-primary">Aggiungi</button>
     </form> 
   </div>
</x-layout>