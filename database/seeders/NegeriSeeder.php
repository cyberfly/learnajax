<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Negeri;
use App\Models\Daerah;

class NegeriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $negeris = [
            'Johor' => ['Batu Pahat', 'Johor Bahru', 'Kluang', 'Kota Tinggi', 'Mersing', 'Muar', 'Pontian', 'Segamat', 'Kulai'],
            'Kedah' => ['Baling', 'Bandar Baharu', 'Kota Setar', 'Kuala Muda', 'Kubang Pasu', 'Kulim', 'Langkawi', 'Pendang', 'Pokok Sena'],
            'Kelantan' => ['Bachok', 'Gua Musang', 'Jeli', 'Kota Bharu', 'Kuala Krai', 'Machang', 'Pasir Mas', 'Pasir Puteh', 'Tanah Merah'],
            'Melaka' => ['Alor Gajah', 'Jasin', 'Melaka Tengah'],
            'Negeri Sembilan' => ['Jelebu', 'Jempol', 'Kuala Pilah', 'Port Dickson', 'Rembau', 'Seremban', 'Tampin'],
            'Pahang' => ['Bentong', 'Bera', 'Cameron Highlands', 'Jerantut', 'Kuantan', 'Lipis', 'Maran', 'Pekan', 'Raub', 'Rompin'],
            'Penang' => ['Barat Daya', 'Timur Laut', 'Seberang Perai Utara', 'Seberang Perai Tengah', 'Seberang Perai Selatan'],
            'Perak' => ['Bagan Datuk', 'Batang Padang', 'Hilir Perak', 'Hulu Perak', 'Kampar', 'Kinta', 'Kuala Kangsar', 'Larut', 'Manjung'],
            'Perlis' => ['Arau', 'Kangar', 'Padang Besar'],
            'Sabah' => ['Beaufort', 'Beluran', 'Keningau', 'Kinabatangan', 'Kota Belud', 'Kota Kinabalu', 'Kota Marudu'],
            'Sarawak' => ['Betong', 'Bintulu', 'Kapit', 'Kuching', 'Limbang', 'Miri', 'Mukah', 'Samarahan', 'Sibu'],
            'Selangor' => ['Gombak', 'Hulu Langat', 'Hulu Selangor', 'Klang', 'Kuala Langat', 'Kuala Selangor', 'Petaling'],
            'Terengganu' => ['Besut', 'Dungun', 'Hulu Terengganu', 'Kemaman', 'Kuala Terengganu', 'Marang', 'Setiu'],
        ];

        foreach ($negeris as $negeri => $daerahs) {
            $negeriModel = Negeri::create(['nama' => $negeri]);

            foreach ($daerahs as $daerah) {
                Daerah::create([
                    'nama' => $daerah,
                    'negeri_id' => $negeriModel->id,
                ]);
            }
        }
    }
}
