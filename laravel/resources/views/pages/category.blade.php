@extends('main')

@section('title', $category)

@section('content')
	<div class="container profile-page">
        <div class="row">
			@if(count($articles) < 1)
			<div class="col-8 offset-2 description-section">
                <div class="judul-teks">
					Belum ada konten
                </div>
			</div>
			@endif
            @foreach($articles as $article)
            <div class="col-8 offset-2 description-section">
                <div class="nama-divisi">
					<b>{{ $article->title }}</b>
                </div>
				<br>
                <div class="foto-divisi">
					@if(count($article->media) > 0)
					<img src="{{ '/storage/'.$article->media[0]->path }}" class="image-profile">
					@endif
                </div>
				<br>
                <div class="judul-teks">Dipost</div>
				<br>
                <div class="desc">
                    {{ $article->created_at }}
                </div>
				<br>
                <div class="judul-teks"></div>
				<br>
                <div class="desc row">
					<p class="col-12 col-md-8">
						{{ substr($article->body, 0, 50) }}{{ strlen($article->body) > 100 ? '....' : '' }}<br><br>
					</p>
					<a class="col-12 col-md-4 green-dark" href="{{ route('article.show', $article->article_id) }}">Baca selengkapnya</a>
                </div>
            </div>
			<div class="col-8 offset-2 divider bg-green-dark" style="height: 5px; margin-top: 20px; margin-bottom: 20px;">

			</div>
            @endforeach
        </div>
    </div>
@endsection
