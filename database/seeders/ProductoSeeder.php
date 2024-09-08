<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('productos')->insert([
            'nombre' => "Tradicional",
            'precio' => 75,
            'imagen' => 'ramen_01',
            'categoria_id' => 1,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Chiken",
            'precio' => 85,
            'imagen' => 'ramen_02',
            'categoria_id' => 1,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Vegano",
            'precio' => 85,
            'imagen' => 'ramen_03',
            'categoria_id' => 1,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Ribu",
            'precio' => 95,
            'imagen' => 'ramen_04',
            'categoria_id' => 1,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

           DB::table('productos')->insert([
            'nombre' => "Niku",
            'precio' => 100,
            'imagen' => 'ramen_05',
            'categoria_id' => 1,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

           DB::table('productos')->insert([
            'nombre' => "Sopporo",
            'precio' => 100,
            'imagen' => 'ramen_06',
            'categoria_id' => 1,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

           DB::table('productos')->insert([
            'nombre' => "Chikin",
                'precio' => 110,
                'imagen' => 'ramen_07',
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Shio",
            'precio' => 100,
            'imagen' => 'ramen_08',
            'categoria_id' => 1,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Ika",
            'precio' => 125,
            'imagen' => "ramen_09",
            'categoria_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Rayito",
            'precio' => 125,
            'imagen' => 'ramen_10',
            'categoria_id' => 1,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Daco",
            'precio' => 155,
            'imagen' => 'ramen_11',
            'categoria_id' => 1,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Nikkis",
                'precio' => 140,
                'imagen' => 'ramen_12',
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Kuro",
            'precio' => 150,
            'imagen' => 'ramen_13',
            'categoria_id' => 1,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Haku",
            'precio' => 170,
            'imagen' => 'ramen_14',
            'categoria_id' => 1,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Yakisoba",
                'precio' => 90,
                'imagen' => 'yakisoba_01',
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Shoya",
            'precio' => 100,
            'imagen' => 'yakisoba_02',
            'categoria_id' => 2,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Rayito soba",
            'precio' => 125,
            'imagen' => 'yakisoba_03',
            'categoria_id' => 2,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Chizzu soba",
            'precio' => 125,
            'imagen' => 'yakisoba_04',
            'categoria_id' => 2,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Bacon soba",
            'precio' => 105,
            'imagen' => 'yakisoba_05',
            'categoria_id' => 2,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Vegano",
                'precio' => 85,
                'imagen' => 'yakisoba_06',
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Pinky soba",
                'precio' => 105,
                'imagen' => 'yakisoba_07',
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Tamago",
            'precio' => 100,
            'imagen' => 'yakisoba_08',
            'categoria_id' => 2,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Carbonara",
                'precio' => 100,
                'imagen' => 'yakisoba_09',
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Chessake frio de tortuga",
                'precio' => 60,
                'imagen' => 'postres_01',
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Chessake frio de zarzamora",
            'precio' => 60,
            'imagen' => 'postres_02',
            'categoria_id' => 3,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Flan napolitano de queso crema",
                'precio' => 55,
                'imagen' => 'postres_03',
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Tiramisu",
                'precio' => 60,
                'imagen' => 'postres_04',
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Charola familiar",
                'precio' => 250,
                'imagen' => 'charola_01',
                'categoria_id' => 4,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Kumo charola",
            'precio' => 280,
            'imagen' => 'charola_02',
            'categoria_id' => 4,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Tokoshuma",
            'precio' => 250,
            'imagen' => 'charola_03',
            'categoria_id' => 4,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Supreme",
            'precio' => 420,
            'imagen' => 'charola_04',
            'categoria_id' => 4,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Inari",
            'precio' => 250,
            'imagen' => 'charola_05',
            'categoria_id' => 4,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Balls",
            'precio' => 20,
            'imagen' => 'aperitivo_01',
            'categoria_id' => 5,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Orden de balls",
            'precio' => 75,
            'imagen' => 'aperitivo_02',
            'categoria_id' => 5,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Orden de takoyakis",
            'precio' => 80,
            'imagen' => 'aperitivo_03',
            'categoria_id' => 5,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Oniguiri",
                'precio' => 30,
                'imagen' => 'aperitivo_04',
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Oniguiri empanizado",
            'precio' => 40,
            'imagen' => 'aperitivo_05',
            'categoria_id' => 5,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Orden de temari sushi",
            'precio' => 90,
            'imagen' => 'aperitivo_06',
            'categoria_id' => 5,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Oniaratzu",
            'precio' => 65,
            'imagen' => 'aperitivo_07',
            'categoria_id' => 5,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Okonomiyaki",
                'precio' => 65,
                'imagen' => 'aperitivo_08',
                'categoria_id' => 5,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Yakimeshi",
            'precio' => 60,
            'imagen' => 'aperitivo_09',
            'categoria_id' => 5,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Kushiagues",
            'precio' => 20,
            'imagen' => 'aperitivo_10',
            'categoria_id' => 5,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Aua de Horchata (vaso)",
            'precio' => 25,
            'imagen' => 'bebida_01',
            'categoria_id' => 6,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Aua de Jamaica (vaso)",
            'precio' => 25,
            'imagen' => 'bebida_02',
            'categoria_id' => 6,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Aua de Tamarindo (vaso)",
            'precio' => 25,
            'imagen' => 'bebida_03',
            'categoria_id' => 6,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Aua de Horchata (jarra)",
            'precio' => 25,
            'imagen' => 'bebida_04',
            'categoria_id' => 6,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Aua de Jamaica (jarra)",
            'precio' => 25,
            'imagen' => 'bebida_05',
            'categoria_id' => 6,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Aua de Tamarindo (jarra)",
            'precio' => 25,
            'imagen' => 'bebida_06',
            'categoria_id' => 6,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Oreo",
                'precio' => 45,
                'imagen' => 'frappes_01',
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Medias de seda",
            'precio' => 45,
            'imagen' => 'frappes_02',
            'categoria_id' => 7,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Cajeta",
            'precio' => 45,
            'imagen' => 'frappes_03',
            'categoria_id' => 7,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Kahlua",
            'precio' => 45,
            'imagen' => 'frappes_04',
            'categoria_id' => 7,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Rompope",
            'precio' => 45,
            'imagen' => 'frappes_05',
            'categoria_id' => 7,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Chocolate",
            'precio' => 45,
            'imagen' => 'frappes_06',
            'categoria_id' => 7,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "M&N",
            'precio' => 50,
            'imagen' => 'frappes_07',
            'categoria_id' => 7,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Chocoreta",
            'precio' => 50,
            'imagen' => 'frappes_08',
            'categoria_id' => 7,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Soya",
            'precio' => 10,
            'imagen' => 'extras_01',
            'categoria_id' => 8,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Tampico",
            'precio' => 10,
            'imagen' => 'extras_02',
            'categoria_id' => 8,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Chiles toreados",
            'precio' => 15,
            'imagen' => 'extras_03',
            'categoria_id' => 8,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Sriracha",
            'precio' => 15,
            'imagen' => 'extras_04',
            'categoria_id' => 8,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Aderezo de chipotle",
            'precio' => 10,
            'imagen' => 'extras_05',
            'categoria_id' => 8,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Teriyaki",
            'precio' => 10,
            'imagen' => 'extras_06',
            'categoria_id' => 8,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Empanizado",
            'precio' => 75,
            'imagen' => 'calientes_01',
            'categoria_id' => 9,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Mar y tiera",
            'precio' => 90,
            'imagen' => 'calientes_02',
            'categoria_id' => 9,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Apachito",
            'precio' => 90,
            'imagen' => 'calientes_03',
            'categoria_id' => 9,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Karamaki",
            'precio' => 85,
            'imagen' => 'calientes_04',
            'categoria_id' => 9,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Chuky",
            'precio' => 90,
            'imagen' => 'calientes_05',
            'categoria_id' => 9,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Acapulco",
            'precio' => 105,
            'imagen' => 'calientes_06',
            'categoria_id' => 9,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Pig",
            'precio' => 90,
            'imagen' => 'calientes_07',
            'categoria_id' => 9,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Alika",
            'precio' => 105,
            'imagen' => 'calientes_08',
            'categoria_id' => 9,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Mexican",
            'precio' => 100,
            'imagen' => 'calientes_09',
            'categoria_id' => 9,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Quiquin",
            'precio' => 100,
            'imagen' => 'calientes_10',
            'categoria_id' => 9,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Spoody",
            'precio' => 100,
            'imagen' => 'calientes_11',
            'categoria_id' => 9,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Saru",
            'precio' => 90,
            'imagen' => 'calientes_12',
            'categoria_id' => 9,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Bacon",
            'precio' => 105,
            'imagen' => 'calientes_13',
            'categoria_id' => 9,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Oppa",
            'precio' => 105,
            'imagen' => 'calientes_14',
            'categoria_id' => 9,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Uzz",
            'precio' => 140,
            'imagen' => 'calientes_15',
            'categoria_id' => 9,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Tempura",
            'precio' => 105,
            'imagen' => 'calientes_16',
            'categoria_id' => 9,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Kumo",
            'precio' => 150,
            'imagen' => 'calientes_17',
            'categoria_id' => 9,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "León",
            'precio' => 140,
            'imagen' => 'calientes_18',
            'categoria_id' => 9,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Trompo",
            'precio' => 110,
            'imagen' => 'calientes_19',
            'categoria_id' => 9,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Xalapeño Pepper",
            'precio' => 110,
            'imagen' => 'calientes_20',
            'categoria_id' => 9,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Augusto",
            'precio' => 150,
            'imagen' => 'calientes_21',
            'categoria_id' => 9,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Metztli",
            'precio' => 165,
            'imagen' => 'calientes_22',
            'categoria_id' => 9,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Tradicional",
            'precio' => 75,
            'imagen' => 'frios_01',
            'categoria_id' => 10,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Aguacate",
            'precio' => 75,
            'imagen' => 'frios_02',
            'categoria_id' => 10,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);

        DB::table('productos')->insert([
            'nombre' => "Platano",
            'precio' => 75,
            'imagen' => 'frios_03',
            'categoria_id' => 10,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "California maki",
            'precio' => 70,
            'imagen' => 'frios_04',
            'categoria_id' => 10,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Atun",
            'precio' => 85,
            'imagen' => 'frios_05',
            'categoria_id' => 10,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Laika",
            'precio' => 95,
            'imagen' => 'frios_06',
            'categoria_id' => 10,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Momo",
            'precio' => 105,
            'imagen' => 'frios_07',
            'categoria_id' => 10,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Mousy",
            'precio' => 100,
            'imagen' => 'frios_08',
            'categoria_id' => 10,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Futomaki",
            'precio' => 90,
            'imagen' => 'frios_09',
            'categoria_id' => 10,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "King",
            'precio' => 85,
            'imagen' => 'frios_10',
            'categoria_id' => 10,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Amargadita",
            'precio' => 90,
            'imagen' => 'frios_11',
            'categoria_id' => 10,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Sakura",
            'precio' => 105,
            'imagen' => 'frios_12',
            'categoria_id' => 10,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Loki",
            'precio' => 105,
            'imagen' => 'frios_13',
            'categoria_id' => 10,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Cuba",
            'precio' => 100,
            'imagen' => 'frios_14',
            'categoria_id' => 10,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Panchito",
            'precio' => 80,
            'imagen' => 'frios_15',
            'categoria_id' => 10,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Coco",
            'precio' => 105,
            'imagen' => 'frios_16',
            'categoria_id' => 10,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Junior",
            'precio' => 105,
            'imagen' => 'frios_17',
            'categoria_id' => 10,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Platano Supreme",
            'precio' => 105,
            'imagen' => 'frios_18',
            'categoria_id' => 10,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);

        DB::table('productos')->insert([
            'nombre' => "Yolotl",
            'precio' => 105,
            'imagen' => 'frios_19',
            'categoria_id' => 10,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Ligth",
            'precio' => 110,
            'imagen' => 'frios_20',
            'categoria_id' => 10,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('productos')->insert([
            'nombre' => "Kani",
            'precio' => 140,
            'imagen' => 'frios_21',
            'categoria_id' => 10,
            'disponible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
