<div class="row mx-3 my-4 d-flex justify-content-center" >
    <div class="col-12 col-sm-4 px-3 d-flex align-items-center">
        <img src="{{asset('assets/' . $article->photo_name)}}" alt="Photo" style="border-radius: 15px; width: 100%; height: 100%; object-fit: fill;">
    </div>

    <div class="col-12 col-sm-8 d-flex flex-column justify-content-between ">
        <div class="card-group d-flex flex-column">
            <h5 class="card-title ">{{$article->title}}</h5>
            <div class="d-flex">
                <p class="card-text fs-6 ">{{$article->created_at->format('d F Y') . " | by:"}}&nbsp</p>
                <a href="{{route('articleByWriter', ['writer' => $article->writer])}}" style="text-decoration: none; color:black;" onmouseover="this.style.textDecoration = 'underline';" onmouseout="this.style.textDecoration = 'none';">{{$article->writer->name}}</a>
            </div>
            <p class="card-text fs-6 text-truncate" style="max-width: 100%">{{$article->description}}</p>
        </div>
        <a href="{{route('article', ['id' => $article->id])}}" class="btn btn-dark align-self-end rounded-pill" style="width: 15rem">read more...</a>
    </div>
</div>