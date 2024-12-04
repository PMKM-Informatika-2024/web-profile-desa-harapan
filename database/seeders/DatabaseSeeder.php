<?php

namespace Database\Seeders;

use App\Models\Kelolakegiatan;
use App\Models\Kelolakontak;
use App\Models\Layananadministrasi;
use App\Models\Layananpublik;
use App\Models\Lembagadesa;
use App\Models\Pengumuman;
use App\Models\Perangkatdesa;
use App\Models\Profildesa;
use App\Models\User;
use App\Models\Videoprofile;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'username' => 'admin_harapan',
            'password' =>bcrypt('Harapan2024!')
        ]);
        
        Kelolakontak::create([
            'no_whatsapp'=>'085821444343',
            'username_instagram'=>'desaharapan.pemangkat',
            'username_facebook'=>'desaharapan.pemangkat',
            'email'=>'ds.harapanpmk@gmail.com'
        ]);

        Profildesa::create([
            'nama_desa' => 'Harapan Pemangkat',
            'sejarah_desa' => ' 
Harapan adalah sebuah desa yang berada di Kecamatan Pemangkat, Kabupaten Sambas, Kalimantan Barat, Indonesia. Berjarak sekitar 183 KM dari Kota Pontianak dengan titik koordinatnya 1°11′22.88″ LU 108°59′36.67″ BT. Desa Harapan memiliki luas geografis 4806,114 KM2 dengan jumlah 6443 jiwa dengan berbagai etnis diantaranya Suku Melayu, Melayu Sambas, Jawa, Dayak, Bugis, Tionghoa dan Lainnya, juga berbagai Keyakinan diantaranya Agama Islam, Katolik, Protestan, Hindu, Buddha dan Kong Hu Chu. Terdapat 4 (empat) Dusun yaitu Dusun Abdul Kadir Kasim, Dusun Mekar Lestari, Dusun Teluk Nusa dan Dusun Nusa Indah.

Dahulunya Desa Harapan adalah bagian dari Desa Penjajab, lalu berpisah pada tahun 1969. Kemudian pada tahun 2015 sampai sekarang terpecah lagi menjadi 3 desa yaitu Desa Harapan, Desa Gugah Sejahtera dan Desa Lonam. Masyarakat di Desa Harapan sebagian besar memiliki mata pencaharian sebagai petani dan pekebun. Sekarang sudah memiliki sebuah BUMDesa yang merupakan salah satu upaya dari Pemerintah Desa Harapan agar dapat menjadi Desa yang lebih maju. 
',
            'gambar_desa_1' => 'gambar_desa1.png',
            'gambar_desa_2' => 'gambar_desa2.png',
            'gambar_desa_3' => 'gambar_desa3.png',
            'gambar_desa_4' => 'gambar_desa4.png',
            'gambar_desa_5' => 'gambar_desa5.png',
            'gambar_desa_6' => 'gambar_desa6.png',
            'visi_desa' => ' Mewujudkan masyarakat desa yang mandiri, sejahtera, dan berdaya saing dengan memanfaatkan potensi sumber daya alam dan manusia secara berkelanjutan. ',
            'misi_desa' => ' 
Meningkatkan kualitas sumber daya manusia melalui pendidikan dan pelatihan.
Meningkatkan kesejahteraan masyarakat dengan menciptakan lapangan pekerjaan.
Mengembangkan potensi ekonomi lokal melalui pertanian, pariwisata, dan UMKM.
Meningkatkan infrastruktur dan fasilitas umum untuk kesejahteraan masyarakat.
Mewujudkan pemerintahan desa yang transparan dan akuntabel.
 ',
            'total_jiwa' => '6443',
            'total_kk' => '1758',
            'total_dusun' => '4',
            'total_rt' => '31',
            'suku_melayu' => '421',
            'suku_melayusambas' => '5662',
            'suku_tionghoa' => '150',
            'suku_dayak' => '11',
            'suku_jawa' => '11',
            'suku_bugis' => '1',
            'suku_lainnya' => '177',
            'agama_islam' => '5380',
            'agama_katolik' => '123',
            'agama_protestan' => '68',
            'agama_buddha' => '786',
            'agama_hindu' => '1',
            'agama_konghucu' => '85',
            'peta_desa' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3100.80706619366!2d108.98072987361599!3d1.1760020621128064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e482da5226b941%3A0xbb1b81f1600f81c3!2sKantor%20Desa%20%26%20Balai%20Desa%20Harapan!5e1!3m2!1sid!2sid!4v1733111887397!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            'kantor_desa' => ' 
Jalan Desa No. 123, Harapan, Kecamatan Pemangkat, Kabupaten Sambas, Kalimantan Barat, Indonesia.

Telepon: (021) 1234567

Email: kantor@harapan.go.id

Jam Operasional: Senin - Jumat, 08.00 - 16.00 
',
        ]);

        Videoprofile::create([
            'url_video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/QDBWsQHC-6U?si=MvuME8Z-7q-yeLaH" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>',
        ]);

        Perangkatdesa::create([
            'nama' => 'Faridh Fardiansyah, ST',
            'jabatan' => 'Kepala Desa',
            'gambar_perangkatdesa' => 'photo.png',
        ]);

        Lembagadesa::create([
            'nama_lembaga' => 'Lembaga Pemberdayaan Masyarakat (LPM)',
            'nama_ketua' => 'Riyadi Kesumadani', 
        'gambar_lembaga' => 'lembaga.png',
        ]);
        Lembagadesa::create([
            'nama_lembaga' => 'Karang Taruna Desa',
            'nama_ketua' => 'Rici Saputra', 
        'gambar_lembaga' => 'lembaga.png',
        ]);
        Lembagadesa::create([
            'nama_lembaga' => 'Pemberdayaan dan Kesejahteraan Keluarga (PKK)',
            'nama_ketua' => 'Lia Wulandari', 
        'gambar_lembaga' => 'lembaga.png',
        ]);
        Lembagadesa::create([
            'nama_lembaga' => 'BKMT',
            'nama_ketua' => 'Hafni', 
        'gambar_lembaga' => 'lembaga.png',
        ]);

        Layananpublik::create([ 
            'kategori_fasilitas' => 'pendidikan',
            'nama_fasilitas' => 'Sekolah Dasar Negeri 4',
            'gambar_fasilitas' => 'sekolah.png',
            'alamat' => 'Jl. Anom, Harapan, Kec. Pemangkat, Kabupaten Sambas, Kalimantan Barat 79455',
            'url_alamat' => 'https://maps.app.goo.gl/9VJ51tuZJRVke6fU7',
        ]);
        Layananpublik::create([ 
            'kategori_fasilitas' => 'publik',
            'nama_fasilitas' => 'Lapangan Volley Topan',
            'gambar_fasilitas' => 'lapanganvolley.png',
            'alamat' => 'Jalan SDN 04 Gg.Abdul Hakim Dusun Mekar Lestari, Harapan, Pemangkat, Sambas Regency, West Kalimantan 79453',
            'url_alamat' => 'https://maps.app.goo.gl/dyEwQ2a3g49i6nBt6',
        ]);

        Layananadministrasi::create([
            'nama_layanan' => 'Surat Keterangan Domisili',
            'deskripsi' => 'Dapatkan surat keterangan domisili secara online dengan mudah.',
            'persyaratan' => 'Fotokopi KTP Fotokopi Kartu Keluarga Surat Pengantar RW Formulir Pengajuan Surat Keterangan Domisili',
        ]);
        Layananadministrasi::create([
            'nama_layanan' => 'Surat Keterangan Usaha',
            'deskripsi' => 'Ajukan surat keterangan usaha dengan mudah dan cepat.',
            'persyaratan' => 'Fotokopi KTP
Fotokopi Kartu Keluarga
Surat Pengantar RT/RW
Formulir pengajuan surat keterangan domisili',
        ]);
        Layananadministrasi::create([
            'nama_layanan' => 'Surat Keterangan Tidak Mampu',
            'deskripsi' => 'Ajukan SKTM untuk keperluan administrasi.',
            'persyaratan' => 'Fotokopi KTP
Fotokopi Kartu Keluarga
Surat Pengantar RT/RW
Formulir pengajuan SKTM',
        ]);

        Pengumuman::create([
            'judul' => 'Pendaftaran Layanan Desa',
            'deskripsi_singkat' => 'Pengumuman Pendaftaran Layanan Desa',
            'gambar_pengumuman' => 'pengumuman.png',
            'konten' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime illum voluptas in eligendi laudantium porro dolor nesciunt quo autem molestiae ipsum quos soluta, reprehenderit enim hic itaque deserunt praesentium voluptates vitae nobis! Omnis, porro sint? Sit vitae, debitis molestiae quaerat optio nemo, asperiores sequi repellat totam commodi atque accusantium molestias laboriosam? Labore, accusantium soluta, ducimus quis eos id nostrum numquam cupiditate iusto est quia sint quod! Natus repellendus recusandae, eligendi debitis architecto nulla esse necessitatibus nisi dolorum odit et labore quo libero fugiat quidem illo eum provident id velit cum minus beatae aut praesentium? Quod nulla expedita eveniet dolorum vitae! Tenetur aut a dolor quisquam. Perspiciatis itaque deleniti illum, distinctio iusto, voluptates sapiente asperiores accusamus non facilis quam iste quas molestiae consectetur tempore natus quo nisi sequi velit dolor. Eum maxime consequatur sit a recusandae earum! Amet similique quo laborum eius neque, culpa omnis voluptatem, reprehenderit consequatur et eveniet praesentium cum excepturi molestiae maiores quae expedita illum incidunt doloribus dolores unde ea? Voluptatum asperiores vero autem? Omnis eaque ex modi dolores magnam, adipisci impedit tenetur minus repudiandae, totam alias voluptatibus quibusdam, temporibus nihil rerum deleniti perferendis officia optio nam quia nesciunt corrupti? Tempore atque obcaecati, doloremque alias pariatur consectetur. Recusandae.',
        ]);
        
        Kelolakegiatan::create([
            'nama_kegiatan' => 'Pelatihan LKD',
            'gambar_kegiatan' => 'LKD.png',
        ]);
    }
}
