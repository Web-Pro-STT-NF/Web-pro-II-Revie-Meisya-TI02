<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    // properti mahasiwa
    public $id;
    public $nama;
    public $nim;
    public $gender;
    public $tmp_lahir;
    public $tgl_lahir;
    public $ipk;

    public function predikat()
    {
        $predikat = ($this ->ipk >= 3.75) ? "Cumlaude" : "Baik";
        return $predikat;
    }
}