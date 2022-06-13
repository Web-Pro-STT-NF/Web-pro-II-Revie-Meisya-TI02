<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function index()
    {
        // object model mahasiswa
       $this->mhs1 = new MahasiswaModel();
       $this->mhs2 = new MahasiswaModel();
       $this->mhs3 = new MahasiswaModel();
        // memberikan nilai kepada object
       $this->mhs1->id = 1;
       $this->mhs1->nama = "Revie Meisya";
       $this->mhs1->nim = "0110221067";
       $this->mhs1->gender = "P";
       $this->mhs1->tmp_lahir = "Bogor";
       $this->mhs1->tgl_lahir = "31 mei 2002";
       $this->mhs1->ipk = "4.00";

       $this->mhs2->id = 2;
       $this->mhs2->nama = "Fathyah Fadillah";
       $this->mhs2->nim = "0110221060";
       $this->mhs2->gender = "P";
       $this->mhs2->tmp_lahir = "Bogor";
       $this->mhs2->tgl_lahir = "16 september 2002";
       $this->mhs2->ipk = "4.00";

       $this->mhs3->id = 3;
       $this->mhs3->nama = "Diffa Nur Hidayah";
       $this->mhs3->nim = "0110221056";
       $this->mhs3->gender = "P";
       $this->mhs3->tmp_lahir = "Jakarta";
       $this->mhs3->tgl_lahir = "26 mei 2003";
       $this->mhs3->ipk = "4.00";

       $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];
       $data['list_mhs'] = $list_mhs;

       return view('mahasiswa/index' , $data);

    }
}