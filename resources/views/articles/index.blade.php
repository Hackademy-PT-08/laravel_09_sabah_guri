<x-layout>
    <div class="container py-5 my-5">
        <div class="row mb-5">
            @foreach ($articles as $article)
                <div class="col-12 col-md-4 mb-5">
                    <div class="card" style="max-height: 500px;">
                        @if ($article->image!=="")
                            <img src="{{asset('storage/articles/'.$article->image)}}" alt="{{$article->title}}" class="img-fluid">
                        @endif
                        <div class="card-body">
                            <p class="h2 card-title">{{$article->title}} </p>
                            <p class="card-text">{{$article->content}}</p>
                            <p class="small"><a   href="{{route('edit.articles',[$article])}}" style="text-decoration: none">Modifica</a></p>
                        </div>
                    </div>
                </div>               
            @endforeach
        </div>
    </div>
</x-layout>