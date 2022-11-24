<?php

namespace Database\Seeders;

use Illuminate\Database\seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{   
    /**
     *
     * 
     * @return void
     */
    public function run()
    {
        $data_siswa = [
  [
    "nama" => 'alif wafiudin',
    "kelas" => 'XI PPLG',
    "umur" => random_int(15,30),
  ],
  [
    'nama'=> 'Anggara prima',
    'kelas'=> 'XI PPLG',
    'umur' => random_int(15,30),
  ],
  [
    'nama'=> 'nenni',
    'kelas'=> 'XI PPLG',
    'umur'=> random_int(15,30),
  ],
];
   DB::table('siswa')->truncate();

  //proses simpan data
  foreach($data_siswa as $data){
    DB::table('siswa')->insert([
        'nama'=> $data['nama'],
        'kelas' =>$data['kelas'],
        'umur'=>$data['umur'],
    ]);
  }
//proses ambil data dari table siswa
$siswa = DB::table('siswa')->get();
        dd($siswa); 
    }
}
