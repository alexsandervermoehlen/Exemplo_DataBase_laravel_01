<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(PessoaTableSeeder::class);
    }
}


class PessoaTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::insert('insert into pessoa (nome, email) values (?,?)', array('alexsander', 'alexsander@gmail.com'));
        DB::insert('insert into pessoa (nome, email) values (?,?)', array('jose', 'jose@gmail.com'));
        DB::insert('insert into pessoa (nome, email) values (?,?)', array('ana', 'ana@gmail.com'));
        DB::insert('insert into pessoa (nome, email) values (?,?)', array('marcia', 'marcia@gmail.com'));
        DB::insert('insert into pessoa (nome, email) values (?,?)', array('sabrina', 'sabrina@gmail.com'));
        DB::insert('insert into pessoa (nome, email) values (?,?)', array('Andre', 'Andre@gmail.com'));

    }
}