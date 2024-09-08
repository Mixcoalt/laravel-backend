<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
            DB::table('categorias')->insert([
            'nombre' => 'Ramen',
            'icono' => 'ramen',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

            DB::table('categorias')->insert([
            'nombre' => 'Yukisoba',
            'icono' => 'yukisoba',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

            DB::table('categorias')->insert([
            'nombre' => 'Postres',
            'icono' => 'postres',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

            DB::table('categorias')->insert([
            'nombre' => 'Charolas',
            'icono' => 'charolas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

            DB::table('categorias')->insert([
            'nombre' => 'Aperitivos',
            'icono' => 'aperitivos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Bebidas',
            'icono' => 'bebidas',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Cafe Frappe',
            'icono' => 'cafe',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Extras',
            'icono' => 'extras',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Calientes',
            'icono' => 'calientes',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Frio',
            'icono' => 'frio',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
