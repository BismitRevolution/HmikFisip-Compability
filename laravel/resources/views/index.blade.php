@extends('main')

@section('title', config('app.name'))

@section('extra-css')
<!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
@endsection

@section('content')
<div class="header-section" id="header">
    <div class="hmik-logo">
        <a class="js-scroll-trigger" href="#header">
            <img class="row" src="{{ asset('img/logo.png') }}" alt="Logo HMIK" id="header-logo">
            <img class="row" src="{{ asset('img/logo-word.png') }}" alt="HMIK FISIP UI" id="header-logo-word">
        </a>
    </div>
    <img src="{{ asset('img/division/cover.JPG') }}" alt="Foto HMIK FISIP UI" class="row col-12" id="header-photo">
</div>


<div class="tentang-kami-section" id="tentang-kami">
    <div class="row">
        <div class="col-md-3 about-title">
            <h3><i><b>TENTANG KAMI</b></i></h3>
        </div>
        <div class="col-md-9">
            <ul class="nav mb-3" id="pills-tab" role="tablist">
                <li class="nav-item text-center">
                    <a class="nav-link active" id="pills-visimisi-tab" data-toggle="pill" href="#pills-visimisi" role="tab" aria-controls="pills-visimisi" aria-selected="true">VISI & MISI</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link" id="pills-rancangan-tab" data-toggle="pill" href="#pills-rancangan" role="tab" aria-controls="pills-rancangan" aria-selected="false">RANCANGAN BESAR</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link" id="pills-struktur-tab" data-toggle="pill" href="#pills-struktur" role="tab" aria-controls="pills-struktur" aria-selected="false">STRUKTUR</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link" id="pills-sejarah-tab" data-toggle="pill" href="#pills-sejarah" role="tab" aria-controls="pills-sejarah" aria-selected="false">LOGO & SEJARAH</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-visimisi" role="tabpanel" aria-labelledby="pills-visimisi-tab">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 desc1">
                            <h4><br><b>VISI</b></h4>
                            <p><i>"Bersama Bermanfaat."</i></p>
                            <h4><br><b>MISI</b></h4>
                            <ol>
                                <li>Mengadakan seluruh program kerja HMIK UI berdasarkan riset terhadap permasalahan dan kebutuhan publik HMIK UI.</li>
                                <li>Menjadikan HMIK UI sebagai wadah aspirasi dari seluruh elemen Komunikasi UI.</li>
                                <li>Berperan secara aktif dan solutif dalam advokasi dan penyelesaian masalah mahasiswa Komunikasi UI.</li>
                                <li>Menciptakan budaya dan iklim organisasi HMIK UI yang solid dan profesional.</li>
                                <li>Mengoptimalkan penyaluran minat dan bakat mahasiswa Ilmu Komunikasi UI secara terbuka.</li>
                            </ol>
                        </div>
                        <div class="col-lg-4 col-md-12 more-click text-right" style="margin-top: 273px;">
                            <a href="#header" style="font-size: 1rem;"><i>TELUSURI LEBIH LANJUT >></i></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-rancangan" role="tabpanel" aria-labelledby="pills-rancangan-tab">
                    <div class="row">
                        <div class="col-lg-8 desc2" style="text-align: justify;">
                            <h4><br><b>RANCANGAN BESAR</b></h4>
                            <p>
                                <br>
                                <b>HMIK UI 2018</b> memiliki visi bersama dan bermanfaat untuk seluruh elemen Komunikasi UI. Kami menyadari bahwa HMIK UI memiliki banyak elemen penting yang perlu diperhatikan, seperti mahasiswa, dosen, karyawan, alumni, dan stakeholder lainnya. Maka dari itu, diperlukan kerjasama antar elemen untuk mengetahui segala aspirasi dan permasalahan yang dirasakan, setelahnya mencari solusi permasalahan yang dirasakan kebermanfaatannya secara konkret.
                                <br><br>
                                Visi bersama memiliki nilai dekat. Secara eksternal, HMIK UI memiliki harapan setiap pengurus HMIK UI memiliki rasa inisiatif untuk membangun kedekatan dengan stakeholder dalam mencari dan mendengarkan permasalahan-permasalahan yang ada di lingkungan Komunikasi UI. Dengan begitu, HMIK UI memiliki landasan untuk bergerak serta mampu mendapat dukungan dari seluruh Ilmu Komunikasi UI. Secara internal, visi bersama diwujudkan melalui pengelolaan sumber daya manusia yang solid dan kompeten. Solid yang dimaksud adalah bagaimana tiap pengurus HMIK UI memiliki keterikatan dengan pengurus lainnya yang diwujudkan dalam bentuk apresiasi. Serta, kompeten yang dimaksud adalah pengurus HMIK UI memiliki skill yang mendukung selama masa kepengurusan.
                                <br><br>
                                Visi bermanfaat memiliki nilai peka dan kritis. Beriringan dengan visi bersama, kami percaya HMIK UI, sebagai sebuah lembaga mahasiswa, kegiatan yang dibuat haruslah secara konkret dibutuhkan oleh elemen Ilmu Komunikasi UI melalui riset dengan mencoba lebih peka mencari permasalahan yang terjadi di lingkungan Ilmu Komunikasi UI. Selanjutnya, HMIK UI harus kritis dan tanggap dalam mengolah permasalahan tersebut agar dapat memberikan solusi yang efektif dan efisien untuk seluruh elemen, terutama Mahasiswa Ilmu Komunikasi UI. Dengan begitu, HMIK UI menjadi lembaga mahasiswa yang dapat dirasakan kebermanfaatannya bagi elemen Ilmu Komunikasi UI.
                            </p>
                        </div>
                        <div class="col-lg-4 more-click text-right" style="margin-top: 711px;">
                            <a href="#header" style="font-size: 1rem;"><i>TELUSURI LEBIH LANJUT >></i></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-struktur" role="tabpanel" aria-labelledby="pills-struktur-tab">
                    <div class="row">
                        <div class="col-lg-8 desc3">
                            <h4><br><b>STRUKTUR</b></h4>
                            <img src="{{ asset('img/bagan.png') }}" alt="Bagan HMIK FISIP UI" id="struktur-organisasi">
                        </div>
                        <div class="col-lg-4 more-click text-right" style="margin-top: 505px;">
                            <a href="#header" style="font-size: 1rem;"><i>TELUSURI LEBIH LANJUT >></i></a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-sejarah" role="tabpanel" aria-labelledby="pills-sejarah-tab">
                    <div class="row">
                        <div class="col-lg-8 desc4" style="text-align: justify;">
                            <h4><br><b>LOGO & SEJARAH</b></h4>
                            <p>
                                <br>
                                Himpunan Mahasiswa Ilmu Komunikasi Universitas Indonesia (HMIK UI) didirikan pada tanggal 12 Desember 1990 sebagai wadah kemahasiswaan  mahasiswa S1 Departemen Ilmu Komunikasi dan organisasi berbasis keilmuan yang berada dalam Fakultas Ilmu Sosial dan Ilmu Politik Universita Indonesia. HMIK berstatus otonom dalam Ikatan Keluarga Mahasiswa Fakultas Ilmu Sosial dan Ilmu Politik Universitas Indonesia. HMIK UI berasaskan kekeluargaan dan memiliki fungsi untuk ikut serta dalam tridharma perguruan tinggi, mengembangkan minat dan bakat mahasiswa Ilmu Komunikasi UI, dan membangun serta memelihara ikatan kekeluargaan antar anggota. HMIK UI juga berperan aktif dalam penerapan ilmu komunikasi dalam peran serta dalam pemecahan masalah sosial yang terjadi di masyarakat. Hal itu diwujudkan dengan program kerja tahunan yaitu Pekan Komunikasi sebuah acara keilmuan nasional yang berisi seminar, workshop, dan perlombaan mengenai Ilmu Komunikasi yang dibahas dari lima peminatan yang dipelajari di Ilmu Komunikasi UI yaitu Hubungan Masyarakat, Periklanan, Jurnalisme, Penyiaran, dan Kajian Media.
                                <br><br>
                                Lambang HMIK merupakan gabungan dari dua objek, yaitu kobaran api dan lingkaran. Kobaran api merepresentasikan mahasiswa yang berada di bawah naungan HMIK UI senantiasa mempunyai semangat untuk terus bersinergi mencapai tujuan bersama. Lingkaran menggambarkan gerakan yang dilakukan tidak linier, akan selalu berulang dan bersifat dinamis. Gabungan dari kedua objek ini membentuk figur matahari sebagai simbol kreativitas yang tanpa batas dan tidak akan ada habisnya. Tulisan HMIK merupakan kependekan dari Himpunan Mahasiswa Ilmu Komunikasi, Lambang Makara UI melambangkan organisasi ini berada dalam lingkungan Universitas Indonesia. Lambang HMIK UI terdiri dari tiga warna, yaitu hijau turquoise, merah, dan jingga kekuningan. Ketiga warna ini menggambarkan tiga prinsip utama HMIK UI. Warna hijau turquoise mempunyai makna kecerdasan tinggi, teknologi, dan kecanggihan, representasi dari prinsip ilmiah. Kemudian warna jingga kekungingan bermakna persahabatan, antusiasme, dan kebahagiaan, representasi dari prinsip sosial. Dan warna merah mempunyai arti ambisi untuk mencapai tujuan, kepemimpinan, dan penghormatan, mewakili prinsip profesional.
                            </p>
                        </div>
                        <div class="col-lg-4 more-click text-right" style="margin-top: 667px;">
                            <a href="#header" style="font-size: 1rem;"><i>TELUSURI LEBIH LANJUT >></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="profil-section" id="profil">
    <div class="row" style="margin-bottom: 30px;">
        <div class="col-sm-12 text-right profile-title">
            <h3><i><b>PROFIL</b></i></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="row">
                <div class="div-img col-md-4">
                    <div class="divisi" id="divisi-01">
                        <div class="image-profile" style="background-image: url({{ asset('img/division/01.JPG') }});"></div>
                        <a href="{{ route('profile.show', 1) }}">
                            <div class="ex-desc">
                                <div class="desc">
                                    <span class="jenis-divisi">
                                        <b>PENGURUS INTI</b><br>
                                    </span>
                                    <span class="desc-divisi">
                                        <i>"HMIK UI memiliki visi bersama dan bermanfaat untuk seluruh elemen Komunikasi UI"</i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="div-img col-md-4">
                    <div class="divisi" id="divisi-02">
                        <div class="image-profile" style="background-image: url({{ asset('img/division/02.JPG') }});"></div>
                        <a href="{{ route('profile.show', 2) }}">
                            <div class="ex-desc">
                                <div class="desc">
                                    <span class="jenis-divisi">
                                        <b>BIDANG ADVOKASI DAN SOSIAL</b><br>
                                    </span>
                                    <span class="desc-divisi">
                                        <i>"Menjadikan Adkesma yang bersahabat secara dekat dan proaktif"</i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="div-img col-md-4">
                    <div class="divisi" id="divisi-03">
                        <div class="image-profile" style="background-image: url({{ asset('img/division/04.JPG') }});"></div>
                        <a href="{{ route('profile.show', 4) }}">
                            <div class="ex-desc">
                                <div class="desc">
                                    <span class="jenis-divisi">
                                        <b>BIDANG HUMAS</b><br>
                                    </span>
                                    <span class="desc-divisi">
                                        <i>"Mewujudkan Humas yang progresif serta suportif terhadap publik HMIK UI 2018"</i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-8">
            <div class="row">
                <div class="div-img col-md-4 text-center">
                    <div class="divisi" id="divisi-04">
                        <div class="image-profile" style="background-image: url({{ asset('img/division/05.JPG') }});"></div>
                        <a href="{{ route('profile.show', 5) }}">
                            <div class="ex-desc">
                                <div class="desc">
                                    <span class="jenis-divisi">
                                        <b>BIDANG MINAT DAN BAKAT</b><br>
                                    </span>
                                    <span class="desc-divisi">
                                        <i>"Mewujudkan Departemen Keilmuan HMIK UI yang harmonis, terbuka, dan berkesinambungan"</i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="div-img col-md-4 text-center">
                    <div class="divisi" id="divisi-05">
                        <div class="image-profile" style="background-image: url({{ asset('img/division/08.JPG') }});"></div>
                        <a href="{{ route('profile.show', 8) }}">
                            <div class="ex-desc">
                                <div class="desc">
                                    <span class="jenis-divisi">
                                        <b>BIRO PSDM</b><br>
                                    </span>
                                    <span class="desc-divisi">
                                        <i>"Menjadi Biro PSDM yang membangun sinergi internal HMIK UI 2018 dan meningkatkan kualitas sumber dayanya secara menyeluruh"</i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="div-img col-md-4 text-center">
                    <div class="divisi" id="divisi-06">
                        <div class="image-profile" style="background-image: url({{ asset('img/division/09.JPG') }});"></div>
                        <a href="{{ route('profile.show', 9) }}">
                            <div class="ex-desc">
                                <div class="desc">
                                    <span class="jenis-divisi">
                                        <b>BIRO KEUANGAN</b><br>
                                    </span>
                                    <span class="desc-divisi">
                                        <i>"Menjadi Biro Keuangan yang mementingkan profesionalitas, mengedepankan inovasi, dan menjunjung kedekatan antaranggota"</i>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

<div class="text-center green-dark" style="margin-top: 35px;">
    <h1 style="font-family: 'Benton'; letter-spacing: 5px; word-spacing: 10px; text-shadow: -2px 2px var(--color-yellow-dark);">POJOK MAHASISWA</h1>
</div>

<div id="pojok-mahasiswa" class="bg-green-dark white">
    <div class="container">
        <div class="row">
            <a class="col-12 col-md-4 white" href="https://drive.google.com/file/d/1DtCVRmpOg0mHpSQm4sH3FelvY4NVCZYQ/view" style="text-decoration:none;" target="_blank">
                <div class="row text-center" style="display: block;">
                    <img class="col-12" src="{{ asset('img/komunikasi-101.png') }}" alt="">
                    <div class="col-12">
                        <h5 class="title">KOMUNIKASI 101</h5>
                        <p class="paragraph">KOM 101 hadir untuk membantu kalian dengan menyediakan informasi-informasi seputar komunikasi, perkuliahan, dan lain-lain.</p>
                    </div>
                </div>
            </a>
            <a class="col-12 col-md-4 white" href="#" style="text-decoration: none;" target="_blank" data-toggle="modal" data-target="#portalModal">
                <div class="row text-center" style="display: block;">
                    <img class="col-12" src="{{ asset('img/portal-keilmuan.png') }}" alt="">
                    <div class="col-12">
                        <h5 class="title">PORTAL KEILMUAN</h5>
                        <p class="paragraph">Portal Keilmuan menyediakan berbagai macam bahan bacaan seperti materi UTS, UAS, hingga bahan bacaan sastra.</p>
                    </div>
                </div>
            </a>
            <div class="modal fade" id="portalModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <a href="https://drive.google.com/drive/u/1/folders/0B3auWJpCO4luX3UtRW5FeTkwTXM" class="btn bg-green-dark white" target="_blank">Ganjil</a>
                            <a href="https://drive.google.com/drive/u/2/mobile/folders/0B3auWJpCO4lua3JWMWVXM2FBOFk?sort=13&direction=a" class="btn bg-green-dark white" target="_blank">Genap</a>
                            <a href="https://drive.google.com/drive/u/2/mobile/folders/0B3auWJpCO4luQmRfTDUwNW1vSWM?sort=13&direction=a" class="btn bg-green-dark white" target="_blank">Sastra</a>
                            <a href="https://drive.google.com/drive/u/2/mobile/folders/0B3auWJpCO4luSllMSXMyaHBQZzg?sort=13&direction=a" class="btn bg-green-dark white" target="_blank">UTS 2017</a>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-green-light white" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <a class="col-12 col-md-4 white" href="https://docs.google.com/forms/d/e/1FAIpQLSdKL67spuTM8EK-v9I3bwVSkbq0VubuX5RZQYcWLo8IHjY1RA/viewform" style="text-decoration:none;" target="_blank">
                <div class="row text-center" style="display: block;">
                    <img class="col-12" src="{{ asset('img/ruang-aspirasi.png') }}" alt="">
                    <div class="col-12">
                        <h5 class="title">RUANG ASPIRASI</h5>
                        <p class="paragraph">Ayo, sampaikan aspirasimu melalui Ruang Aspirasi!</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

<div class="container ruang-estetika" id="RE">
    <div class="text-center" style="margin-bottom: 45px;">
        <img src="{{ asset('img/header.png') }}" alt="Ruang Estetika" style="max-width: 300px;">
    </div>
    <div class="row">
        <div class="col-6 col-sm-3">
            <a href="{{ route('article.category', 'literatur') }}" style="width: 100%;">
                <img src="{{ asset('img/kubus-literatur.png') }}" style="max-width: 100%; max-height: 100%;"
                onmouseover="this.src='{{ asset('img/kubus-literatur-clicked.png') }}'"
                onmouseout="this.src='{{ asset('img/kubus-literatur.png') }}'">
            </a>
        </div>
        <div class="col-6 col-sm-3">
            <a href="{{ route('article.category', 'visual') }}" style="width: 100%;">
                <img src="{{ asset('img/kubus-visual.png') }}" style="max-width: 100%; max-height: 100%;"
                onmouseover="this.src='{{ asset('img/kubus-visual-clicked.png') }}'"
                onmouseout="this.src='{{ asset('img/kubus-visual.png') }}'">
            </a>
        </div>
        <div class="col-6 col-sm-3">
            <a href="{{ route('article.category', 'video') }}" style="width: 100%;">
                <img src="{{ asset('img/kubus-video.png') }}" style="max-width: 100%; max-height: 100%;"
                onmouseover="this.src='{{ asset('img/kubus-video-clicked.png') }}'"
                onmouseout="this.src='{{ asset('img/kubus-video.png') }}'">
            </a>
        </div>
        <div class="col-6 col-sm-3">
            <a href="{{ route('article.category', 'musik') }}" style="width: 100%;">
                <img src="{{ asset('img/kubus-musik.png') }}" style="max-width: 100%; max-height: 100%;"
                onmouseover="this.src='{{ asset('img/kubus-musik-clicked.png') }}'"
                onmouseout="this.src='{{ asset('img/kubus-musik.png') }}'">
            </a>
        </div>
    </div>
</div>

<div class="artikel-section" id="artikel">
    <div class="row">
        <div class="col-md-9 carousel-place">
            <!--carousel-->
            <!--<div class="container">-->
            <!--<div class="row">-->
            <!-- "data-items" number of item showed for xs, sm, md, lg, xl-->
            <!-- "data-slide" number of item will be slided when clikced-->
            <div class="MultiCarousel" data-items="2.5,3,3,3,3" data-slide="1" id="MultiCarousel"  data-interval="1000">
                <div class="MultiCarousel-inner">
                    @if(count($articles) < 1)
                    Belum ada konten
                    @endif
                    @foreach($articles as $article)
                    <div class="item">
                        <div class="pad10" id="article-01">
                            @if (count($article->media) > 0)
                            <img src="{{ '/storage/'.$article->media[0]->path }}" class="image-profile">
                            @endif
                            <div class="ex-desc">
                                <div class="desc">
                                    <span class="filter-event">
                                        <i>{{ $article->category }}</i><br>
                                    </span>
                                    <span class="judul-event">
                                        <b>{{ $article->title }}</b></br>
                                    </span>
                                    <span class="tanggal-event">
                                        {{ $article->created_at }}<br><br><br>
                                    </span>
                                    <span class="desc-event">
                                        {{ substr($article->body, 0, 50) }}{{ strlen($article->body) > 100 ? '....' : '' }}<br><br>
                                    </span>
                                    <a class="read-more" href="{{ route('article.show', $article->article_id) }}">
                                        Read more
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="btn btn-primary leftLst"><b>V</b></button>
                <button class="btn btn-primary rightLst"><b>V</b></button>
                <!--</div>-->
            </div>
            <!--</div>-->
        </div>
        <div class="col-md-3 text-left article-title">
            <h3><i><b>ARTIKEL</b></i></h3>
        </div>
    </div>
</div>
@endsection

@section('extra-js')
<!-- <script type="application/javascript" src="{{ asset('js/app.js') }}"></script> -->
@endsection
