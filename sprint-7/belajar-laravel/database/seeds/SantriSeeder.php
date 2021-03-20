<?php

use App\santri;
use Illuminate\Database\Seeder;

class SantriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        santri::create([
            'nama' => 'Muhammad D. Ismail',
            'divisi' => 'Backend Programmer',
            'alamat' => 'Cianjur Empire'
        ]);
        santri::create([
            'nama' => 'Muhammad D. Ismail',
            'divisi' => 'Backend Programmer',
            'alamat' => 'Cianjur Empire'
        ]);
        santri::create([
            'nama' => 'Ahmad D. Ismail',
            'divisi' => 'Backend Programmer',
            'alamat' => 'Cianjur Empire'
        ]);
        santri::create([
            'nama' => 'Muchammad D. Ismail',
            'divisi' => 'Backend Programmer',
            'alamat' => 'Cianjur Empire'
        ]);
        santri::create([
            'nama' => 'Achmad D. Ismail',
            'divisi' => 'Backend Programmer',
            'alamat' => 'Cianjur Empire'
        ]);
    }
}
