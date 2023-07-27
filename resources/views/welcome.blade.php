<x-layout>
    <div class="container">
        <div class="row">

            
            @foreach ($articles as $article)
                <div class="col-12 col-md-4">

                    
                    @if ($article->image!=="")
                    <img src="{{asset('storage/articles/'.$article->image)}}" alt="{{$article->title}}" class="img-fluid">
                    @endif
                    <h4 class="h1">{{$article->title}}</h4>  
                    <h6 class="h3">{{$article->content}} </h6>   
                </div>               
            @endforeach
        </div>
    </div>
</x-layout>
