<x-layout>
   @if ($errors->any())
       @foreach ($errors->all() as $error)
         {{$error}}

       @endforeach
   @endif
   <div class="container">
      <div class="row justify-content-center">
         <div class=" col-12 col-md-8">
            <h4 class="h1 text-center">Aggiungi articolo</h4>
            <form action="{{route('post-articolo')}}" method="POST" enctype="multipart/form-data">
             @csrf
             <input type="text" name="titolo" placeholder="titolo articolo" class="form-control" value="{{old('titolo')}}">
               
             <textarea name="contenuto"  cols="3" rows="3" placeholder="Descrizione articolo" class="form-control">{{old('contenuto')}}</textarea>
             <input type="file" class="form-control" name="immagine" value="{{old('immagine')}}" >
             {{-- <input type="hidden" name="id" value=""> --}}
             <button type="submit"  class="btn btn-primary mt-1">Aggiungi</button>
             </form> 
         </div>
      </div>
   </div>
   
   

   
  
</x-layout>
