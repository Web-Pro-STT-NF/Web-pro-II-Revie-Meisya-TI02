<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nim'               => '1102101',
                'nama'              => 'Fiki',
                'jenis_kelamin'     => 'Laki-Laki',
                'tgl_lahir'         => '2001-06-01',
                'tempat_lahir'      => 'Cirebon',
                'program_study'     => 'Teknik Informatika',
                'ipk'               => '3.5',
                'created_at'        => Time::now()
            ],
            [
                'nim'               => '1102102',
                'nama'              => 'Dika',
                'jenis_kelamin'     => 'Laki-Laki',
                'tgl_lahir'         => '2001-03-01',
                'tempat_lahir'      => 'Depok',
                'program_study'     => 'Teknik Informatika',
                'ipk'               => '3.4',
                'created_at'        => Time::now()
            ],
        ];
        $this->db->table('mahasiswa')->insertBatch($data);
    }
}