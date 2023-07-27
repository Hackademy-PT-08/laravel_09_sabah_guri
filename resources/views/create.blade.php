<x-layout>

   @if ($errors->any())
   @foreach ($errors->all() as $error)
       <p class="alert alert-danger">
         {{$error}}
       </p>
   @endforeach
       
   @endif
   <div class="container">
      <div class="row justify-content-center">
         <div class=" col-12 col-md-8">
            <h4 class="h1 text-center">Aggiungi articolo</h4>
            <form action="{{route('post-articolo')}}" method="POST" enctype="multipart/form-data">
             @csrf
             <input type="text" name="titolo" placeholder="titolo articolo" class="form-control">
             <textarea name="contenuto"  cols="3" rows="3" placeholder="Descrizione articolo" class="form-control"></textarea>
             <input type="file" class="form-control" name="immagine">
             {{-- <input type="hidden" name="id" value=""> --}}
             <button type="submit"  class="btn btn-primary mt-1">Aggiungi</button>
             </form> 
         </div>
      </div>
   </div>
</x-layout>