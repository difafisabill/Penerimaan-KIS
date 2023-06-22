<?php

namespace Database\Seeders;

use App\Models\DataTraining;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataTrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data Training
       $trainingData = [
        [
            'nik' => '111111',
            'usia' => 'diatas 30 tahun',
            'pendidikan_terakhir' => 'S1',
            'pekerjaan' => 'Pegawai Swasta',
            'pendapatan' => 'cukup',
            'tanggungan_anak' => 'lebih dari 2',
            'terima_kis' => 'ya',
        ],
        [
            'nik' => '222222',
            'usia' => 'dibawah 30 tahun',
            'pendidikan_terakhir' => 'D3',
            'pekerjaan' => 'Wiraswasta',
            'pendapatan' => 'kurang',
            'tanggungan_anak' => 'kurang dari sama dengan 2',
            'terima_kis' => 'tidak',
        ],
        [
            'nik' => '333333',
            'usia' => 'diatas 30 tahun',
            'pendidikan_terakhir' => 'S2',
            'pekerjaan' => 'PNS',
            'pendapatan' => 'lebih',
            'tanggungan_anak' => 'tidak ada',
            'terima_kis' => 'ya',
        ],
        [
            'nik' => '444444',
            'usia' => 'dibawah 30 tahun',
            'pendidikan_terakhir' => 'D1',
            'pekerjaan' => 'Pegawai Negeri',
            'pendapatan' => 'kurang',
            'tanggungan_anak' => 'kurang dari sama dengan 2',
            'terima_kis' => 'tidak',
        ],
        [
            'nik' => '555555',
            'usia' => 'diatas 30 tahun',
            'pendidikan_terakhir' => 'S1',
            'pekerjaan' => 'Wiraswasta',
            'pendapatan' => 'lebih',
            'tanggungan_anak' => 'lebih dari 2',
            'terima_kis' => 'ya',
        ],
        [
            'nik' => '666666',
            'usia' => 'diatas 30 tahun',
            'pendidikan_terakhir' => 'D3',
            'pekerjaan' => 'Pegawai Swasta',
            'pendapatan' => 'cukup',
            'tanggungan_anak' => 'kurang dari sama dengan 2',
            'terima_kis' => 'tidak',
        ],
    ];

        foreach ($trainingData as $item) {
            DataTraining::create($item);
        }
    }
}
