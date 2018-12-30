@extends('main')

@section('content')
	<div class="container profile-page">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8" "description-section">
                <div class="nama-divisi">
                    {{ $division->divisi }}
                </div>
				<br>
                <div class="foto-divisi">
                    <img src="{{ asset('img/' . $division->url_foto) }}" alt="{{ $division->divisi }}" class="image-profile">
                </div>
				<br>
                @if($division->struktur != null)
                <div class="judul-teks">STRUKTUR ANGGOTA</div>
				<br>
                <div class="desc">
                    {!! nl2br(e($division->struktur)) !!}
                </div>
                @else
                <div class="judul-teks">VISI</div>
                <br>
                <div class="desc">
                    {!! nl2br(e($division->visi)) !!}
                </div>
                <br>
                <div class="judul-teks">MISI</div>
                <br>
                <div class="desc">
                    {!! nl2br(e($division->misi)) !!}
                </div>
                <br>
                <div class="judul-teks">PROGRAM KERJA</div>
                <br>
                <div class="desc">
                    {!! nl2br(e($division->program)) !!}
                </div>
                @endif
            </div>
            <div class="col-2"></div>
        </div>
    </div>
@endsection
