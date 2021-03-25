<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PokedexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pokedex')->insert([
        	[
				'id' => 152,
				'name' => 'Chikorita',
				'type1' => 'Grass',
				'type2' => '',
				'HP' => 45,
				'attack' => 49,
				'defence' => 65,
				'sp_attack' => 49, 
				'sp_defence' => 65,
				'speed' => 45,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 153,
				'name' => 'Bayleef',
				'type1' => 'Grass',
				'type2' => '',
				'HP' => 60,
				'attack' => 62,
				'defence' => 80,
				'sp_attack' => 63, 
				'sp_defence' => 80,
				'speed' => 60,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 154,
				'name' => 'Meganium',
				'type1' => 'Grass',
				'type2' => '',
				'HP' => 80,
				'attack' => 82,
				'defence' => 100,
				'sp_attack' => 83, 
				'sp_defence' => 100,
				'speed' => 80,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 155,
				'name' => 'Cyndaquil',
				'type1' => 'Fire',
				'type2' => '',
				'HP' => 39,
				'attack' => 52,
				'defence' => 43,
				'sp_attack' => 60, 
				'sp_defence' => 50,
				'speed' => 65,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 156,
				'name' => 'Quilava',
				'type1' => 'Fire',
				'type2' => '',
				'HP' => 58,
				'attack' => 64,
				'defence' => 58,
				'sp_attack' => 80, 
				'sp_defence' => 65,
				'speed' => 80,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 157,
				'name' => 'Typhlosion',
				'type1' => 'Fire',
				'type2' => '',
				'HP' => 78,
				'attack' => 84,
				'defence' => 78,
				'sp_attack' => 109, 
				'sp_defence' => 85,
				'speed' => 100,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 158,
				'name' => 'Totodile',
				'type1' => 'Water',
				'type2' => '',
				'HP' => 50,
				'attack' => 65,
				'defence' => 64,
				'sp_attack' => 44, 
				'sp_defence' => 48,
				'speed' => 43,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 159,
				'name' => 'Croconaw',
				'type1' => 'Water',
				'type2' => '',
				'HP' => 65,
				'attack' => 80,
				'defence' => 80,
				'sp_attack' => 59, 
				'sp_defence' => 63,
				'speed' => 58,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 160,
				'name' => 'Feraligatr',
				'type1' => 'Water',
				'type2' => '',
				'HP' => 85,
				'attack' => 105,
				'defence' => 100,
				'sp_attack' => 79, 
				'sp_defence' => 83,
				'speed' => 78,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 161,
				'name' => 'Sentret',
				'type1' => 'Normal',
				'type2' => '',
				'HP' => 35,
				'attack' => 46,
				'defence' => 34,
				'sp_attack' => 35, 
				'sp_defence' => 45,
				'speed' => 20,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 162,
				'name' => 'Furret',
				'type1' => 'Normal',
				'type2' => '',
				'HP' => 85,
				'attack' => 76,
				'defence' => 64,
				'sp_attack' => 45, 
				'sp_defence' => 55,
				'speed' => 90,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 163,
				'name' => 'HootHoot',
				'type1' => 'Normal',
				'type2' => 'Flying',
				'HP' => 60,
				'attack' => 30,
				'defence' => 30,
				'sp_attack' => 36, 
				'sp_defence' => 56,
				'speed' => 50,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 164,
				'name' => 'Noctowl',
				'type1' => 'Normal',
				'type2' => 'Flying',
				'HP' => 100,
				'attack' => 50,
				'defence' => 50,
				'sp_attack' => 86, 
				'sp_defence' => 960,
				'speed' => 70,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 165,
				'name' => 'Ledyba',
				'type1' => 'Bug',
				'type2' => 'Flying',
				'HP' => 40,
				'attack' => 20,
				'defence' => 30,
				'sp_attack' => 40, 
				'sp_defence' => 80,
				'speed' => 55,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 166,
				'name' => 'Ledian',
				'type1' => 'Bug',
				'type2' => 'Flying',
				'HP' => 55,
				'attack' => 35,
				'defence' => 50,
				'sp_attack' => 55, 
				'sp_defence' => 110,
				'speed' => 85,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 167,
				'name' => 'Spinarak',
				'type1' => 'Bug',
				'type2' => 'Poison',
				'HP' => 40,
				'attack' => 60,
				'defence' => 40,
				'sp_attack' => 40, 
				'sp_defence' => 40,
				'speed' => 30,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 168,
				'name' => 'Ariados',
				'type1' => 'Bug',
				'type2' => 'Poison',
				'HP' => 70,
				'attack' => 90,
				'defence' => 70,
				'sp_attack' => 60, 
				'sp_defence' => 70,
				'speed' => 40,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 169,
				'name' => 'Crobat',
				'type1' => 'Poison',
				'type2' => 'Flying',
				'HP' => 85,
				'attack' => 90,
				'defence' => 80,
				'sp_attack' => 70, 
				'sp_defence' => 80,
				'speed' => 130,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 170,
				'name' => 'Chinchou',
				'type1' => 'Water',
				'type2' => 'Electric',
				'HP' => 75,
				'attack' => 38,
				'defence' => 38,
				'sp_attack' => 56, 
				'sp_defence' => 56,
				'speed' => 67,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 171,
				'name' => 'Lanturn',
				'type1' => 'Water',
				'type2' => 'Electric',
				'HP' => 125,
				'attack' => 58,
				'defence' => 58,
				'sp_attack' => 76, 
				'sp_defence' => 76,
				'speed' => 67,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 172,
				'name' => 'Pichu',
				'type1' => 'Electric',
				'type2' => '',
				'HP' => 20,
				'attack' => 40,
				'defence' => 15,
				'sp_attack' => 35, 
				'sp_defence' => 35,
				'speed' => 60,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 173,
				'name' => 'Cleffa',
				'type1' => 'Fairy',
				'type2' => '',
				'HP' => 50,
				'attack' => 25,
				'defence' => 28,
				'sp_attack' => 45, 
				'sp_defence' => 55,
				'speed' => 15,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 174,
				'name' => 'Igglybuff',
				'type1' => 'Normal',
				'type2' => 'Fairy',
				'HP' => 90,
				'attack' => 30,
				'defence' => 15,
				'sp_attack' => 40, 
				'sp_defence' => 20,
				'speed' => 15,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 175,
				'name' => 'Togepi',
				'type1' => 'Fairy',
				'type2' => '',
				'HP' => 35,
				'attack' => 20,
				'defence' => 65,
				'sp_attack' => 40, 
				'sp_defence' => 65,
				'speed' => 20,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 176,
				'name' => 'Togetic',
				'type1' => 'Fairy',
				'type2' => 'Flying',
				'HP' => 55,
				'attack' => 40,
				'defence' => 85,
				'sp_attack' => 80, 
				'sp_defence' => 105,
				'speed' => 40,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 177,
				'name' => 'Natu',
				'type1' => 'Psychic',
				'type2' => 'Flying',
				'HP' => 40,
				'attack' => 50,
				'defence' => 45,
				'sp_attack' => 70, 
				'sp_defence' => 45,
				'speed' => 70,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 178,
				'name' => 'Xatu',
				'type1' => 'Psychic',
				'type2' => 'Flying',
				'HP' => 65,
				'attack' => 75,
				'defence' => 70,
				'sp_attack' => 95, 
				'sp_defence' => 70,
				'speed' => 95,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 179,
				'name' => 'Mareep',
				'type1' => 'Electric',
				'type2' => '',
				'HP' => 55,
				'attack' => 40,
				'defence' => 40,
				'sp_attack' => 65, 
				'sp_defence' => 45,
				'speed' => 35,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 180,
				'name' => 'Flaaffy',
				'type1' => 'Electric',
				'type2' => '',
				'HP' => 70,
				'attack' => 55,
				'defence' => 55,
				'sp_attack' => 80, 
				'sp_defence' => 60,
				'speed' => 45,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 181,
				'name' => 'Ampharos',
				'type1' => 'Electric',
				'type2' => '',
				'HP' => 90,
				'attack' => 75,
				'defence' => 85,
				'sp_attack' => 115, 
				'sp_defence' => 90,
				'speed' => 55,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 182,
				'name' => 'Bellossom',
				'type1' => 'Grass',
				'type2' => '',
				'HP' => 75,
				'attack' => 80,
				'defence' => 95,
				'sp_attack' => 90, 
				'sp_defence' => 100,
				'speed' => 50,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 183,
				'name' => 'Marill',
				'type1' => 'Water',
				'type2' => 'Fairy',
				'HP' => 70,
				'attack' => 20,
				'defence' => 50,
				'sp_attack' => 20, 
				'sp_defence' => 50,
				'speed' => 40,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 184,
				'name' => 'Azumarill',
				'type1' => 'Water',
				'type2' => 'Fairy',
				'HP' => 100,
				'attack' => 50,
				'defence' => 80,
				'sp_attack' => 60, 
				'sp_defence' => 80,
				'speed' => 50,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 185,
				'name' => 'Sudowoodo',
				'type1' => 'Rock',
				'type2' => '',
				'HP' => 70,
				'attack' => 100,
				'defence' => 115,
				'sp_attack' => 30, 
				'sp_defence' => 65,
				'speed' => 30,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 186,
				'name' => 'Politoed',
				'type1' => 'Water',
				'type2' => '',
				'HP' => 90,
				'attack' => 75,
				'defence' => 75,
				'sp_attack' => 90, 
				'sp_defence' => 100,
				'speed' => 70,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 187,
				'name' => 'Hoppip',
				'type1' => 'Grass',
				'type2' => 'Flying',
				'HP' => 35,
				'attack' => 35,
				'defence' => 40,
				'sp_attack' => 35, 
				'sp_defence' => 55,
				'speed' => 50,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 188,
				'name' => 'Skiploom',
				'type1' => 'Grass',
				'type2' => 'Flying',
				'HP' => 55,
				'attack' => 45,
				'defence' => 50,
				'sp_attack' => 45, 
				'sp_defence' => 65,
				'speed' => 80,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 189,
				'name' => 'Jumpluff',
				'type1' => 'Grass',
				'type2' => 'Flying',
				'HP' => 75,
				'attack' => 55,
				'defence' => 70,
				'sp_attack' => 55, 
				'sp_defence' => 95,
				'speed' => 110,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 190,
				'name' => 'Aipom',
				'type1' => 'Normal',
				'type2' => '',
				'HP' => 55,
				'attack' => 70,
				'defence' => 55,
				'sp_attack' => 40, 
				'sp_defence' => 55,
				'speed' => 85,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 191,
				'name' => 'Sunkern',
				'type1' => 'Grass',
				'type2' => '',
				'HP' => 30,
				'attack' => 30,
				'defence' => 30,
				'sp_attack' => 30, 
				'sp_defence' => 30,
				'speed' => 30,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 192,
				'name' => 'Sunflora',
				'type1' => 'Grass',
				'type2' => '',
				'HP' => 75,
				'attack' => 75,
				'defence' => 55,
				'sp_attack' => 105, 
				'sp_defence' => 85,
				'speed' => 30,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 193,
				'name' => 'Yanma',
				'type1' => 'Bug',
				'type2' => 'Flying',
				'HP' => 65,
				'attack' => 65,
				'defence' => 45,
				'sp_attack' => 75, 
				'sp_defence' => 45,
				'speed' => 95,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 194,
				'name' => 'Wooper',
				'type1' => 'Water',
				'type2' => 'Ground',
				'HP' => 55,
				'attack' => 45,
				'defence' => 45,
				'sp_attack' => 25, 
				'sp_defence' => 25,
				'speed' => 15,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 195,
				'name' => 'Quagsire',
				'type1' => 'Water',
				'type2' => 'Ground',
				'HP' => 95,
				'attack' => 85,
				'defence' => 85,
				'sp_attack' => 65, 
				'sp_defence' => 65,
				'speed' => 35,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 196,
				'name' => 'Espeon',
				'type1' => 'Psychic',
				'type2' => '',
				'HP' => 65,
				'attack' => 65,
				'defence' => 60,
				'sp_attack' => 130, 
				'sp_defence' => 95,
				'speed' => 110,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 197,
				'name' => 'Umbreon',
				'type1' => 'Dark',
				'type2' => '',
				'HP' => 95,
				'attack' => 65,
				'defence' => 110,
				'sp_attack' => 60, 
				'sp_defence' => 130,
				'speed' => 65,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 198,
				'name' => 'Murkrow',
				'type1' => 'Dark',
				'type2' => 'Flying',
				'HP' => 60,
				'attack' => 85,
				'defence' => 42,
				'sp_attack' => 85, 
				'sp_defence' => 42,
				'speed' => 91,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 199,
				'name' => 'Slowking',
				'type1' => 'Water',
				'type2' => 'Psychic',
				'HP' => 95,
				'attack' => 75,
				'defence' => 80,
				'sp_attack' => 100, 
				'sp_defence' => 100,
				'speed' => 30,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 200,
				'name' => 'Misdreavus',
				'type1' => 'Ghost',
				'type2' => '',
				'HP' => 60,
				'attack' => 60,
				'defence' => 60,
				'sp_attack' => 85, 
				'sp_defence' => 85,
				'speed' => 85,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 201,
				'name' => 'Unown',
				'type1' => 'Psychic',
				'type2' => '',
				'HP' => 48,
				'attack' => 72,
				'defence' => 48,
				'sp_attack' => 72, 
				'sp_defence' => 48,
				'speed' => 48,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 202,
				'name' => 'Wobbuffet',
				'type1' => 'Psychic',
				'type2' => '',
				'HP' => 190,
				'attack' => 33,
				'defence' => 58,
				'sp_attack' => 33, 
				'sp_defence' => 58,
				'speed' => 33,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 203,
				'name' => 'Girafarig',
				'type1' => 'Normal',
				'type2' => 'Psychic',
				'HP' => 70,
				'attack' => 80,
				'defence' => 65,
				'sp_attack' => 90, 
				'sp_defence' => 65,
				'speed' => 85,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 204,
				'name' => 'Pineco',
				'type1' => 'Bug',
				'type2' => '',
				'HP' => 50,
				'attack' => 65,
				'defence' => 90,
				'sp_attack' => 35, 
				'sp_defence' => 35,
				'speed' => 15,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 205,
				'name' => 'Forretress',
				'type1' => 'Bug',
				'type2' => 'Steel',
				'HP' => 75,
				'attack' => 90,
				'defence' => 140,
				'sp_attack' => 60, 
				'sp_defence' => 60,
				'speed' => 40,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 206,
				'name' => 'Dunsparce',
				'type1' => 'Normal',
				'type2' => '',
				'HP' => 100,
				'attack' => 70,
				'defence' => 70,
				'sp_attack' => 65, 
				'sp_defence' => 65,
				'speed' => 45,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 207,
				'name' => 'Gligar',
				'type1' => 'Ground',
				'type2' => 'Flying',
				'HP' => 65,
				'attack' => 75,
				'defence' => 105,
				'sp_attack' => 35, 
				'sp_defence' => 65,
				'speed' => 85,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 208,
				'name' => 'Steelix',
				'type1' => 'Steel',
				'type2' => 'Ground',
				'HP' => 75,
				'attack' => 85,
				'defence' => 200,
				'sp_attack' => 55, 
				'sp_defence' => 65,
				'speed' => 30,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 209,
				'name' => 'Snubbul',
				'type1' => 'Fairy',
				'type2' => '',
				'HP' => 60,
				'attack' => 80,
				'defence' => 50,
				'sp_attack' => 40, 
				'sp_defence' => 40,
				'speed' => 30,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 210,
				'name' => 'Granbull',
				'type1' => 'Fairy',
				'type2' => '',
				'HP' => 90,
				'attack' => 120,
				'defence' => 75,
				'sp_attack' => 60, 
				'sp_defence' => 60,
				'speed' => 45,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 211,
				'name' => 'Qwilfish',
				'type1' => 'Water',
				'type2' => 'Poison',
				'HP' => 65,
				'attack' => 95,
				'defence' => 85,
				'sp_attack' => 55, 
				'sp_defence' => 55,
				'speed' => 85,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 212,
				'name' => 'Scizor',
				'type1' => 'Bug',
				'type2' => 'Steel',
				'HP' => 70,
				'attack' => 130,
				'defence' => 100,
				'sp_attack' => 55, 
				'sp_defence' => 80,
				'speed' => 65,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 213,
				'name' => 'Shuckle',
				'type1' => 'Bug',
				'type2' => 'Rock',
				'HP' => 20,
				'attack' => 10,
				'defence' => 230,
				'sp_attack' => 10, 
				'sp_defence' => 230,
				'speed' => 5,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 214,
				'name' => 'Heracross',
				'type1' => 'Bug',
				'type2' => 'Fight',
				'HP' => 80,
				'attack' => 125,
				'defence' => 75,
				'sp_attack' => 40, 
				'sp_defence' => 95,
				'speed' => 85,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 215,
				'name' => 'Sneasel',
				'type1' => 'Dark',
				'type2' => 'Ice',
				'HP' => 55,
				'attack' => 95,
				'defence' => 55,
				'sp_attack' => 35, 
				'sp_defence' => 75,
				'speed' => 115,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 216,
				'name' => 'Teddiursa',
				'type1' => 'Normal',
				'type2' => '',
				'HP' => 60,
				'attack' => 80,
				'defence' => 50,
				'sp_attack' => 50, 
				'sp_defence' => 50,
				'speed' => 40,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 217,
				'name' => 'Ursaring',
				'type1' => 'Normal',
				'type2' => '',
				'HP' => 90,
				'attack' => 130,
				'defence' => 75,
				'sp_attack' => 75, 
				'sp_defence' => 75,
				'speed' => 55,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 218,
				'name' => 'Slugma',
				'type1' => 'Fire',
				'type2' => '',
				'HP' => 40,
				'attack' => 40,
				'defence' => 40,
				'sp_attack' => 70, 
				'sp_defence' => 40,
				'speed' => 20,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 219,
				'name' => 'Magcargo',
				'type1' => 'Fire',
				'type2' => 'Rock',
				'HP' => 60,
				'attack' => 50,
				'defence' => 120,
				'sp_attack' => 90, 
				'sp_defence' => 80,
				'speed' => 30,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 220,
				'name' => 'Swinub',
				'type1' => 'Ice',
				'type2' => 'Ground',
				'HP' => 50,
				'attack' => 50,
				'defence' => 40,
				'sp_attack' => 30, 
				'sp_defence' => 30,
				'speed' => 50,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 221,
				'name' => 'Piloswine',
				'type1' => 'Ice',
				'type2' => 'Ground',
				'HP' => 100,
				'attack' => 100,
				'defence' => 80,
				'sp_attack' => 60, 
				'sp_defence' => 60,
				'speed' => 50,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 222,
				'name' => 'Corsola',
				'type1' => 'Water',
				'type2' => 'Rock',
				'HP' => 65,
				'attack' => 55,
				'defence' => 95,
				'sp_attack' => 65, 
				'sp_defence' => 95,
				'speed' => 35,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 223,
				'name' => 'Remoraid',
				'type1' => 'Water',
				'type2' => '',
				'HP' => 35,
				'attack' => 65,
				'defence' => 35,
				'sp_attack' => 65, 
				'sp_defence' => 35,
				'speed' => 65,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 224,
				'name' => 'Octillery',
				'type1' => 'Water',
				'type2' => '',
				'HP' => 75,
				'attack' => 105,
				'defence' => 75,
				'sp_attack' => 105, 
				'sp_defence' => 75,
				'speed' => 45,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 225,
				'name' => 'Delibird',
				'type1' => 'Ice',
				'type2' => 'Flying',
				'HP' => 45,
				'attack' => 55,
				'defence' => 45,
				'sp_attack' => 65, 
				'sp_defence' => 45,
				'speed' => 75,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 226,
				'name' => 'Mantine',
				'type1' => 'Water',
				'type2' => 'Flying',
				'HP' => 85,
				'attack' => 40,
				'defence' => 70,
				'sp_attack' => 80, 
				'sp_defence' => 140,
				'speed' => 70,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 227,
				'name' => 'Skarmory',
				'type1' => 'Steel',
				'type2' => 'Flying',
				'HP' => 65,
				'attack' => 80,
				'defence' => 140,
				'sp_attack' => 40, 
				'sp_defence' => 70,
				'speed' => 70,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 228,
				'name' => 'Houndour',
				'type1' => 'Dark',
				'type2' => 'Fire',
				'HP' => 45,
				'attack' => 60,
				'defence' => 30,
				'sp_attack' => 80, 
				'sp_defence' => 50,
				'speed' => 65,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 229,
				'name' => 'Houndoom',
				'type1' => 'Dark',
				'type2' => 'Fire',
				'HP' => 75,
				'attack' => 90,
				'defence' => 50,
				'sp_attack' => 110, 
				'sp_defence' => 80,
				'speed' => 95,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 230,
				'name' => 'Kingdra',
				'type1' => 'Water',
				'type2' => 'Dragon',
				'HP' => 75,
				'attack' => 95,
				'defence' => 95,
				'sp_attack' => 95, 
				'sp_defence' => 95,
				'speed' => 85,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 231,
				'name' => 'Phanpy',
				'type1' => 'Ground',
				'type2' => '',
				'HP' => 90,
				'attack' => 60,
				'defence' => 60,
				'sp_attack' => 40, 
				'sp_defence' => 40,
				'speed' => 40,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 232,
				'name' => 'Donphan',
				'type1' => 'Ground',
				'type2' => '',
				'HP' => 90,
				'attack' => 120,
				'defence' => 120,
				'sp_attack' => 60, 
				'sp_defence' => 60,
				'speed' => 50,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 233,
				'name' => 'Porygon2',
				'type1' => 'Normal',
				'type2' => '',
				'HP' => 85,
				'attack' => 80,
				'defence' => 90,
				'sp_attack' => 105, 
				'sp_defence' => 95,
				'speed' => 60,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 234,
				'name' => 'Stantler',
				'type1' => 'Normal',
				'type2' => '',
				'HP' => 73,
				'attack' => 95,
				'defence' => 62,
				'sp_attack' => 85, 
				'sp_defence' => 65,
				'speed' => 85,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 235,
				'name' => 'Smeargle',
				'type1' => 'Normal',
				'type2' => '',
				'HP' => 55,
				'attack' => 20,
				'defence' => 35,
				'sp_attack' => 20, 
				'sp_defence' => 45,
				'speed' => 75,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 236,
				'name' => 'Tyrogue',
				'type1' => 'Fight',
				'type2' => '',
				'HP' => 35,
				'attack' => 35,
				'defence' => 35,
				'sp_attack' => 35, 
				'sp_defence' => 35,
				'speed' => 35,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 237,
				'name' => 'Hitmontop',
				'type1' => 'Fight',
				'type2' => '',
				'HP' => 50,
				'attack' => 95,
				'defence' => 95,
				'sp_attack' => 35, 
				'sp_defence' => 110,
				'speed' => 70,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 238,
				'name' => 'Smoochum',
				'type1' => 'Ice',
				'type2' => 'Psychic',
				'HP' => 45,
				'attack' => 30,
				'defence' => 15,
				'sp_attack' => 85, 
				'sp_defence' => 65,
				'speed' => 65,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 239,
				'name' => 'Elekid',
				'type1' => 'Electric',
				'type2' => '',
				'HP' => 45,
				'attack' => 63,
				'defence' => 37,
				'sp_attack' => 65, 
				'sp_defence' => 55,
				'speed' => 95,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 240,
				'name' => 'Magby',
				'type1' => 'Fire',
				'type2' => '',
				'HP' => 45,
				'attack' => 75,
				'defence' => 37,
				'sp_attack' => 70, 
				'sp_defence' => 55,
				'speed' => 83,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 241,
				'name' => 'Miltank',
				'type1' => 'Normal',
				'type2' => '',
				'HP' => 95,
				'attack' => 80,
				'defence' => 105,
				'sp_attack' => 40, 
				'sp_defence' => 70,
				'speed' => 100,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 242,
				'name' => 'Blissey',
				'type1' => 'Normal',
				'type2' => '',
				'HP' => 255,
				'attack' => 10,
				'defence' => 10,
				'sp_attack' => 75, 
				'sp_defence' => 135,
				'speed' => 55,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 243,
				'name' => 'Raikou',
				'type1' => 'Electric',
				'type2' => '',
				'HP' => 90,
				'attack' => 85,
				'defence' => 75,
				'sp_attack' => 115, 
				'sp_defence' => 100,
				'speed' => 115,
				'generation' => 2,
				'legendary' => 1,
			],
			[
				'id' => 244,
				'name' => 'Entei',
				'type1' => 'Fire',
				'type2' => '',
				'HP' => 115,
				'attack' => 115,
				'defence' => 85,
				'sp_attack' => 90, 
				'sp_defence' => 75,
				'speed' => 100,
				'generation' => 2,
				'legendary' => 1,
			],
			[
				'id' => 245,
				'name' => 'Suicune',
				'type1' => 'Water',
				'type2' => '',
				'HP' => 100,
				'attack' => 75,
				'defence' => 115,
				'sp_attack' => 90, 
				'sp_defence' => 115,
				'speed' => 85,
				'generation' => 2,
				'legendary' => 1,
			],
			[
				'id' => 246,
				'name' => 'Larvitar',
				'type1' => 'Rock',
				'type2' => 'Ground',
				'HP' => 50,
				'attack' => 64,
				'defence' => 50,
				'sp_attack' => 45, 
				'sp_defence' => 50,
				'speed' => 41,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 247,
				'name' => 'Pupitar',
				'type1' => 'Rock',
				'type2' => 'Ground',
				'HP' => 70,
				'attack' => 84,
				'defence' => 70,
				'sp_attack' => 65, 
				'sp_defence' => 70,
				'speed' => 51,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 248,
				'name' => 'Tyranitar',
				'type1' => 'Rock',
				'type2' => 'Dark',
				'HP' => 100,
				'attack' => 134,
				'defence' => 110,
				'sp_attack' => 95, 
				'sp_defence' => 100,
				'speed' => 61,
				'generation' => 2,
				'legendary' => 0,
			],
			[
				'id' => 249,
				'name' => 'Lugia',
				'type1' => 'Psychic',
				'type2' => 'Flying',
				'HP' => 106,
				'attack' => 90,
				'defence' => 130,
				'sp_attack' => 90, 
				'sp_defence' => 154,
				'speed' => 110,
				'generation' => 2,
				'legendary' => 1,
			],
			[
				'id' => 250,
				'name' => 'Ho-Oh',
				'type1' => 'Fire',
				'type2' => 'Flying',
				'HP' => 106,
				'attack' => 130,
				'defence' => 90,
				'sp_attack' => 110, 
				'sp_defence' => 154,
				'speed' => 90,
				'generation' => 2,
				'legendary' => 1,
			],
			[
				'id' => 251,
				'name' => 'Celebi',
				'type1' => 'Psychic',
				'type2' => 'Grass',
				'HP' => 100,
				'attack' => 100,
				'defence' => 100,
				'sp_attack' => 100, 
				'sp_defence' => 100,
				'speed' => 100,
				'generation' => 2,
				'legendary' => 1,
			],
        ]);
    }
}
