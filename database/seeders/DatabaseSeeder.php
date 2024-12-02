<?php

namespace Database\Seeders;

use App\Models\Kelolakontak;
use App\Models\Profildesa;
use App\Models\User;
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
            'kantor_desa' => '5XGM+98V, Pemangkat Kota, Kec. Pemangkat, Kabupaten Sambas, Kalimantan Barat 79453',
        ]);
    }
}
