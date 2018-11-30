<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClinicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clinics')->insert([            
            'klinik_name' => 'Klinik Hewan Puri Kembangan',
            'picture_src' => "image/klinik/1.jpg",
            'description' => "Klinik Hewan Puri Kembangan adalah Klinik Hewan Clinic di Kembangan, Jakarta. Itu klinik dikunjungi oleh kedokteran dokter seperti Drh. I. D. Made Suwardana dan Drh. Ida Aryani. 
            Jadwal dari Klinik Hewan Puri Kembangan adalah: Sen-Sab: 10:00-19:00. Beberapa layanan yang ditangani oleh Clinic adalah: Pemindaian Hewan Peliharaan,Pemeriksaan Kesehatan,Acupuncture,Skin Service dan Cek Kesehatan etc.",
            'address' => "Jl. Puri Kembangan Raya No.77 H, Kedoya RT.11/05, Landmark: sebelah Sekolah Budi Murni, Jakarta"
        ]);

        DB::table('clinics')->insert([            
            'klinik_name' => 'Garden 8 Klinik Hewan',
            'picture_src' => "image/klinik/2.jpg",
            'description' => "Garden 8 Klinik Hewan merupakan sebuah Klinik Hewan yang berlokasi di Duren Sawit, Jakarta Timur, Jakarta, Indonesia. Saat ini, dokter-dokter yang melakukan praktek di Garden 8 Klinik Hewan diantaranya adalah drh. Reza Sofa H. Anda dapat mengetahui jadwal konsultasi dokter serta melakukan reservasi online di Garden 8 Klinik Hewan melalui kami ",
            'address' => "Jl. Raya Pondok kelapa Blok B1/4B - Duren Sawit, Jakarta Timur, Jakarta, Indonesia 13450"
        ]);

        DB::table('clinics')->insert([            
            'klinik_name' => 'Klinik Gusta Vet',
            'picture_src' => "image/klinik/3.jpg",
            'description' => "Gustav Vet adalah Klinik Hewan Clinic di Kebayoran Lama, Jakarta. Itu klinik dikunjungi oleh kedokteran dokter hewan seperti drh. Gustav A Mueller ,drh. Meirissa Dwi Herista dan drh. Nur Wulan Febriana . Jadwal dari Gustav Vet adalah: Sen-Jum: 09:00-20:00 dan Sab-Min: 09:00-14:00. Beberapa layanan yang ditangani oleh Clinic adalah: Pet Grooming,mendandani hewan peliharaan,Pemeriksaan Gigi dan Pembersihan Gigi,Pet Service dan Pet shop etc. Klik di peta untuk menemukan arah untuk mencapai Gustav Vet.",
            'address' => "Jl. Arteri Kelapa Dua No. 2A, Landmark: di samping Bank Woori Saudara, Jakarta"
        ]);

        DB::table('clinics')->insert([            
            'klinik_name' => 'Klinik Pet Vet',
            'picture_src' => "image/klinik/4.jpg",
            'description' => "Klinik Pet Vet merupakan salah satu klinik yang berada di Jakarta, tepatnya di Jakarta Pusat. Klinik ini menyediakan berbagai macam fasilitas, seperti : Cat hotel, dog hotel, swimming pool, special care dog VVIP, special care cat VVIP, Pet wellness exams, dan juga emergency care services. Selain itu, klinik ini juga menyediakan berbagai macam event, contohnya seperti : konsultasi gratis dan anniversary discount.",
            'address' => "Jl. K.H. Mas Mansyur No.8A, RT.10/RW.6, Karet Tengsin, Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10250"
        ]);

    }
}
