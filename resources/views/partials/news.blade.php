<div class="col-sm-6">
    <div class="card">
        <div class="card-body">
            <strong class="d-inline-block mb-2">{{ $news_item->category_name() }}</strong>
            <h5 class="card-title">{{ $news_item->name }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ date('y.m.d', strtotime($news_item->created_at)) }}</h6>
            <p class="card-text">{{ $news_item->excerpt }}</p>
            <a href="#" class="btn btn-primary">Read more</a>
        </div>
    </div>
</div>