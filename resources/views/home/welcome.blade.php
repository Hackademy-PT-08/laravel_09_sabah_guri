<x-layout>
    <div class="container">
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-12 col-md-4">
                    <div class="card" style="max-height: 500px;">
                        @if ($article->image!=="")
                            <img src="{{asset('storage/articles/'.$article->image)}}" alt="{{$article->title}}" class="img-fluid">
                        @endif
                        <div class="card-body">
                            <p class="h2 card-title">{{$article->title}} </p>
                            <p class="card-text">{{$article->content}}</p>
                        </div>
                    </div>
                </div>               
            @endforeach
        </div>
    </div>
</x-layout>
