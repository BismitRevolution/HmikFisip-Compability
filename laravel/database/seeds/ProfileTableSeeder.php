<?php

use Illuminate\Database\Seeder;
// use Carbon\Carbon;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'divisi' => 'Pengurus Inti',
            'url_foto' => '/division/01.JPG',
            'struktur' => 'Ketua: Maulvi M. Adib
            Wakil Ketua: Christopher A. Boeky
            Sekretaris: Safira Rivani
            Bendahara: Dewi Rizka Aulia
            Wakil Sekretaris: Sella Enoviana
            Wakil Bendahara: Lisa Permatasari
            Kepala Bidang Humas: Maylsha Tiara
            Koordinator Bidang Minat dan Bakat: Rahmi Tri Wahyutika
            Koordinator Bidang Advokasi dan Sosial: Riski Anita
            Kepala Biro PSDM: Viesa Zalsiah',
        ]);

        DB::table('profiles')->insert([
            'divisi' => 'Departemen Advokasi Kesejahteraan Mahasiswa',
            'url_foto' => '/division/02.JPG',
            'visi' => 'Menjadikan Adkesma yang bersahabat secara dekat dan proaktif',
            'misi' => '1. Menjadi sumber informasi akademis untuk mahasiswa Komunikasi secara aktif dan aktual.
            2. Menjalin hubungan yang baik antara Adkesma dengan internal maupun eksternal HMIK UI.
            3. Menciptakan komunikasi yang bersahabat dalam setiap program kerja yang dijalankan.
            4. Menjadi wadah untuk memenuhi kebutuhan mahasiswa Komunikasi terkait akademik maupun non-akademik
            5. Membantu dengan lebih tanggap menyelesaikan masalah perkuliahan mahasiswa Komunikasi',
            'program' => '1. Adkesma Updates
            2. Adkesma 911
            3. Welcoming Mahasiswa Baru
            4. OMAS',
        ]);

        DB::table('profiles')->insert([
            'divisi' => 'Departemen Sosial Masyarakat',
            'url_foto' => '/division/03.JPG',
            'visi' => 'Menjadikan Departemen Sosial Masyarakat HMIK UI 2018 sebagai wadah yang menggerakkan kedekatan, kepedulian sosial, dan kebermanfaatan bagi warga komunikasi UI dan lingkungan sekitar',
            'misi' => '1. Menerapkan nilai peduli terlebih dahulu kepada diri sendiri dan internal Sosmas HMIK UI 2018.
            2. Melakukan pendekatan kepada stakeholder Sosmas HMIK UI 2018 (seperti : mahasiswa Ilmu Komunikasi UI, pegawai Gekom, lembaga lain, dll.)
            3. Mengajak mahasiswa Ilmu Komunikasi UI untuk turut berpartisipasi dalam kegiatan Sosmas HMIK UI 2018.
            4. Menjadi inisiator dari HMIK UI yang tanggap dalam merespon isu sosial masyarakat dan kebencanaan.
            5. Merancang program kerja yang sesuai dengan visi yang ingin dicapai, yaitu Commcare, Dari Kami, dan Kami Berbagi yang membawa nilai dekat, peduli, dan bermanfaat.',
            'program' => '1. Commcare
            2. Communication Share
            3. Dari Kami',
        ]);

        DB::table('profiles')->insert([
            'divisi' => 'Bidang Hubungan Masyarakat',
            'url_foto' => '/division/04.JPG',
            'visi' => 'Mewujudkan Humas yang progresif serta suportif terhadap publik HMIK UI 2018',
            'misi' => '1. Menjalin hubungan yang baik dengan stakeholders serta membangun citra positif HMIK UI 2018.
            2. Menyebarkan informasi serta menyaring aspirasi publik HMIK UI 2018 melalui optimalisasi penggunaan kanal media digital HMIK UI dan pertemuan tatap muka yang teratur.
            3. Meningkatkan kedekatan dengan pengurus maupun publik HMIK UI 2018 melalui kegiatan dan program kerja Bidang Humas.',
            'program' => '1. Video Profile
            2. Welcoming Mahasiswa Baru
            3. Cerita Komunikasi
            4. Kom 101
            5. Senja Selebrasi
            6. Pengelolaan Kanal Media Digital HMIK UI',
        ]);

        DB::table('profiles')->insert([
            'divisi' => 'Departemen Keilmuan',
            'url_foto' => '/division/05.JPG',
            'visi' => 'Mewujudkan Departemen Keilmuan HMIK UI yang harmonis, terbuka, dan berkesinambungan',
            'misi' => '1. Menyelenggarakan kajian berkala tentang isu komunikasi dan isu media dan kaitannya dengan teori komunikasi
            2. Memfasilitasi mahasiswa untuk mendapatkan bahan-bahan perkuliahan
            3. Mewadahi mahasiswa dalam perlombaan-perlombaan di bidang keilmuan dan memberikan informasi terkait lomba tersebut
            4. Memfasilitasi dan mengadvokasi kebutuhan akademik mahasiswa Ilmu Komunikasi
            5. Membuat output berupa publikasi yang menarik tentang informasi peminatan yang ada di Departemen Ilmu Komunikasi
            6. Mengapresiasi setiap warga komunikasi yang berprestasi di bidang ilmiah dalam berbagai jenjang.',
            'program' => '1. Kom Goes to LIMAS
            2. Kompas
            3. Portal Keilmuan
            4. Pekan Komunikasi',
        ]);

        DB::table('profiles')->insert([
            'divisi' => 'Departemen Olahraga',
            'url_foto' => '/division/06.JPG',
            'visi' => 'Mewujudkan produktivitas kegiatan olahraga Ilmu Komunikasi secara adaptif',
            'misi' => '1. Mengadakan latihan komunitas secara produktif sesuai indikator keberhasilan.
            2. Menjalankan setiap program kerja dengan beradaptasi sesuai kebutuhan mahasiswa Ilmu Komunikasi.',
            'program' => '1. Main Bareng Komunitas
            2. Kom Goes to Olimfis
            3. Commbatt',
        ]);

        DB::table('profiles')->insert([
            'divisi' => 'Departemen Seni Budaya',
            'url_foto' => '/division/07.JPG',
            'visi' => 'Menjadi Departemen Seni Budaya HMIK UI yang mewadahi minat dan bakat mahasiswa Ilmu Komunikasi UI secara apresiatif, terbuka, dan berkelanjutan',
            'misi' => '1. Membuat program kerja yang menjadi wadah serta menjawab kebutuhan pengembangan minat dan bakat Mahasiswa Ilmu Komunikasi UI di bidang seni secara terbuka.
            2. Memberikan apresiasi minat dan bakat Mahasiswa Ilmu Komunikasi UI di bidang seni.
            3. Menciptakan program kerja yang bersifat sinergis dengan pihak internal maupun pihak eksternal HMIK UI.
            4. Berkontribusi melalui edukasi dalam pengembangan potensi minat dan bakat Mahasiswa Ilmu Komunikasi UI di bidang seni. ',
            'program' => '1. Artception
            2. Kom Goes to Gelmab',
        ]);

        DB::table('profiles')->insert([
            'divisi' => 'Biro Pengembangan Sumber Daya Manusia',
            'url_foto' => '/division/08.JPG',
            'visi' => 'Menjadi Biro PSDM yang membangun sinergi internal HMIK UI 2018 dan meningkatkan kualitas sumber dayanya secara menyeluruh',
            'misi' => '1. Mengoptimalkan fungsi dan kinerja “Sahabat PSDM” sebagai sarana pembangun internal HMIK UI 2018 dengan adanya standar dan acuan yang jelas
            2. Membentuk wadah bagi pengurus HMIK UI 2018 untuk meningkatkan kualitasnya secara menyeluruh
            3. Melakukan dan menerbitkan hasil evaluasi kepada seluruh pengurus HMIK UI 2018 secara rutin
            4. Mendorong sesama pengurus HMIK UI 2018 untuk hadir dan berpartisipasi di program kerja HMIK UI lainnya',
            'program' => '1. Rapat Kerja dan Team Building
            2. Sharing Session
            3. Evaluasi Kinerja
            4. Rapat Pleno HMIK UI
            5. Sahabat PSDM
            6. Buka Puasa Bersama HMIK UI 2018
            7. Jalan-jalan Akhir Kepengurusan',
        ]);

        DB::table('profiles')->insert([
            'divisi' => 'Biro Keuangan',
            'url_foto' => '/division/09.JPG',
            'visi' => 'Menjadi Biro Keuangan yang mementingkan profesionalitas, mengedepankan inovasi, dan menjunjung kedekatan antaranggota',
            'misi' => '1. Menanamkan nilai-nilai yang dibawa oleh Biro Keuangan HMIK UI 2018 dengan mengadakan rapat biro secara rutin dan memberikan evaluasi secara personal maupun keseluruhan.
            2. Menanamkan nilai-nilai HMIK UI 2018 kepada staff agar tercapainya pemahaman yang sesuai antara HMIK UI dengan Biro Keuangan, dengan cara mengikuti kegiatan dari biro/departemen/divisi lain sebagai wujud partisipasi terhadap HMIK UI.
            3. Menjadi support system perihal keuangan untuk bendahara umum HMIK UI 2018.',
            'program' => '1. Merchandise Komunikasi
            2. Merchandise HMIK UI 2018',
        ]);

    }

}
