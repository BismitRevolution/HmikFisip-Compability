<nav class="navbar navbar-expand-lg fixed-top navbar-light new-navbar">
    <div class="navbar-brand">
        <div class="background-logo" id="logo"></div>
        <a class="js-scroll-trigger" href="{{ route('index') }}">
            <img src="{{ asset('img/logo.png') }}" alt="Logo HMIK" class="navbar-logo" id="nav-logo">
            <img src="{{ asset('img/logo-word.png') }}" alt="HMIK FISIP UI" class="navbar-logo" id="nav-logo-word">
        </a>
    </div>

    <div class="container-fluid navbar-container">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar-main" aria-controls="navbar-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-main">
            <ul class="nav navbar-nav text-uppercase ml-auto text-center">
                <li class="nav-item home-link"><a id="nav-home" class="nav-link" href="{{ route('index') }}">HOME</a></li>
                <li class="nav-item"><a id="nav-about" class="nav-link" href="#tentang-kami">TENTANG KAMI</a></li>
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#profil" id="dropdownProfil" data-toggle="collapse" data-target=".navbar-collapse.show" aria-haspopup="true" aria-expanded="false">
                        PROFIL
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownProfil">
                        <a class="dropdown-item" href="#">Pengurus Inti</a>
                        <a class="dropdown-item" href="#">Bidang Advokasi dan Sosial</a>
                        <a class="dropdown-item" href="#">Bidang Humas</a>
                        <a class="dropdown-item" href="#">Bidang Minat dan Bakat</a>
                        <a class="dropdown-item" href="#">Bidang Humas</a>
                        <a class="dropdown-item" href="#">Biro Pengembangan Sumber Daya Manusia</a>
                        <a class="dropdown-item" href="#">Biro Keuangan</a>
                    </div>
                </li> -->
                <li class="nav-item dropdown">
                <a id="nav-profile" href="#profil" class="nav-link" id="dropdownProfil" aria-haspopup="true" aria-expanded="false">
                    PROFIL
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownProfil">
                    <a class="dropdown-item" href="{{ route('profile.show.bph') }}">Pengurus Inti</a>
                    <a class="dropdown-item dropdown">
                        <a class="dropdown-item dropdown-toggle" id="dropdownAdvokasiSosial" data-toggle="dropdown" data-target=".navbar-collapse.show" aria-haspopup="true" aria-expanded="false">
                            Bidang Advokasi dan Sosial
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownAdvokasiSosial">
                            <a class="dropdown-item" href="{{ route('profile.show.adkesma') }}">Departemen Advokasi dan Kesejahteraan Mahasiswa</a>
                            <a class="dropdown-item" href="{{ route('profile.show.sosmas') }}">Departemen Sosial Masyarakat</a>
                        </div>
                    </a>
                    <a class="dropdown-item" href="{{ route('profile.show.humas') }}">Bidang Humas</a>
                    <a class="dropdown-item dropdown">
                        <a class="dropdown-item dropdown-toggle" id="dropdownMinBak" data-toggle="dropdown" data-target=".navbar-collapse.show" aria-haspopup="true" aria-expanded="false">
                            Bidang Minat dan Bakat
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMinBak">
                            <a class="dropdown-item" href="{{ route('profile.show.keilmuan') }}">Departemen Keilmuan</a>
                            <a class="dropdown-item" href="{{ route('profile.show.depor') }}">Departemen Olahraga</a>
                            <a class="dropdown-item" href="{{ route('profile.show.senbud') }}">Departemen Seni dan Budaya</a>
                        </div>
                    </a>
                    <a class="dropdown-item" href="{{ route('profile.show.psdm') }}">Biro Pengembangan Sumber Daya Manusia</a>
                    <a class="dropdown-item" href="{{ route('profile.show.keuangan') }}">Biro Keuangan</a>
                </div>
                </li>
                <li class="nav-item"><a id="nav-corner" class="nav-link" href="#pojok-mahasiswa">POJOK MAHASISWA</a></li>
                <li class="nav-item"><a id="nav-creation" class="nav-link" href="#RE">RUANG ESTETIKA</a></li>
                <li class="nav-item"><a id="nav-article" class="nav-link" href="#artikel">ARTIKEL</a></li>
                <!-- <li class="nav-item"><a id="nav-event" class="nav-link" href="#event">EVENT</a></li> -->
                <li class="nav-item"><a id="nav-contact" class="nav-link" href="#kontak-kami">KONTAK KAMI</a></li>
            </ul>
        </div>

    </div>
</nav>
