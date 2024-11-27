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

        // User::create([
        //     'username' => 'test',
        //     'password' =>bcrypt('1234')
        // ]);
        
        Kelolakontak::create([
            'no_whatsapp'=>'081234567890',
            'username_instagram'=>'desaharapanpemangkat',
            'username_facebook'=>'desaharapanpemangkat',
            'email'=>'desaharapan@gmail.com'
        ]);

        // Profildesa::create([
        //     'nama_desa' => 'Harapan Pemangkat',
        //     'sejarah_desa' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam dolorem',
        //     'gambar_desa_1' => 'dolor1.png',
        //     'gambar_desa_2' => 'dolor2.png',
        //     'gambar_desa_3' => 'dolor3.png',
        //     'gambar_desa_4' => 'dolor4.png',
        //     'gambar_desa_5' => 'dolor5.png',
        //     'visi_desa' => 'Mewujudkan masyarakat desa yang ',
        //     'misi_desa' => 'Meningkatkan kualitas sumber ',
        //     'total_jiwa' => '1400',
        //     'total_kk' => '140',
        //     'total_dusun' => '14',
        //     'total_rt' => '10',
        //     'total_rw' => '8',
        //     'suku_melayu' => '600',
        //     'suku_madura' => '200',
        //     'suku_tionghoa' => '150',
        //     'suku_dayak' => '100',
        //     'suku_jawa' => '50',
        //     'suku_bugis' => '150',
        //     'suku_lainnya' => '200',
        //     'agama_islam' => '800',
        //     'agama_katolik' => '200',
        //     'agama_protestan' => '100',
        //     'agama_buddha' => '100',
        //     'agama_hindu' => '50',
        //     'agama_konghucu' => '100',
        //     'peta_desa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.381582325904!2d108.9807299!3d1.1760021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e482da5226b941%3A0xbb1b81f1600f81c3!2sKantor%20Desa%20%26%20Balai%20Desa%20Harapan!5e0!3m2!1sen!2sid!4v1698827469279!5m2!1sen!2sid" width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade',
        //     'kantor_desa' => 'Kantor Desa & Balai Desa Harapan, Pemangkat Kota, Pemangkat, Sambas Regency, West Kalimantan 79453',
        // ]);
    }
}
