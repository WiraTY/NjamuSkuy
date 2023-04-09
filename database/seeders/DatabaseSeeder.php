<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminAdmin;
use App\Models\Artikel;
use App\Models\Jamu;
use App\Models\Komen;
use App\Models\Login;
use App\Models\Pengeluaran;
use App\Models\Staff;
use App\Models\Struk;
use App\Models\StrukDetail;
use App\Models\User;
use App\Models\UserAdmin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        AdminAdmin::create([
            'nama' => 'Muhamad Lutfi',
            'email' => '1235@gmail.com',
            'password' => '123123',
            'status' => 1
        ]);

        UserAdmin::create([
            'nama' => 'Wira Tri',
            'email' => '3215@gmail.com',
            'password' => '123123',
            'status' => 2
        ]);
        UserAdmin::create([
            'nama' => 'Wira Tri',
            'email' => '32155@gmail.com',
            'password' => '123123',
            'status' => 2
        ]);

        Jamu::create([
            'nama_jamu' => 'Sinom',
            'deskripsi' => 'Sinom Manis Enak',
            'harga' => 5000
        ]);
        Jamu::create([
            'nama_jamu' => 'Beras Kencur',
            'deskripsi' => 'Beras Kencur Pedas Enak',
            'harga' => 7500
        ]);
        Jamu::create([
            'nama_jamu' => 'Asem Jawa',
            'deskripsi' => 'Asem Manis Enak',
            'harga' => 8000
        ]);
        Jamu::create([
            'nama_jamu' => 'Kudu',
            'deskripsi' => 'Jamu sehat',
            'harga' => 11500
        ]);
        Jamu::create([
            'nama_jamu' => 'Kudu',
            'deskripsi' => 'Jamu sehat',
            'harga' => 11500
        ]);
        Jamu::create([
            'nama_jamu' => 'Kencur',
            'deskripsi' => 'Enak slur',
            'harga' => 6000
        ]);
    }
}
