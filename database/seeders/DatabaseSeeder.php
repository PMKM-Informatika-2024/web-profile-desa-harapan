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
            'username' => 'test',
            'password' =>bcrypt('1234')
        ]);
        
        Kelolakontak::create([
            'no_whatsapp'=>'085821444343',
            'username_instagram'=>'desaharapan.pemangkat',
            'username_facebook'=>'desaharapan.pemangkat',
            'email'=>'ds.harapanpmk@gmail.com'
        ]);

        Profildesa::create([
            'nama_desa' => 'Harapan Pemangkat',
            'sejarah_desa' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam dolorem',
            'gambar_desa_1' => 'gambar_desa1.png',
            'gambar_desa_2' => 'gambar_desa2.png',
            'gambar_desa_3' => 'gambar_desa3.png',
            'gambar_desa_4' => 'gambar_desa4.png',
            'gambar_desa_5' => 'gambar_desa5.png',
            'gambar_desa_6' => 'gambar_desa6.png',
            'visi_desa' => 'Visi Desa',
            'misi_desa' => 'Misi Desa',
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
            'kantor_desa' => 'Pemangkat Kota, Kec. Pemangkat, Kabupaten Sambas, Kalimantan Barat 79453',
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
            'nama_lembaga' => 'Karang Taruna',
            'nama_ketua' => 'Rici Saputra', 
            'gambar_lembaga' => 'lembaga.png',
        ]);

        Layananpublik::create([ 
            'kategori_fasilitas' => 'pendidikan',
            'nama_fasilitas' => 'Sekolah Dasar Negeri 4',
            'gambar_fasilitas' => 'sekolah.png',
            'alamat' => 'Jl. Anom, Harapan, Kec. Pemangkat, Kabupaten Sambas, Kalimantan Barat 79455',
            'url_alamat' => 'https://g.co/kgs/yKrGjqn',
        ]);

        Layananadministrasi::create([
            'nama_layanan' => 'Surat Keterangan Domisili',
            'deskripsi' => 'Dapatkan surat keterangan domisili secara online dengan mudah.',
            'persyaratan' => 'Fotokopi KTP Fotokopi Kartu Keluarga Surat Pengantar RW Formulir Pengajuan Surat Keterangan Domisili',
        ]);

        Pengumuman::create([
            'judul' => 'Headline',
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
