@extends('main')

@section('title', $article->category)

@section('content')
	<div class="container profile-page">
        <div class="row">
            <div class="col-8 offset-2 description-section">
                <div class="nama-divisi">
                    <b>{{ $article->title }}</b>
                </div>
				<br>
                <div class="foto-divisi">
					@if (count($media) > 0)
                    <img src="{{ '/storage/'.$media[0]->path }}" class="image-profile">
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
                <div class="desc" style="text-align: justify;">
                    {!! nl2br(e($article->body)) !!}<br><br>
                </div>
            </div>
        </div>
    </div>
@endsection
