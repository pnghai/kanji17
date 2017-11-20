<?php

use Illuminate\Database\Seeder;

class PronunciationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pronunciations')->delete();
        
        \DB::table('pronunciations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'is_kunyomi' => 1,
                'character_id' => 1,
                'pronunciation' => 'HITOTSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            1 => 
            array (
                'id' => 2,
                'is_kunyomi' => 1,
                'character_id' => 1,
                'pronunciation' => 'HITOTABI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            2 => 
            array (
                'id' => 3,
                'is_kunyomi' => 1,
                'character_id' => 1,
                'pronunciation' => 'HAJIME',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            3 => 
            array (
                'id' => 4,
                'is_kunyomi' => 0,
                'character_id' => 1,
                'pronunciation' => 'ICHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            4 => 
            array (
                'id' => 5,
                'is_kunyomi' => 0,
                'character_id' => 1,
                'pronunciation' => 'ITSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            5 => 
            array (
                'id' => 6,
                'is_kunyomi' => 1,
                'character_id' => 2,
                'pronunciation' => 'SUSUMU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            6 => 
            array (
                'id' => 7,
                'is_kunyomi' => 1,
                'character_id' => 2,
                'pronunciation' => 'SHIRIZOKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            7 => 
            array (
                'id' => 8,
                'is_kunyomi' => 0,
                'character_id' => 2,
                'pronunciation' => 'KON',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            8 => 
            array (
                'id' => 9,
                'is_kunyomi' => 0,
                'character_id' => 2,
                'pronunciation' => 'SHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            9 => 
            array (
                'id' => 10,
                'is_kunyomi' => 0,
                'character_id' => 2,
                'pronunciation' => 'JO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            10 => 
            array (
                'id' => 11,
                'is_kunyomi' => 0,
                'character_id' => 2,
                'pronunciation' => 'NYO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            11 => 
            array (
                'id' => 12,
                'is_kunyomi' => 1,
                'character_id' => 3,
                'pronunciation' => 'TEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            12 => 
            array (
                'id' => 13,
                'is_kunyomi' => 1,
                'character_id' => 3,
                'pronunciation' => 'CHOBO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            13 => 
            array (
                'id' => 14,
                'is_kunyomi' => 1,
                'character_id' => 3,
                'pronunciation' => 'SHIRUSHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            14 => 
            array (
                'id' => 15,
                'is_kunyomi' => 0,
                'character_id' => 3,
                'pronunciation' => 'CHU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            15 => 
            array (
                'id' => 16,
                'is_kunyomi' => 1,
                'character_id' => 4,
                'pronunciation' => 'MOTORU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            16 => 
            array (
                'id' => 17,
                'is_kunyomi' => 0,
                'character_id' => 4,
                'pronunciation' => 'HETSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            17 => 
            array (
                'id' => 18,
                'is_kunyomi' => 0,
                'character_id' => 4,
                'pronunciation' => 'HECHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            18 => 
            array (
                'id' => 19,
                'is_kunyomi' => 0,
                'character_id' => 4,
                'pronunciation' => 'YOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            19 => 
            array (
                'id' => 20,
                'is_kunyomi' => 1,
                'character_id' => 5,
                'pronunciation' => 'MAGARU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            20 => 
            array (
                'id' => 21,
                'is_kunyomi' => 0,
                'character_id' => 5,
                'pronunciation' => 'FUTSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            21 => 
            array (
                'id' => 22,
                'is_kunyomi' => 0,
                'character_id' => 5,
                'pronunciation' => 'BUCHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            22 => 
            array (
                'id' => 23,
                'is_kunyomi' => 1,
                'character_id' => 6,
                'pronunciation' => 'NAGARERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            23 => 
            array (
                'id' => 24,
                'is_kunyomi' => 0,
                'character_id' => 6,
                'pronunciation' => 'I',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            24 => 
            array (
                'id' => 25,
                'is_kunyomi' => 1,
                'character_id' => 7,
                'pronunciation' => 'KINOTO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            25 => 
            array (
                'id' => 26,
                'is_kunyomi' => 1,
                'character_id' => 7,
                'pronunciation' => 'OTO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            26 => 
            array (
                'id' => 27,
                'is_kunyomi' => 0,
                'character_id' => 7,
                'pronunciation' => 'OTSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:52',
                'updated_at' => '2017-10-21 14:33:52',
            ),
            27 => 
            array (
                'id' => 28,
                'is_kunyomi' => 1,
                'character_id' => 8,
                'pronunciation' => 'KAKURERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            28 => 
            array (
                'id' => 29,
                'is_kunyomi' => 0,
                'character_id' => 8,
                'pronunciation' => 'IN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            29 => 
            array (
                'id' => 30,
                'is_kunyomi' => 0,
                'character_id' => 8,
                'pronunciation' => 'ON',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            30 => 
            array (
                'id' => 31,
                'is_kunyomi' => 1,
                'character_id' => 9,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            31 => 
            array (
                'id' => 32,
                'is_kunyomi' => 0,
                'character_id' => 9,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            32 => 
            array (
                'id' => 33,
                'is_kunyomi' => 1,
                'character_id' => 10,
                'pronunciation' => 'KAGI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            33 => 
            array (
                'id' => 34,
                'is_kunyomi' => 0,
                'character_id' => 10,
                'pronunciation' => 'KETSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            34 => 
            array (
                'id' => 35,
                'is_kunyomi' => 1,
                'character_id' => 11,
                'pronunciation' => 'FUTATSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            35 => 
            array (
                'id' => 36,
                'is_kunyomi' => 1,
                'character_id' => 11,
                'pronunciation' => 'FUTATABI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            36 => 
            array (
                'id' => 37,
                'is_kunyomi' => 0,
                'character_id' => 11,
                'pronunciation' => 'NI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            37 => 
            array (
                'id' => 38,
                'is_kunyomi' => 0,
                'character_id' => 11,
                'pronunciation' => 'JI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            38 => 
            array (
                'id' => 39,
                'is_kunyomi' => 1,
                'character_id' => 12,
                'pronunciation' => 'KEISAN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            39 => 
            array (
                'id' => 40,
                'is_kunyomi' => 1,
                'character_id' => 12,
                'pronunciation' => 'NABEBUTA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            40 => 
            array (
                'id' => 41,
                'is_kunyomi' => 0,
                'character_id' => 12,
                'pronunciation' => 'TOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            41 => 
            array (
                'id' => 42,
                'is_kunyomi' => 0,
                'character_id' => 12,
                'pronunciation' => 'ZU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            42 => 
            array (
                'id' => 43,
                'is_kunyomi' => 1,
                'character_id' => 13,
                'pronunciation' => 'HITO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            43 => 
            array (
                'id' => 44,
                'is_kunyomi' => 0,
                'character_id' => 13,
                'pronunciation' => 'JIN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            44 => 
            array (
                'id' => 45,
                'is_kunyomi' => 0,
                'character_id' => 13,
                'pronunciation' => 'NIN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            45 => 
            array (
                'id' => 46,
                'is_kunyomi' => 1,
                'character_id' => 14,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            46 => 
            array (
                'id' => 47,
                'is_kunyomi' => 0,
                'character_id' => 14,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            47 => 
            array (
                'id' => 48,
                'is_kunyomi' => 1,
                'character_id' => 15,
                'pronunciation' => 'HITO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            48 => 
            array (
                'id' => 49,
                'is_kunyomi' => 1,
                'character_id' => 15,
                'pronunciation' => 'NIッNYOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            49 => 
            array (
                'id' => 50,
                'is_kunyomi' => 0,
                'character_id' => 15,
                'pronunciation' => 'JIN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            50 => 
            array (
                'id' => 51,
                'is_kunyomi' => 0,
                'character_id' => 15,
                'pronunciation' => 'NIN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            51 => 
            array (
                'id' => 52,
                'is_kunyomi' => 0,
                'character_id' => 15,
                'pronunciation' => 'KAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            52 => 
            array (
                'id' => 53,
                'is_kunyomi' => 1,
                'character_id' => 16,
                'pronunciation' => 'IRU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            53 => 
            array (
                'id' => 54,
                'is_kunyomi' => 1,
                'character_id' => 16,
                'pronunciation' => 'HAIRU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            54 => 
            array (
                'id' => 55,
                'is_kunyomi' => 0,
                'character_id' => 16,
                'pronunciation' => 'NYッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            55 => 
            array (
                'id' => 56,
                'is_kunyomi' => 0,
                'character_id' => 16,
                'pronunciation' => 'JU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            56 => 
            array (
                'id' => 57,
                'is_kunyomi' => 0,
                'character_id' => 16,
                'pronunciation' => 'JッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            57 => 
            array (
                'id' => 58,
                'is_kunyomi' => 1,
                'character_id' => 17,
                'pronunciation' => 'YATSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            58 => 
            array (
                'id' => 59,
                'is_kunyomi' => 1,
                'character_id' => 17,
                'pronunciation' => 'YATABI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            59 => 
            array (
                'id' => 60,
                'is_kunyomi' => 0,
                'character_id' => 17,
                'pronunciation' => 'HACHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            60 => 
            array (
                'id' => 61,
                'is_kunyomi' => 0,
                'character_id' => 17,
                'pronunciation' => 'HATSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            61 => 
            array (
                'id' => 62,
                'is_kunyomi' => 1,
                'character_id' => 18,
                'pronunciation' => 'TッOI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            62 => 
            array (
                'id' => 63,
                'is_kunyomi' => 0,
                'character_id' => 18,
                'pronunciation' => 'KEI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            63 => 
            array (
                'id' => 64,
                'is_kunyomi' => 0,
                'character_id' => 18,
                'pronunciation' => 'KYOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            64 => 
            array (
                'id' => 65,
                'is_kunyomi' => 1,
                'character_id' => 19,
                'pronunciation' => 'ッOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            65 => 
            array (
                'id' => 66,
                'is_kunyomi' => 0,
                'character_id' => 19,
                'pronunciation' => 'BEKI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            66 => 
            array (
                'id' => 67,
                'is_kunyomi' => 0,
                'character_id' => 19,
                'pronunciation' => 'MYAKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            67 => 
            array (
                'id' => 68,
                'is_kunyomi' => 1,
                'character_id' => 20,
                'pronunciation' => 'KッORI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            68 => 
            array (
                'id' => 69,
                'is_kunyomi' => 0,
                'character_id' => 20,
                'pronunciation' => 'HYOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            69 => 
            array (
                'id' => 70,
                'is_kunyomi' => 1,
                'character_id' => 21,
                'pronunciation' => 'TSUKUE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            70 => 
            array (
                'id' => 71,
                'is_kunyomi' => 0,
                'character_id' => 21,
                'pronunciation' => 'KI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            71 => 
            array (
                'id' => 72,
                'is_kunyomi' => 1,
                'character_id' => 22,
                'pronunciation' => 'KAッNYOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            72 => 
            array (
                'id' => 73,
                'is_kunyomi' => 1,
                'character_id' => 22,
                'pronunciation' => 'KANGAMAE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            73 => 
            array (
                'id' => 74,
                'is_kunyomi' => 0,
                'character_id' => 22,
                'pronunciation' => 'KAN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            74 => 
            array (
                'id' => 75,
                'is_kunyomi' => 0,
                'character_id' => 22,
                'pronunciation' => 'KON',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            75 => 
            array (
                'id' => 76,
                'is_kunyomi' => 1,
                'character_id' => 23,
                'pronunciation' => 'KATANA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            76 => 
            array (
                'id' => 77,
                'is_kunyomi' => 0,
                'character_id' => 23,
                'pronunciation' => 'TOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            77 => 
            array (
                'id' => 78,
                'is_kunyomi' => 1,
                'character_id' => 24,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            78 => 
            array (
                'id' => 79,
                'is_kunyomi' => 0,
                'character_id' => 24,
                'pronunciation' => 'TEU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            79 => 
            array (
                'id' => 80,
                'is_kunyomi' => 0,
                'character_id' => 24,
                'pronunciation' => 'CHOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            80 => 
            array (
                'id' => 81,
                'is_kunyomi' => 1,
                'character_id' => 25,
                'pronunciation' => 'RITSUTOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            81 => 
            array (
                'id' => 82,
                'is_kunyomi' => 0,
                'character_id' => 25,
                'pronunciation' => 'TAU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            82 => 
            array (
                'id' => 83,
                'is_kunyomi' => 1,
                'character_id' => 26,
                'pronunciation' => 'CHIKARA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            83 => 
            array (
                'id' => 84,
                'is_kunyomi' => 1,
                'character_id' => 26,
                'pronunciation' => 'TSUTOMERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            84 => 
            array (
                'id' => 85,
                'is_kunyomi' => 1,
                'character_id' => 26,
                'pronunciation' => 'RIKIMU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            85 => 
            array (
                'id' => 86,
                'is_kunyomi' => 0,
                'character_id' => 26,
                'pronunciation' => 'RYOKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            86 => 
            array (
                'id' => 87,
                'is_kunyomi' => 0,
                'character_id' => 26,
                'pronunciation' => 'RIKI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            87 => 
            array (
                'id' => 88,
                'is_kunyomi' => 1,
                'character_id' => 27,
                'pronunciation' => 'TSUTSUMU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            88 => 
            array (
                'id' => 89,
                'is_kunyomi' => 0,
                'character_id' => 27,
                'pronunciation' => 'HOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            89 => 
            array (
                'id' => 90,
                'is_kunyomi' => 1,
                'character_id' => 28,
                'pronunciation' => 'SAJI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            90 => 
            array (
                'id' => 91,
                'is_kunyomi' => 0,
                'character_id' => 28,
                'pronunciation' => 'HI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            91 => 
            array (
                'id' => 92,
                'is_kunyomi' => 1,
                'character_id' => 29,
                'pronunciation' => 'HAKO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            92 => 
            array (
                'id' => 93,
                'is_kunyomi' => 0,
                'character_id' => 29,
                'pronunciation' => 'HOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            93 => 
            array (
                'id' => 94,
                'is_kunyomi' => 1,
                'character_id' => 30,
                'pronunciation' => 'KAKUSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            94 => 
            array (
                'id' => 95,
                'is_kunyomi' => 1,
                'character_id' => 30,
                'pronunciation' => 'ッOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            95 => 
            array (
                'id' => 96,
                'is_kunyomi' => 0,
                'character_id' => 30,
                'pronunciation' => 'KEI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            96 => 
            array (
                'id' => 97,
                'is_kunyomi' => 1,
                'character_id' => 31,
                'pronunciation' => 'TOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            97 => 
            array (
                'id' => 98,
                'is_kunyomi' => 1,
                'character_id' => 31,
                'pronunciation' => 'TOTABI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            98 => 
            array (
                'id' => 99,
                'is_kunyomi' => 0,
                'character_id' => 31,
                'pronunciation' => 'JッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            99 => 
            array (
                'id' => 100,
                'is_kunyomi' => 0,
                'character_id' => 31,
                'pronunciation' => 'JITSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            100 => 
            array (
                'id' => 101,
                'is_kunyomi' => 1,
                'character_id' => 32,
                'pronunciation' => 'URANAU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            101 => 
            array (
                'id' => 102,
                'is_kunyomi' => 1,
                'character_id' => 32,
                'pronunciation' => 'URANAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            102 => 
            array (
                'id' => 103,
                'is_kunyomi' => 0,
                'character_id' => 32,
                'pronunciation' => 'BOKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            103 => 
            array (
                'id' => 104,
                'is_kunyomi' => 1,
                'character_id' => 33,
                'pronunciation' => 'WARIFU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            104 => 
            array (
                'id' => 105,
                'is_kunyomi' => 0,
                'character_id' => 33,
                'pronunciation' => 'SETSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            105 => 
            array (
                'id' => 106,
                'is_kunyomi' => 1,
                'character_id' => 34,
                'pronunciation' => 'GAKE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            106 => 
            array (
                'id' => 107,
                'is_kunyomi' => 0,
                'character_id' => 34,
                'pronunciation' => 'KAN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            107 => 
            array (
                'id' => 108,
                'is_kunyomi' => 1,
                'character_id' => 35,
                'pronunciation' => 'GOZARU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            108 => 
            array (
                'id' => 109,
                'is_kunyomi' => 0,
                'character_id' => 35,
                'pronunciation' => 'SHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            109 => 
            array (
                'id' => 110,
                'is_kunyomi' => 0,
                'character_id' => 35,
                'pronunciation' => 'BOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            110 => 
            array (
                'id' => 111,
                'is_kunyomi' => 0,
                'character_id' => 35,
                'pronunciation' => 'MU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            111 => 
            array (
                'id' => 112,
                'is_kunyomi' => 1,
                'character_id' => 36,
                'pronunciation' => 'MATA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            112 => 
            array (
                'id' => 113,
                'is_kunyomi' => 0,
                'character_id' => 36,
                'pronunciation' => 'YッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            113 => 
            array (
                'id' => 114,
                'is_kunyomi' => 1,
                'character_id' => 37,
                'pronunciation' => 'KUCHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            114 => 
            array (
                'id' => 115,
                'is_kunyomi' => 0,
                'character_id' => 37,
                'pronunciation' => 'KOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            115 => 
            array (
                'id' => 116,
                'is_kunyomi' => 0,
                'character_id' => 37,
                'pronunciation' => 'KU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            116 => 
            array (
                'id' => 117,
                'is_kunyomi' => 1,
                'character_id' => 38,
                'pronunciation' => 'KAKOMU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            117 => 
            array (
                'id' => 118,
                'is_kunyomi' => 1,
                'character_id' => 38,
                'pronunciation' => 'KUNI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            118 => 
            array (
                'id' => 119,
                'is_kunyomi' => 0,
                'character_id' => 38,
                'pronunciation' => 'I',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            119 => 
            array (
                'id' => 120,
                'is_kunyomi' => 0,
                'character_id' => 38,
                'pronunciation' => 'KOKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            120 => 
            array (
                'id' => 121,
                'is_kunyomi' => 1,
                'character_id' => 39,
                'pronunciation' => 'TSUCHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            121 => 
            array (
                'id' => 122,
                'is_kunyomi' => 0,
                'character_id' => 39,
                'pronunciation' => 'DO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            122 => 
            array (
                'id' => 123,
                'is_kunyomi' => 0,
                'character_id' => 39,
                'pronunciation' => 'TO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            123 => 
            array (
                'id' => 124,
                'is_kunyomi' => 1,
                'character_id' => 40,
                'pronunciation' => 'SAMURAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            124 => 
            array (
                'id' => 125,
                'is_kunyomi' => 0,
                'character_id' => 40,
                'pronunciation' => 'SHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            125 => 
            array (
                'id' => 126,
                'is_kunyomi' => 0,
                'character_id' => 40,
                'pronunciation' => 'JI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            126 => 
            array (
                'id' => 127,
                'is_kunyomi' => 1,
                'character_id' => 41,
                'pronunciation' => 'OKURERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            127 => 
            array (
                'id' => 128,
                'is_kunyomi' => 0,
                'character_id' => 41,
                'pronunciation' => 'CHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            128 => 
            array (
                'id' => 129,
                'is_kunyomi' => 0,
                'character_id' => 41,
                'pronunciation' => 'SHッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            129 => 
            array (
                'id' => 130,
                'is_kunyomi' => 0,
                'character_id' => 41,
                'pronunciation' => 'SHU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            130 => 
            array (
                'id' => 131,
                'is_kunyomi' => 1,
                'character_id' => 42,
                'pronunciation' => 'SUINYOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            131 => 
            array (
                'id' => 132,
                'is_kunyomi' => 0,
                'character_id' => 42,
                'pronunciation' => 'SUI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            132 => 
            array (
                'id' => 133,
                'is_kunyomi' => 1,
                'character_id' => 43,
                'pronunciation' => 'YッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            133 => 
            array (
                'id' => 134,
                'is_kunyomi' => 1,
                'character_id' => 43,
                'pronunciation' => 'YッUBE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            134 => 
            array (
                'id' => 135,
                'is_kunyomi' => 0,
                'character_id' => 43,
                'pronunciation' => 'SEKI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            135 => 
            array (
                'id' => 136,
                'is_kunyomi' => 1,
                'character_id' => 44,
                'pronunciation' => 'OOKッI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            136 => 
            array (
                'id' => 137,
                'is_kunyomi' => 1,
                'character_id' => 44,
                'pronunciation' => 'HAJIME',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            137 => 
            array (
                'id' => 138,
                'is_kunyomi' => 1,
                'character_id' => 44,
                'pronunciation' => 'ッOINI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            138 => 
            array (
                'id' => 139,
                'is_kunyomi' => 0,
                'character_id' => 44,
                'pronunciation' => 'TAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            139 => 
            array (
                'id' => 140,
                'is_kunyomi' => 0,
                'character_id' => 44,
                'pronunciation' => 'DAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            140 => 
            array (
                'id' => 141,
                'is_kunyomi' => 0,
                'character_id' => 44,
                'pronunciation' => 'TA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            141 => 
            array (
                'id' => 142,
                'is_kunyomi' => 1,
                'character_id' => 45,
                'pronunciation' => 'KATAMUKERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            142 => 
            array (
                'id' => 143,
                'is_kunyomi' => 0,
                'character_id' => 45,
                'pronunciation' => 'SHOKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            143 => 
            array (
                'id' => 144,
                'is_kunyomi' => 0,
                'character_id' => 45,
                'pronunciation' => 'SHIKI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            144 => 
            array (
                'id' => 145,
                'is_kunyomi' => 0,
                'character_id' => 45,
                'pronunciation' => 'RETSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            145 => 
            array (
                'id' => 146,
                'is_kunyomi' => 0,
                'character_id' => 45,
                'pronunciation' => 'RECHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            146 => 
            array (
                'id' => 147,
                'is_kunyomi' => 1,
                'character_id' => 46,
                'pronunciation' => 'OッNA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            147 => 
            array (
                'id' => 148,
                'is_kunyomi' => 1,
                'character_id' => 46,
                'pronunciation' => 'ME',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            148 => 
            array (
                'id' => 149,
                'is_kunyomi' => 1,
                'character_id' => 46,
                'pronunciation' => 'MUSUME',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            149 => 
            array (
                'id' => 150,
                'is_kunyomi' => 0,
                'character_id' => 46,
                'pronunciation' => 'JO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            150 => 
            array (
                'id' => 151,
                'is_kunyomi' => 0,
                'character_id' => 46,
                'pronunciation' => 'NYO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            151 => 
            array (
                'id' => 152,
                'is_kunyomi' => 0,
                'character_id' => 46,
                'pronunciation' => 'NYOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            152 => 
            array (
                'id' => 153,
                'is_kunyomi' => 1,
                'character_id' => 47,
                'pronunciation' => 'KO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            153 => 
            array (
                'id' => 154,
                'is_kunyomi' => 1,
                'character_id' => 47,
                'pronunciation' => 'MI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            154 => 
            array (
                'id' => 155,
                'is_kunyomi' => 1,
                'character_id' => 47,
                'pronunciation' => 'OTOKO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            155 => 
            array (
                'id' => 156,
                'is_kunyomi' => 0,
                'character_id' => 47,
                'pronunciation' => 'SHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            156 => 
            array (
                'id' => 157,
                'is_kunyomi' => 0,
                'character_id' => 47,
                'pronunciation' => 'SU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            157 => 
            array (
                'id' => 170,
                'is_kunyomi' => 1,
                'character_id' => 51,
                'pronunciation' => 'YANE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            158 => 
            array (
                'id' => 171,
                'is_kunyomi' => 1,
                'character_id' => 51,
                'pronunciation' => 'IE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            159 => 
            array (
                'id' => 172,
                'is_kunyomi' => 0,
                'character_id' => 51,
                'pronunciation' => 'BEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            160 => 
            array (
                'id' => 173,
                'is_kunyomi' => 0,
                'character_id' => 51,
                'pronunciation' => 'MEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            161 => 
            array (
                'id' => 174,
                'is_kunyomi' => 1,
                'character_id' => 52,
                'pronunciation' => 'HAKARU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            162 => 
            array (
                'id' => 175,
                'is_kunyomi' => 1,
                'character_id' => 52,
                'pronunciation' => 'TOKI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            163 => 
            array (
                'id' => 176,
                'is_kunyomi' => 1,
                'character_id' => 52,
                'pronunciation' => 'KI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            164 => 
            array (
                'id' => 177,
                'is_kunyomi' => 0,
                'character_id' => 52,
                'pronunciation' => 'SUN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            165 => 
            array (
                'id' => 178,
                'is_kunyomi' => 0,
                'character_id' => 52,
                'pronunciation' => 'SON',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            166 => 
            array (
                'id' => 179,
                'is_kunyomi' => 1,
                'character_id' => 53,
                'pronunciation' => 'CHッISAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            167 => 
            array (
                'id' => 180,
                'is_kunyomi' => 1,
                'character_id' => 53,
                'pronunciation' => 'KO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            168 => 
            array (
                'id' => 181,
                'is_kunyomi' => 1,
                'character_id' => 53,
                'pronunciation' => 'O',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            169 => 
            array (
                'id' => 182,
                'is_kunyomi' => 0,
                'character_id' => 53,
                'pronunciation' => 'SHOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            170 => 
            array (
                'id' => 183,
                'is_kunyomi' => 1,
                'character_id' => 54,
                'pronunciation' => 'ASHINAE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            171 => 
            array (
                'id' => 184,
                'is_kunyomi' => 1,
                'character_id' => 54,
                'pronunciation' => 'SEMUSHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            172 => 
            array (
                'id' => 185,
                'is_kunyomi' => 0,
                'character_id' => 54,
                'pronunciation' => 'OU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            173 => 
            array (
                'id' => 186,
                'is_kunyomi' => 1,
                'character_id' => 55,
                'pronunciation' => 'MAGEASHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            174 => 
            array (
                'id' => 187,
                'is_kunyomi' => 0,
                'character_id' => 55,
                'pronunciation' => 'OU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            175 => 
            array (
                'id' => 188,
                'is_kunyomi' => 1,
                'character_id' => 56,
                'pronunciation' => 'SHIKABANE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            176 => 
            array (
                'id' => 189,
                'is_kunyomi' => 1,
                'character_id' => 56,
                'pronunciation' => 'KATASHIRO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            177 => 
            array (
                'id' => 190,
                'is_kunyomi' => 0,
                'character_id' => 56,
                'pronunciation' => 'SHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            178 => 
            array (
                'id' => 191,
                'is_kunyomi' => 1,
                'character_id' => 57,
                'pronunciation' => 'HIDARI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            179 => 
            array (
                'id' => 192,
                'is_kunyomi' => 1,
                'character_id' => 57,
                'pronunciation' => 'HIDARITE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            180 => 
            array (
                'id' => 193,
                'is_kunyomi' => 0,
                'character_id' => 57,
                'pronunciation' => 'SA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            181 => 
            array (
                'id' => 194,
                'is_kunyomi' => 1,
                'character_id' => 58,
                'pronunciation' => 'YAMA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            182 => 
            array (
                'id' => 195,
                'is_kunyomi' => 0,
                'character_id' => 58,
                'pronunciation' => 'SAN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            183 => 
            array (
                'id' => 196,
                'is_kunyomi' => 0,
                'character_id' => 58,
                'pronunciation' => 'SEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            184 => 
            array (
                'id' => 197,
                'is_kunyomi' => 1,
                'character_id' => 59,
                'pronunciation' => 'KAWA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            185 => 
            array (
                'id' => 198,
                'is_kunyomi' => 0,
                'character_id' => 59,
                'pronunciation' => 'SEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            186 => 
            array (
                'id' => 199,
                'is_kunyomi' => 1,
                'character_id' => 60,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            187 => 
            array (
                'id' => 200,
                'is_kunyomi' => 0,
                'character_id' => 60,
                'pronunciation' => 'KAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            188 => 
            array (
                'id' => 201,
                'is_kunyomi' => 0,
                'character_id' => 60,
                'pronunciation' => 'KE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            189 => 
            array (
                'id' => 202,
                'is_kunyomi' => 0,
                'character_id' => 60,
                'pronunciation' => 'KAN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            190 => 
            array (
                'id' => 203,
                'is_kunyomi' => 1,
                'character_id' => 61,
                'pronunciation' => 'KAWA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            191 => 
            array (
                'id' => 204,
                'is_kunyomi' => 0,
                'character_id' => 61,
                'pronunciation' => 'SEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            192 => 
            array (
                'id' => 205,
                'is_kunyomi' => 1,
                'character_id' => 62,
                'pronunciation' => 'TAKUMI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            193 => 
            array (
                'id' => 206,
                'is_kunyomi' => 1,
                'character_id' => 62,
                'pronunciation' => 'WAZA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            194 => 
            array (
                'id' => 207,
                'is_kunyomi' => 1,
                'character_id' => 62,
                'pronunciation' => 'TSUKASA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            195 => 
            array (
                'id' => 208,
                'is_kunyomi' => 0,
                'character_id' => 62,
                'pronunciation' => 'KOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            196 => 
            array (
                'id' => 209,
                'is_kunyomi' => 0,
                'character_id' => 62,
                'pronunciation' => 'KU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            197 => 
            array (
                'id' => 210,
                'is_kunyomi' => 1,
                'character_id' => 63,
                'pronunciation' => 'ONORE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            198 => 
            array (
                'id' => 211,
                'is_kunyomi' => 1,
                'character_id' => 63,
                'pronunciation' => 'TSUCHINOTO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            199 => 
            array (
                'id' => 212,
                'is_kunyomi' => 0,
                'character_id' => 63,
                'pronunciation' => 'KI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            200 => 
            array (
                'id' => 213,
                'is_kunyomi' => 0,
                'character_id' => 63,
                'pronunciation' => 'KO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            201 => 
            array (
                'id' => 214,
                'is_kunyomi' => 1,
                'character_id' => 64,
                'pronunciation' => 'SUDENI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            202 => 
            array (
                'id' => 215,
                'is_kunyomi' => 1,
                'character_id' => 64,
                'pronunciation' => 'YAMU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            203 => 
            array (
                'id' => 216,
                'is_kunyomi' => 1,
                'character_id' => 64,
                'pronunciation' => 'NOMI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            204 => 
            array (
                'id' => 217,
                'is_kunyomi' => 0,
                'character_id' => 64,
                'pronunciation' => 'I',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            205 => 
            array (
                'id' => 218,
                'is_kunyomi' => 1,
                'character_id' => 65,
                'pronunciation' => 'MI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            206 => 
            array (
                'id' => 219,
                'is_kunyomi' => 0,
                'character_id' => 65,
                'pronunciation' => 'SHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            207 => 
            array (
                'id' => 220,
                'is_kunyomi' => 1,
                'character_id' => 66,
                'pronunciation' => 'FUKIN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            208 => 
            array (
                'id' => 221,
                'is_kunyomi' => 1,
                'character_id' => 66,
                'pronunciation' => 'ッOI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            209 => 
            array (
                'id' => 222,
                'is_kunyomi' => 1,
                'character_id' => 66,
                'pronunciation' => 'HABA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            210 => 
            array (
                'id' => 223,
                'is_kunyomi' => 0,
                'character_id' => 66,
                'pronunciation' => 'KIN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            211 => 
            array (
                'id' => 224,
                'is_kunyomi' => 1,
                'character_id' => 67,
                'pronunciation' => 'HOSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            212 => 
            array (
                'id' => 225,
                'is_kunyomi' => 1,
                'character_id' => 67,
                'pronunciation' => 'HIRU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            213 => 
            array (
                'id' => 226,
                'is_kunyomi' => 1,
                'character_id' => 67,
                'pronunciation' => 'OKASU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            214 => 
            array (
                'id' => 227,
                'is_kunyomi' => 0,
                'character_id' => 67,
                'pronunciation' => 'KAN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            215 => 
            array (
                'id' => 228,
                'is_kunyomi' => 1,
                'character_id' => 68,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            216 => 
            array (
                'id' => 229,
                'is_kunyomi' => 0,
                'character_id' => 68,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            217 => 
            array (
                'id' => 230,
                'is_kunyomi' => 1,
                'character_id' => 69,
                'pronunciation' => 'CHッISAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            218 => 
            array (
                'id' => 231,
                'is_kunyomi' => 0,
                'character_id' => 69,
                'pronunciation' => 'YOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            219 => 
            array (
                'id' => 232,
                'is_kunyomi' => 1,
                'character_id' => 70,
                'pronunciation' => 'IE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            220 => 
            array (
                'id' => 233,
                'is_kunyomi' => 0,
                'character_id' => 70,
                'pronunciation' => 'GEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            221 => 
            array (
                'id' => 234,
                'is_kunyomi' => 1,
                'character_id' => 71,
                'pronunciation' => 'NOBASU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            222 => 
            array (
                'id' => 235,
                'is_kunyomi' => 0,
                'character_id' => 71,
                'pronunciation' => 'IN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            223 => 
            array (
                'id' => 236,
                'is_kunyomi' => 1,
                'character_id' => 72,
                'pronunciation' => 'SASAGERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            224 => 
            array (
                'id' => 237,
                'is_kunyomi' => 0,
                'character_id' => 72,
                'pronunciation' => 'KYOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            225 => 
            array (
                'id' => 238,
                'is_kunyomi' => 0,
                'character_id' => 72,
                'pronunciation' => 'KU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            226 => 
            array (
                'id' => 239,
                'is_kunyomi' => 1,
                'character_id' => 73,
                'pronunciation' => 'IGURUMI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            227 => 
            array (
                'id' => 240,
                'is_kunyomi' => 0,
                'character_id' => 73,
                'pronunciation' => 'YOKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            228 => 
            array (
                'id' => 241,
                'is_kunyomi' => 1,
                'character_id' => 74,
                'pronunciation' => 'YUMI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            229 => 
            array (
                'id' => 242,
                'is_kunyomi' => 0,
                'character_id' => 74,
                'pronunciation' => 'KYッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            230 => 
            array (
                'id' => 243,
                'is_kunyomi' => 1,
                'character_id' => 75,
                'pronunciation' => 'KEIGASHIRA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            231 => 
            array (
                'id' => 244,
                'is_kunyomi' => 0,
                'character_id' => 75,
                'pronunciation' => 'KEI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            232 => 
            array (
                'id' => 245,
                'is_kunyomi' => 1,
                'character_id' => 76,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            233 => 
            array (
                'id' => 246,
                'is_kunyomi' => 0,
                'character_id' => 76,
                'pronunciation' => 'KEI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            234 => 
            array (
                'id' => 247,
                'is_kunyomi' => 1,
                'character_id' => 77,
                'pronunciation' => 'KAMI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            235 => 
            array (
                'id' => 248,
                'is_kunyomi' => 0,
                'character_id' => 77,
                'pronunciation' => 'SAN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            236 => 
            array (
                'id' => 249,
                'is_kunyomi' => 0,
                'character_id' => 77,
                'pronunciation' => 'SEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            237 => 
            array (
                'id' => 250,
                'is_kunyomi' => 1,
                'character_id' => 78,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            238 => 
            array (
                'id' => 251,
                'is_kunyomi' => 0,
                'character_id' => 78,
                'pronunciation' => 'TEKI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            239 => 
            array (
                'id' => 252,
                'is_kunyomi' => 1,
                'character_id' => 79,
                'pronunciation' => 'KOKORO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            240 => 
            array (
                'id' => 253,
                'is_kunyomi' => 0,
                'character_id' => 79,
                'pronunciation' => 'SHIN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            241 => 
            array (
                'id' => 254,
                'is_kunyomi' => 1,
                'character_id' => 80,
                'pronunciation' => 'RITSUSHINBEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            242 => 
            array (
                'id' => 255,
                'is_kunyomi' => 0,
                'character_id' => 80,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            243 => 
            array (
                'id' => 256,
                'is_kunyomi' => 1,
                'character_id' => 81,
                'pronunciation' => 'HOKO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            244 => 
            array (
                'id' => 257,
                'is_kunyomi' => 0,
                'character_id' => 81,
                'pronunciation' => 'KA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            245 => 
            array (
                'id' => 258,
                'is_kunyomi' => 1,
                'character_id' => 82,
                'pronunciation' => 'TO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            246 => 
            array (
                'id' => 259,
                'is_kunyomi' => 1,
                'character_id' => 82,
                'pronunciation' => 'HE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            247 => 
            array (
                'id' => 260,
                'is_kunyomi' => 0,
                'character_id' => 82,
                'pronunciation' => 'KO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            248 => 
            array (
                'id' => 261,
                'is_kunyomi' => 1,
                'character_id' => 83,
                'pronunciation' => 'TO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            249 => 
            array (
                'id' => 262,
                'is_kunyomi' => 1,
                'character_id' => 83,
                'pronunciation' => 'HE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            250 => 
            array (
                'id' => 263,
                'is_kunyomi' => 0,
                'character_id' => 83,
                'pronunciation' => 'KO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            251 => 
            array (
                'id' => 264,
                'is_kunyomi' => 1,
                'character_id' => 84,
                'pronunciation' => 'TO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            252 => 
            array (
                'id' => 265,
                'is_kunyomi' => 1,
                'character_id' => 84,
                'pronunciation' => 'HE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            253 => 
            array (
                'id' => 266,
                'is_kunyomi' => 0,
                'character_id' => 84,
                'pronunciation' => 'KO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            254 => 
            array (
                'id' => 267,
                'is_kunyomi' => 1,
                'character_id' => 85,
                'pronunciation' => 'TE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            255 => 
            array (
                'id' => 268,
                'is_kunyomi' => 1,
                'character_id' => 85,
                'pronunciation' => 'TEZUKARA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            256 => 
            array (
                'id' => 269,
                'is_kunyomi' => 0,
                'character_id' => 85,
                'pronunciation' => 'SHU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            257 => 
            array (
                'id' => 270,
                'is_kunyomi' => 1,
                'character_id' => 86,
                'pronunciation' => 'TEHEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            258 => 
            array (
                'id' => 271,
                'is_kunyomi' => 0,
                'character_id' => 86,
                'pronunciation' => 'SHU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            259 => 
            array (
                'id' => 272,
                'is_kunyomi' => 1,
                'character_id' => 87,
                'pronunciation' => 'WAZUKANI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            260 => 
            array (
                'id' => 273,
                'is_kunyomi' => 1,
                'character_id' => 87,
                'pronunciation' => 'ZAE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            261 => 
            array (
                'id' => 274,
                'is_kunyomi' => 0,
                'character_id' => 87,
                'pronunciation' => 'SAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            262 => 
            array (
                'id' => 275,
                'is_kunyomi' => 0,
                'character_id' => 87,
                'pronunciation' => 'ZAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            263 => 
            array (
                'id' => 276,
                'is_kunyomi' => 1,
                'character_id' => 88,
                'pronunciation' => 'SASAERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            264 => 
            array (
                'id' => 277,
                'is_kunyomi' => 1,
                'character_id' => 88,
                'pronunciation' => 'EDA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            265 => 
            array (
                'id' => 278,
                'is_kunyomi' => 1,
                'character_id' => 88,
                'pronunciation' => 'TSUKAERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            266 => 
            array (
                'id' => 279,
                'is_kunyomi' => 0,
                'character_id' => 88,
                'pronunciation' => 'SHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            267 => 
            array (
                'id' => 280,
                'is_kunyomi' => 1,
                'character_id' => 89,
                'pronunciation' => 'UTSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            268 => 
            array (
                'id' => 281,
                'is_kunyomi' => 0,
                'character_id' => 89,
                'pronunciation' => 'HOKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            269 => 
            array (
                'id' => 282,
                'is_kunyomi' => 0,
                'character_id' => 89,
                'pronunciation' => 'HAKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            270 => 
            array (
                'id' => 283,
                'is_kunyomi' => 1,
                'character_id' => 90,
                'pronunciation' => 'UTSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            271 => 
            array (
                'id' => 284,
                'is_kunyomi' => 0,
                'character_id' => 90,
                'pronunciation' => 'BOKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            272 => 
            array (
                'id' => 285,
                'is_kunyomi' => 0,
                'character_id' => 90,
                'pronunciation' => 'HAKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            273 => 
            array (
                'id' => 286,
                'is_kunyomi' => 0,
                'character_id' => 90,
                'pronunciation' => 'HOKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            274 => 
            array (
                'id' => 287,
                'is_kunyomi' => 1,
                'character_id' => 91,
                'pronunciation' => 'FUMI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            275 => 
            array (
                'id' => 288,
                'is_kunyomi' => 1,
                'character_id' => 91,
                'pronunciation' => 'AYA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            276 => 
            array (
                'id' => 289,
                'is_kunyomi' => 1,
                'character_id' => 91,
                'pronunciation' => 'KAZARU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            277 => 
            array (
                'id' => 290,
                'is_kunyomi' => 0,
                'character_id' => 91,
                'pronunciation' => 'BUN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            278 => 
            array (
                'id' => 291,
                'is_kunyomi' => 0,
                'character_id' => 91,
                'pronunciation' => 'MON',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            279 => 
            array (
                'id' => 292,
                'is_kunyomi' => 1,
                'character_id' => 92,
                'pronunciation' => 'TOMASU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            280 => 
            array (
                'id' => 293,
                'is_kunyomi' => 1,
                'character_id' => 92,
                'pronunciation' => 'MASU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            281 => 
            array (
                'id' => 294,
                'is_kunyomi' => 1,
                'character_id' => 92,
                'pronunciation' => 'HISHAKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            282 => 
            array (
                'id' => 295,
                'is_kunyomi' => 0,
                'character_id' => 92,
                'pronunciation' => 'TO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            283 => 
            array (
                'id' => 296,
                'is_kunyomi' => 0,
                'character_id' => 92,
                'pronunciation' => 'TOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            284 => 
            array (
                'id' => 297,
                'is_kunyomi' => 1,
                'character_id' => 93,
                'pronunciation' => 'ONO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            285 => 
            array (
                'id' => 298,
                'is_kunyomi' => 0,
                'character_id' => 93,
                'pronunciation' => 'KIN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            286 => 
            array (
                'id' => 299,
                'is_kunyomi' => 1,
                'character_id' => 94,
                'pronunciation' => 'KATA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            287 => 
            array (
                'id' => 300,
                'is_kunyomi' => 1,
                'character_id' => 94,
                'pronunciation' => 'NARABERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            288 => 
            array (
                'id' => 301,
                'is_kunyomi' => 1,
                'character_id' => 94,
                'pronunciation' => 'KURABERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            289 => 
            array (
                'id' => 302,
                'is_kunyomi' => 0,
                'character_id' => 94,
                'pronunciation' => 'HOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            290 => 
            array (
                'id' => 303,
                'is_kunyomi' => 1,
                'character_id' => 95,
                'pronunciation' => 'NAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            291 => 
            array (
                'id' => 304,
                'is_kunyomi' => 0,
                'character_id' => 95,
                'pronunciation' => 'BU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            292 => 
            array (
                'id' => 305,
                'is_kunyomi' => 0,
                'character_id' => 95,
                'pronunciation' => 'MU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            293 => 
            array (
                'id' => 306,
                'is_kunyomi' => 1,
                'character_id' => 96,
                'pronunciation' => 'HI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            294 => 
            array (
                'id' => 307,
                'is_kunyomi' => 1,
                'character_id' => 96,
                'pronunciation' => 'KA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            295 => 
            array (
                'id' => 308,
                'is_kunyomi' => 1,
                'character_id' => 96,
                'pronunciation' => 'HIBI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            296 => 
            array (
                'id' => 309,
                'is_kunyomi' => 0,
                'character_id' => 96,
                'pronunciation' => 'NICHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            297 => 
            array (
                'id' => 310,
                'is_kunyomi' => 0,
                'character_id' => 96,
                'pronunciation' => 'JITSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            298 => 
            array (
                'id' => 311,
                'is_kunyomi' => 1,
                'character_id' => 97,
                'pronunciation' => 'IU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            299 => 
            array (
                'id' => 312,
                'is_kunyomi' => 1,
                'character_id' => 97,
                'pronunciation' => 'IWAKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            300 => 
            array (
                'id' => 313,
                'is_kunyomi' => 1,
                'character_id' => 97,
                'pronunciation' => 'NOTAMAWAKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            301 => 
            array (
                'id' => 314,
                'is_kunyomi' => 0,
                'character_id' => 97,
                'pronunciation' => 'ETSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            302 => 
            array (
                'id' => 315,
                'is_kunyomi' => 1,
                'character_id' => 98,
                'pronunciation' => 'TSUKI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            303 => 
            array (
                'id' => 316,
                'is_kunyomi' => 0,
                'character_id' => 98,
                'pronunciation' => 'GETSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            304 => 
            array (
                'id' => 317,
                'is_kunyomi' => 0,
                'character_id' => 98,
                'pronunciation' => 'GATSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            305 => 
            array (
                'id' => 318,
                'is_kunyomi' => 1,
                'character_id' => 99,
                'pronunciation' => 'KI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            306 => 
            array (
                'id' => 319,
                'is_kunyomi' => 0,
                'character_id' => 99,
                'pronunciation' => 'BOKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            307 => 
            array (
                'id' => 320,
                'is_kunyomi' => 0,
                'character_id' => 99,
                'pronunciation' => 'MOKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            308 => 
            array (
                'id' => 321,
                'is_kunyomi' => 1,
                'character_id' => 100,
                'pronunciation' => 'KAKERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            309 => 
            array (
                'id' => 322,
                'is_kunyomi' => 1,
                'character_id' => 100,
                'pronunciation' => 'AKUBI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            310 => 
            array (
                'id' => 323,
                'is_kunyomi' => 0,
                'character_id' => 100,
                'pronunciation' => 'KETSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            311 => 
            array (
                'id' => 324,
                'is_kunyomi' => 1,
                'character_id' => 101,
                'pronunciation' => 'TOMARU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            312 => 
            array (
                'id' => 325,
                'is_kunyomi' => 1,
                'character_id' => 101,
                'pronunciation' => 'ASHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            313 => 
            array (
                'id' => 326,
                'is_kunyomi' => 1,
                'character_id' => 101,
                'pronunciation' => 'TOMERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            314 => 
            array (
                'id' => 327,
                'is_kunyomi' => 0,
                'character_id' => 101,
                'pronunciation' => 'SHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            315 => 
            array (
                'id' => 328,
                'is_kunyomi' => 1,
                'character_id' => 102,
                'pronunciation' => 'WARUI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            316 => 
            array (
                'id' => 329,
                'is_kunyomi' => 1,
                'character_id' => 102,
                'pronunciation' => 'KABANEHEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            317 => 
            array (
                'id' => 330,
                'is_kunyomi' => 0,
                'character_id' => 102,
                'pronunciation' => 'GATSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            318 => 
            array (
                'id' => 331,
                'is_kunyomi' => 0,
                'character_id' => 102,
                'pronunciation' => 'ATSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            319 => 
            array (
                'id' => 332,
                'is_kunyomi' => 0,
                'character_id' => 102,
                'pronunciation' => 'GACHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            320 => 
            array (
                'id' => 333,
                'is_kunyomi' => 1,
                'character_id' => 103,
                'pronunciation' => 'HOKO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            321 => 
            array (
                'id' => 334,
                'is_kunyomi' => 0,
                'character_id' => 103,
                'pronunciation' => 'SHU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            322 => 
            array (
                'id' => 335,
                'is_kunyomi' => 1,
                'character_id' => 104,
                'pronunciation' => 'NAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            323 => 
            array (
                'id' => 336,
                'is_kunyomi' => 1,
                'character_id' => 104,
                'pronunciation' => 'NAKARE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            324 => 
            array (
                'id' => 337,
                'is_kunyomi' => 0,
                'character_id' => 104,
                'pronunciation' => 'BU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            325 => 
            array (
                'id' => 338,
                'is_kunyomi' => 0,
                'character_id' => 104,
                'pronunciation' => 'MU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            326 => 
            array (
                'id' => 339,
                'is_kunyomi' => 1,
                'character_id' => 105,
                'pronunciation' => 'TSURANUKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            327 => 
            array (
                'id' => 340,
                'is_kunyomi' => 0,
                'character_id' => 105,
                'pronunciation' => 'KAN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            328 => 
            array (
                'id' => 341,
                'is_kunyomi' => 1,
                'character_id' => 106,
                'pronunciation' => 'KURABERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            329 => 
            array (
                'id' => 342,
                'is_kunyomi' => 1,
                'character_id' => 106,
                'pronunciation' => 'NARABU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            330 => 
            array (
                'id' => 343,
                'is_kunyomi' => 1,
                'character_id' => 106,
                'pronunciation' => 'NARABERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            331 => 
            array (
                'id' => 344,
                'is_kunyomi' => 0,
                'character_id' => 106,
                'pronunciation' => 'HI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            332 => 
            array (
                'id' => 345,
                'is_kunyomi' => 1,
                'character_id' => 107,
                'pronunciation' => 'KE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            333 => 
            array (
                'id' => 346,
                'is_kunyomi' => 0,
                'character_id' => 107,
                'pronunciation' => 'MOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            334 => 
            array (
                'id' => 347,
                'is_kunyomi' => 0,
                'character_id' => 107,
                'pronunciation' => 'BOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            335 => 
            array (
                'id' => 348,
                'is_kunyomi' => 1,
                'character_id' => 108,
                'pronunciation' => 'UJI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            336 => 
            array (
                'id' => 349,
                'is_kunyomi' => 0,
                'character_id' => 108,
                'pronunciation' => 'SHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            337 => 
            array (
                'id' => 350,
                'is_kunyomi' => 1,
                'character_id' => 109,
                'pronunciation' => 'IKI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            338 => 
            array (
                'id' => 351,
                'is_kunyomi' => 0,
                'character_id' => 109,
                'pronunciation' => 'KI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            339 => 
            array (
                'id' => 352,
                'is_kunyomi' => 0,
                'character_id' => 109,
                'pronunciation' => 'KE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            340 => 
            array (
                'id' => 353,
                'is_kunyomi' => 1,
                'character_id' => 110,
                'pronunciation' => 'MIZU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            341 => 
            array (
                'id' => 354,
                'is_kunyomi' => 0,
                'character_id' => 110,
                'pronunciation' => 'SUI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            342 => 
            array (
                'id' => 355,
                'is_kunyomi' => 1,
                'character_id' => 111,
                'pronunciation' => 'SANZUI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            343 => 
            array (
                'id' => 356,
                'is_kunyomi' => 0,
                'character_id' => 111,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            344 => 
            array (
                'id' => 357,
                'is_kunyomi' => 1,
                'character_id' => 112,
                'pronunciation' => 'HI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            345 => 
            array (
                'id' => 358,
                'is_kunyomi' => 1,
                'character_id' => 112,
                'pronunciation' => 'YAKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            346 => 
            array (
                'id' => 359,
                'is_kunyomi' => 0,
                'character_id' => 112,
                'pronunciation' => 'KA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            347 => 
            array (
                'id' => 360,
                'is_kunyomi' => 0,
                'character_id' => 112,
                'pronunciation' => 'KO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            348 => 
            array (
                'id' => 361,
                'is_kunyomi' => 1,
                'character_id' => 113,
                'pronunciation' => 'RETSUKA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            349 => 
            array (
                'id' => 362,
                'is_kunyomi' => 0,
                'character_id' => 113,
                'pronunciation' => 'HYOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            350 => 
            array (
                'id' => 363,
                'is_kunyomi' => 0,
                'character_id' => 113,
                'pronunciation' => 'KA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            351 => 
            array (
                'id' => 364,
                'is_kunyomi' => 1,
                'character_id' => 114,
                'pronunciation' => 'TSUME',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            352 => 
            array (
                'id' => 365,
                'is_kunyomi' => 0,
                'character_id' => 114,
                'pronunciation' => 'SOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            353 => 
            array (
                'id' => 366,
                'is_kunyomi' => 1,
                'character_id' => 115,
                'pronunciation' => 'TSUMEKANMURI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            354 => 
            array (
                'id' => 367,
                'is_kunyomi' => 1,
                'character_id' => 115,
                'pronunciation' => 'TSUMEGASHIRA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            355 => 
            array (
                'id' => 368,
                'is_kunyomi' => 0,
                'character_id' => 115,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            356 => 
            array (
                'id' => 369,
                'is_kunyomi' => 1,
                'character_id' => 116,
                'pronunciation' => 'CHICHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            357 => 
            array (
                'id' => 370,
                'is_kunyomi' => 0,
                'character_id' => 116,
                'pronunciation' => 'FU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            358 => 
            array (
                'id' => 371,
                'is_kunyomi' => 0,
                'character_id' => 116,
                'pronunciation' => 'HO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            359 => 
            array (
                'id' => 372,
                'is_kunyomi' => 1,
                'character_id' => 117,
                'pronunciation' => 'MAJIWARU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            360 => 
            array (
                'id' => 373,
                'is_kunyomi' => 0,
                'character_id' => 117,
                'pronunciation' => 'KOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            361 => 
            array (
                'id' => 374,
                'is_kunyomi' => 1,
                'character_id' => 118,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            362 => 
            array (
                'id' => 375,
                'is_kunyomi' => 0,
                'character_id' => 118,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            363 => 
            array (
                'id' => 376,
                'is_kunyomi' => 1,
                'character_id' => 119,
                'pronunciation' => 'DAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            364 => 
            array (
                'id' => 377,
                'is_kunyomi' => 1,
                'character_id' => 119,
                'pronunciation' => 'KIGIRE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            365 => 
            array (
                'id' => 378,
                'is_kunyomi' => 0,
                'character_id' => 119,
                'pronunciation' => 'SHOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            366 => 
            array (
                'id' => 379,
                'is_kunyomi' => 1,
                'character_id' => 120,
                'pronunciation' => 'KATA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            367 => 
            array (
                'id' => 380,
                'is_kunyomi' => 1,
                'character_id' => 120,
                'pronunciation' => 'KIRE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            368 => 
            array (
                'id' => 381,
                'is_kunyomi' => 1,
                'character_id' => 120,
                'pronunciation' => 'PENSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            369 => 
            array (
                'id' => 382,
                'is_kunyomi' => 0,
                'character_id' => 120,
                'pronunciation' => 'HEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            370 => 
            array (
                'id' => 383,
                'is_kunyomi' => 1,
                'character_id' => 121,
                'pronunciation' => 'KIBA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            371 => 
            array (
                'id' => 384,
                'is_kunyomi' => 1,
                'character_id' => 121,
                'pronunciation' => 'HA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            372 => 
            array (
                'id' => 385,
                'is_kunyomi' => 0,
                'character_id' => 121,
                'pronunciation' => 'GA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            373 => 
            array (
                'id' => 386,
                'is_kunyomi' => 0,
                'character_id' => 121,
                'pronunciation' => 'GE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            374 => 
            array (
                'id' => 387,
                'is_kunyomi' => 1,
                'character_id' => 122,
                'pronunciation' => 'USHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            375 => 
            array (
                'id' => 388,
                'is_kunyomi' => 0,
                'character_id' => 122,
                'pronunciation' => 'GYッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            376 => 
            array (
                'id' => 389,
                'is_kunyomi' => 1,
                'character_id' => 123,
                'pronunciation' => 'USHIHEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            377 => 
            array (
                'id' => 390,
                'is_kunyomi' => 0,
                'character_id' => 123,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            378 => 
            array (
                'id' => 391,
                'is_kunyomi' => 1,
                'character_id' => 124,
                'pronunciation' => 'INU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            379 => 
            array (
                'id' => 392,
                'is_kunyomi' => 0,
                'character_id' => 124,
                'pronunciation' => 'KEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            380 => 
            array (
                'id' => 393,
                'is_kunyomi' => 1,
                'character_id' => 125,
                'pronunciation' => 'KEMONOHEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            381 => 
            array (
                'id' => 394,
                'is_kunyomi' => 0,
                'character_id' => 125,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            382 => 
            array (
                'id' => 395,
                'is_kunyomi' => 1,
                'character_id' => 126,
                'pronunciation' => 'KURO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            383 => 
            array (
                'id' => 396,
                'is_kunyomi' => 0,
                'character_id' => 126,
                'pronunciation' => 'GEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            384 => 
            array (
                'id' => 397,
                'is_kunyomi' => 0,
                'character_id' => 126,
                'pronunciation' => 'KEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            385 => 
            array (
                'id' => 398,
                'is_kunyomi' => 1,
                'character_id' => 127,
                'pronunciation' => 'TAMA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            386 => 
            array (
                'id' => 399,
                'is_kunyomi' => 0,
                'character_id' => 127,
                'pronunciation' => 'GYOKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            387 => 
            array (
                'id' => 400,
                'is_kunyomi' => 0,
                'character_id' => 127,
                'pronunciation' => 'GOKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            388 => 
            array (
                'id' => 401,
                'is_kunyomi' => 1,
                'character_id' => 128,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            389 => 
            array (
                'id' => 402,
                'is_kunyomi' => 0,
                'character_id' => 128,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            390 => 
            array (
                'id' => 403,
                'is_kunyomi' => 1,
                'character_id' => 129,
                'pronunciation' => 'KIMI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            391 => 
            array (
                'id' => 404,
                'is_kunyomi' => 0,
                'character_id' => 129,
                'pronunciation' => 'OU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            392 => 
            array (
                'id' => 405,
                'is_kunyomi' => 1,
                'character_id' => 130,
                'pronunciation' => 'URI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            393 => 
            array (
                'id' => 406,
                'is_kunyomi' => 0,
                'character_id' => 130,
                'pronunciation' => 'KA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            394 => 
            array (
                'id' => 407,
                'is_kunyomi' => 1,
                'character_id' => 131,
                'pronunciation' => 'KAWARA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            395 => 
            array (
                'id' => 408,
                'is_kunyomi' => 1,
                'character_id' => 131,
                'pronunciation' => 'GURAMU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            396 => 
            array (
                'id' => 409,
                'is_kunyomi' => 0,
                'character_id' => 131,
                'pronunciation' => 'GA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            397 => 
            array (
                'id' => 410,
                'is_kunyomi' => 1,
                'character_id' => 132,
                'pronunciation' => 'AMAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            398 => 
            array (
                'id' => 411,
                'is_kunyomi' => 1,
                'character_id' => 132,
                'pronunciation' => 'UMAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:53',
                'updated_at' => '2017-10-21 14:33:53',
            ),
            399 => 
            array (
                'id' => 412,
                'is_kunyomi' => 1,
                'character_id' => 132,
                'pronunciation' => 'AMANJIRU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            400 => 
            array (
                'id' => 413,
                'is_kunyomi' => 0,
                'character_id' => 132,
                'pronunciation' => 'KAN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            401 => 
            array (
                'id' => 414,
                'is_kunyomi' => 1,
                'character_id' => 133,
                'pronunciation' => 'HAERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            402 => 
            array (
                'id' => 415,
                'is_kunyomi' => 1,
                'character_id' => 133,
                'pronunciation' => 'OU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            403 => 
            array (
                'id' => 416,
                'is_kunyomi' => 1,
                'character_id' => 133,
                'pronunciation' => 'UMARERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            404 => 
            array (
                'id' => 417,
                'is_kunyomi' => 0,
                'character_id' => 133,
                'pronunciation' => 'SEI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            405 => 
            array (
                'id' => 418,
                'is_kunyomi' => 0,
                'character_id' => 133,
                'pronunciation' => 'SHOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            406 => 
            array (
                'id' => 419,
                'is_kunyomi' => 1,
                'character_id' => 134,
                'pronunciation' => 'MOCHッIRU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            407 => 
            array (
                'id' => 420,
                'is_kunyomi' => 1,
                'character_id' => 134,
                'pronunciation' => 'HATARAKI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            408 => 
            array (
                'id' => 421,
                'is_kunyomi' => 1,
                'character_id' => 134,
                'pronunciation' => 'MOッTE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            409 => 
            array (
                'id' => 422,
                'is_kunyomi' => 0,
                'character_id' => 134,
                'pronunciation' => 'YOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            410 => 
            array (
                'id' => 423,
                'is_kunyomi' => 1,
                'character_id' => 135,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            411 => 
            array (
                'id' => 424,
                'is_kunyomi' => 0,
                'character_id' => 135,
                'pronunciation' => 'SHUTSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            412 => 
            array (
                'id' => 425,
                'is_kunyomi' => 1,
                'character_id' => 136,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            413 => 
            array (
                'id' => 426,
                'is_kunyomi' => 0,
                'character_id' => 136,
                'pronunciation' => 'OU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            414 => 
            array (
                'id' => 427,
                'is_kunyomi' => 1,
                'character_id' => 137,
                'pronunciation' => 'TA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            415 => 
            array (
                'id' => 428,
                'is_kunyomi' => 1,
                'character_id' => 137,
                'pronunciation' => 'KARI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            416 => 
            array (
                'id' => 429,
                'is_kunyomi' => 0,
                'character_id' => 137,
                'pronunciation' => 'DEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            417 => 
            array (
                'id' => 430,
                'is_kunyomi' => 0,
                'character_id' => 137,
                'pronunciation' => 'TEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            418 => 
            array (
                'id' => 431,
                'is_kunyomi' => 1,
                'character_id' => 138,
                'pronunciation' => 'YOSHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            419 => 
            array (
                'id' => 432,
                'is_kunyomi' => 1,
                'character_id' => 138,
                'pronunciation' => 'YORU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            420 => 
            array (
                'id' => 433,
                'is_kunyomi' => 1,
                'character_id' => 138,
                'pronunciation' => 'YORI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            421 => 
            array (
                'id' => 434,
                'is_kunyomi' => 0,
                'character_id' => 138,
                'pronunciation' => 'YッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            422 => 
            array (
                'id' => 435,
                'is_kunyomi' => 0,
                'character_id' => 138,
                'pronunciation' => 'YU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            423 => 
            array (
                'id' => 436,
                'is_kunyomi' => 0,
                'character_id' => 138,
                'pronunciation' => 'YUI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            424 => 
            array (
                'id' => 437,
                'is_kunyomi' => 1,
                'character_id' => 139,
                'pronunciation' => 'YOROI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            425 => 
            array (
                'id' => 438,
                'is_kunyomi' => 1,
                'character_id' => 139,
                'pronunciation' => 'TSUME',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            426 => 
            array (
                'id' => 439,
                'is_kunyomi' => 1,
                'character_id' => 139,
                'pronunciation' => 'KINOE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            427 => 
            array (
                'id' => 440,
                'is_kunyomi' => 0,
                'character_id' => 139,
                'pronunciation' => 'KOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            428 => 
            array (
                'id' => 441,
                'is_kunyomi' => 0,
                'character_id' => 139,
                'pronunciation' => 'KAN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            429 => 
            array (
                'id' => 442,
                'is_kunyomi' => 1,
                'character_id' => 140,
                'pronunciation' => 'MOUSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            430 => 
            array (
                'id' => 443,
                'is_kunyomi' => 1,
                'character_id' => 140,
                'pronunciation' => 'NOBIRU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            431 => 
            array (
                'id' => 444,
                'is_kunyomi' => 1,
                'character_id' => 140,
                'pronunciation' => 'SARU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            432 => 
            array (
                'id' => 445,
                'is_kunyomi' => 0,
                'character_id' => 140,
                'pronunciation' => 'SHIN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            433 => 
            array (
                'id' => 446,
                'is_kunyomi' => 1,
                'character_id' => 141,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            434 => 
            array (
                'id' => 447,
                'is_kunyomi' => 0,
                'character_id' => 141,
                'pronunciation' => 'SOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            435 => 
            array (
                'id' => 448,
                'is_kunyomi' => 1,
                'character_id' => 142,
                'pronunciation' => 'ASHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            436 => 
            array (
                'id' => 449,
                'is_kunyomi' => 1,
                'character_id' => 142,
                'pronunciation' => 'HIKI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            437 => 
            array (
                'id' => 450,
                'is_kunyomi' => 0,
                'character_id' => 142,
                'pronunciation' => 'SO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            438 => 
            array (
                'id' => 451,
                'is_kunyomi' => 0,
                'character_id' => 142,
                'pronunciation' => 'SHO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            439 => 
            array (
                'id' => 452,
                'is_kunyomi' => 0,
                'character_id' => 142,
                'pronunciation' => 'GA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            440 => 
            array (
                'id' => 453,
                'is_kunyomi' => 1,
                'character_id' => 143,
                'pronunciation' => 'YAMAIDARE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            441 => 
            array (
                'id' => 454,
                'is_kunyomi' => 1,
                'character_id' => 143,
                'pronunciation' => 'YAMU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            442 => 
            array (
                'id' => 455,
                'is_kunyomi' => 0,
                'character_id' => 143,
                'pronunciation' => 'DAKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            443 => 
            array (
                'id' => 456,
                'is_kunyomi' => 0,
                'character_id' => 143,
                'pronunciation' => 'NYAKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            444 => 
            array (
                'id' => 457,
                'is_kunyomi' => 0,
                'character_id' => 143,
                'pronunciation' => 'SOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            445 => 
            array (
                'id' => 458,
                'is_kunyomi' => 0,
                'character_id' => 143,
                'pronunciation' => 'JOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            446 => 
            array (
                'id' => 459,
                'is_kunyomi' => 0,
                'character_id' => 143,
                'pronunciation' => 'SHITSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            447 => 
            array (
                'id' => 460,
                'is_kunyomi' => 1,
                'character_id' => 144,
                'pronunciation' => 'SOMUKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            448 => 
            array (
                'id' => 461,
                'is_kunyomi' => 0,
                'character_id' => 144,
                'pronunciation' => 'HATSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            449 => 
            array (
                'id' => 462,
                'is_kunyomi' => 0,
                'character_id' => 144,
                'pronunciation' => 'HACHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            450 => 
            array (
                'id' => 463,
                'is_kunyomi' => 1,
                'character_id' => 145,
                'pronunciation' => 'SHIRO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            451 => 
            array (
                'id' => 464,
                'is_kunyomi' => 1,
                'character_id' => 145,
                'pronunciation' => 'SHIROI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            452 => 
            array (
                'id' => 465,
                'is_kunyomi' => 1,
                'character_id' => 145,
                'pronunciation' => 'MOUSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            453 => 
            array (
                'id' => 466,
                'is_kunyomi' => 0,
                'character_id' => 145,
                'pronunciation' => 'HAKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            454 => 
            array (
                'id' => 467,
                'is_kunyomi' => 0,
                'character_id' => 145,
                'pronunciation' => 'BYAKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            455 => 
            array (
                'id' => 468,
                'is_kunyomi' => 1,
                'character_id' => 146,
                'pronunciation' => 'KAWA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            456 => 
            array (
                'id' => 469,
                'is_kunyomi' => 0,
                'character_id' => 146,
                'pronunciation' => 'HI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            457 => 
            array (
                'id' => 470,
                'is_kunyomi' => 1,
                'character_id' => 147,
                'pronunciation' => 'SARA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            458 => 
            array (
                'id' => 471,
                'is_kunyomi' => 0,
                'character_id' => 147,
                'pronunciation' => 'BAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            459 => 
            array (
                'id' => 472,
                'is_kunyomi' => 0,
                'character_id' => 147,
                'pronunciation' => 'MYOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            460 => 
            array (
                'id' => 473,
                'is_kunyomi' => 1,
                'character_id' => 148,
                'pronunciation' => 'ME',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            461 => 
            array (
                'id' => 474,
                'is_kunyomi' => 1,
                'character_id' => 148,
                'pronunciation' => 'MANAKO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            462 => 
            array (
                'id' => 475,
                'is_kunyomi' => 1,
                'character_id' => 148,
                'pronunciation' => 'SAKAN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            463 => 
            array (
                'id' => 476,
                'is_kunyomi' => 0,
                'character_id' => 148,
                'pronunciation' => 'MOKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            464 => 
            array (
                'id' => 477,
                'is_kunyomi' => 0,
                'character_id' => 148,
                'pronunciation' => 'BOKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            465 => 
            array (
                'id' => 478,
                'is_kunyomi' => 1,
                'character_id' => 149,
                'pronunciation' => 'HOKO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            466 => 
            array (
                'id' => 479,
                'is_kunyomi' => 0,
                'character_id' => 149,
                'pronunciation' => 'MU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            467 => 
            array (
                'id' => 480,
                'is_kunyomi' => 0,
                'character_id' => 149,
                'pronunciation' => 'BOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            468 => 
            array (
                'id' => 481,
                'is_kunyomi' => 1,
                'character_id' => 150,
                'pronunciation' => 'YA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            469 => 
            array (
                'id' => 482,
                'is_kunyomi' => 1,
                'character_id' => 150,
                'pronunciation' => 'CHIKAU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            470 => 
            array (
                'id' => 483,
                'is_kunyomi' => 1,
                'character_id' => 150,
                'pronunciation' => 'TSURANERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            471 => 
            array (
                'id' => 484,
                'is_kunyomi' => 0,
                'character_id' => 150,
                'pronunciation' => 'SHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            472 => 
            array (
                'id' => 485,
                'is_kunyomi' => 1,
                'character_id' => 151,
                'pronunciation' => 'ISHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            473 => 
            array (
                'id' => 486,
                'is_kunyomi' => 0,
                'character_id' => 151,
                'pronunciation' => 'SHAKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            474 => 
            array (
                'id' => 487,
                'is_kunyomi' => 0,
                'character_id' => 151,
                'pronunciation' => 'SEKI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            475 => 
            array (
                'id' => 488,
                'is_kunyomi' => 0,
                'character_id' => 151,
                'pronunciation' => 'KOKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            476 => 
            array (
                'id' => 489,
                'is_kunyomi' => 1,
                'character_id' => 152,
                'pronunciation' => 'SHIMESU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            477 => 
            array (
                'id' => 490,
                'is_kunyomi' => 1,
                'character_id' => 152,
                'pronunciation' => 'SHIMESHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            478 => 
            array (
                'id' => 491,
                'is_kunyomi' => 0,
                'character_id' => 152,
                'pronunciation' => 'SHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            479 => 
            array (
                'id' => 492,
                'is_kunyomi' => 0,
                'character_id' => 152,
                'pronunciation' => 'JI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            480 => 
            array (
                'id' => 493,
                'is_kunyomi' => 0,
                'character_id' => 152,
                'pronunciation' => 'KI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            481 => 
            array (
                'id' => 494,
                'is_kunyomi' => 1,
                'character_id' => 153,
                'pronunciation' => 'SHIMESUHEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            482 => 
            array (
                'id' => 495,
                'is_kunyomi' => 0,
                'character_id' => 153,
                'pronunciation' => 'SHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            483 => 
            array (
                'id' => 496,
                'is_kunyomi' => 1,
                'character_id' => 154,
                'pronunciation' => 'ASHIATO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            484 => 
            array (
                'id' => 497,
                'is_kunyomi' => 0,
                'character_id' => 154,
                'pronunciation' => 'JッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            485 => 
            array (
                'id' => 498,
                'is_kunyomi' => 0,
                'character_id' => 154,
                'pronunciation' => 'NYU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            486 => 
            array (
                'id' => 499,
                'is_kunyomi' => 1,
                'character_id' => 155,
                'pronunciation' => 'INE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            487 => 
            array (
                'id' => 500,
                'is_kunyomi' => 1,
                'character_id' => 155,
                'pronunciation' => 'NOGI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            488 => 
            array (
                'id' => 501,
                'is_kunyomi' => 0,
                'character_id' => 155,
                'pronunciation' => 'KA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            489 => 
            array (
                'id' => 502,
                'is_kunyomi' => 1,
                'character_id' => 156,
                'pronunciation' => 'ANA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            490 => 
            array (
                'id' => 503,
                'is_kunyomi' => 0,
                'character_id' => 156,
                'pronunciation' => 'KETSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            491 => 
            array (
                'id' => 504,
                'is_kunyomi' => 1,
                'character_id' => 157,
                'pronunciation' => 'TATSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            492 => 
            array (
                'id' => 505,
                'is_kunyomi' => 1,
                'character_id' => 157,
                'pronunciation' => 'TATERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            493 => 
            array (
                'id' => 506,
                'is_kunyomi' => 1,
                'character_id' => 157,
                'pronunciation' => 'TACHIDOKORO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            494 => 
            array (
                'id' => 507,
                'is_kunyomi' => 0,
                'character_id' => 157,
                'pronunciation' => 'RITSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            495 => 
            array (
                'id' => 508,
                'is_kunyomi' => 0,
                'character_id' => 157,
                'pronunciation' => 'RYッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            496 => 
            array (
                'id' => 509,
                'is_kunyomi' => 1,
                'character_id' => 158,
                'pronunciation' => 'TAKE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            497 => 
            array (
                'id' => 510,
                'is_kunyomi' => 0,
                'character_id' => 158,
                'pronunciation' => 'CHIKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            498 => 
            array (
                'id' => 511,
                'is_kunyomi' => 1,
                'character_id' => 159,
                'pronunciation' => 'KOME',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            499 => 
            array (
                'id' => 512,
                'is_kunyomi' => 1,
                'character_id' => 159,
                'pronunciation' => 'YONE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
        ));
        \DB::table('pronunciations')->insert(array (
            0 => 
            array (
                'id' => 513,
                'is_kunyomi' => 1,
                'character_id' => 159,
                'pronunciation' => 'MッETORU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            1 => 
            array (
                'id' => 514,
                'is_kunyomi' => 0,
                'character_id' => 159,
                'pronunciation' => 'BEI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            2 => 
            array (
                'id' => 515,
                'is_kunyomi' => 0,
                'character_id' => 159,
                'pronunciation' => 'MAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            3 => 
            array (
                'id' => 516,
                'is_kunyomi' => 0,
                'character_id' => 159,
                'pronunciation' => 'ME',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            4 => 
            array (
                'id' => 517,
                'is_kunyomi' => 1,
                'character_id' => 160,
                'pronunciation' => 'ITO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            5 => 
            array (
                'id' => 518,
                'is_kunyomi' => 0,
                'character_id' => 160,
                'pronunciation' => 'SHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            6 => 
            array (
                'id' => 519,
                'is_kunyomi' => 0,
                'character_id' => 160,
                'pronunciation' => 'BEKI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            7 => 
            array (
                'id' => 520,
                'is_kunyomi' => 1,
                'character_id' => 161,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            8 => 
            array (
                'id' => 521,
                'is_kunyomi' => 0,
                'character_id' => 161,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            9 => 
            array (
                'id' => 522,
                'is_kunyomi' => 1,
                'character_id' => 162,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            10 => 
            array (
                'id' => 523,
                'is_kunyomi' => 0,
                'character_id' => 162,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            11 => 
            array (
                'id' => 524,
                'is_kunyomi' => 1,
                'character_id' => 163,
                'pronunciation' => 'HOTOGI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            12 => 
            array (
                'id' => 525,
                'is_kunyomi' => 0,
                'character_id' => 163,
                'pronunciation' => 'KAN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            13 => 
            array (
                'id' => 526,
                'is_kunyomi' => 0,
                'character_id' => 163,
                'pronunciation' => 'FU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            14 => 
            array (
                'id' => 527,
                'is_kunyomi' => 1,
                'character_id' => 164,
                'pronunciation' => 'AMI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            15 => 
            array (
                'id' => 528,
                'is_kunyomi' => 0,
                'character_id' => 164,
                'pronunciation' => 'BOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            16 => 
            array (
                'id' => 529,
                'is_kunyomi' => 0,
                'character_id' => 164,
                'pronunciation' => 'MOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            17 => 
            array (
                'id' => 530,
                'is_kunyomi' => 1,
                'character_id' => 165,
                'pronunciation' => 'YONKASHIRA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            18 => 
            array (
                'id' => 531,
                'is_kunyomi' => 1,
                'character_id' => 165,
                'pronunciation' => 'YOKOME',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            19 => 
            array (
                'id' => 532,
                'is_kunyomi' => 0,
                'character_id' => 165,
                'pronunciation' => 'MOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            20 => 
            array (
                'id' => 533,
                'is_kunyomi' => 0,
                'character_id' => 165,
                'pronunciation' => 'BOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            21 => 
            array (
                'id' => 534,
                'is_kunyomi' => 1,
                'character_id' => 166,
                'pronunciation' => 'YONKASHIRA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            22 => 
            array (
                'id' => 535,
                'is_kunyomi' => 1,
                'character_id' => 166,
                'pronunciation' => 'YOKOME',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            23 => 
            array (
                'id' => 536,
                'is_kunyomi' => 0,
                'character_id' => 166,
                'pronunciation' => 'MOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            24 => 
            array (
                'id' => 537,
                'is_kunyomi' => 1,
                'character_id' => 167,
                'pronunciation' => 'HITSUJI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            25 => 
            array (
                'id' => 538,
                'is_kunyomi' => 0,
                'character_id' => 167,
                'pronunciation' => 'YOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            26 => 
            array (
                'id' => 539,
                'is_kunyomi' => 1,
                'character_id' => 168,
                'pronunciation' => 'HA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            27 => 
            array (
                'id' => 540,
                'is_kunyomi' => 1,
                'character_id' => 168,
                'pronunciation' => 'HANE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            28 => 
            array (
                'id' => 541,
                'is_kunyomi' => 0,
                'character_id' => 168,
                'pronunciation' => 'U',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            29 => 
            array (
                'id' => 542,
                'is_kunyomi' => 1,
                'character_id' => 169,
                'pronunciation' => 'OIRU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            30 => 
            array (
                'id' => 543,
                'is_kunyomi' => 1,
                'character_id' => 169,
                'pronunciation' => 'FUKERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            31 => 
            array (
                'id' => 544,
                'is_kunyomi' => 1,
                'character_id' => 169,
                'pronunciation' => 'OI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            32 => 
            array (
                'id' => 545,
                'is_kunyomi' => 0,
                'character_id' => 169,
                'pronunciation' => 'ROU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            33 => 
            array (
                'id' => 546,
                'is_kunyomi' => 1,
                'character_id' => 170,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            34 => 
            array (
                'id' => 547,
                'is_kunyomi' => 0,
                'character_id' => 170,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            35 => 
            array (
                'id' => 548,
                'is_kunyomi' => 1,
                'character_id' => 171,
                'pronunciation' => 'KANGAERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            36 => 
            array (
                'id' => 549,
                'is_kunyomi' => 1,
                'character_id' => 171,
                'pronunciation' => 'KANGAE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            37 => 
            array (
                'id' => 550,
                'is_kunyomi' => 0,
                'character_id' => 171,
                'pronunciation' => 'KOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            38 => 
            array (
                'id' => 551,
                'is_kunyomi' => 1,
                'character_id' => 172,
                'pronunciation' => 'SHIKOUSHITE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            39 => 
            array (
                'id' => 552,
                'is_kunyomi' => 1,
                'character_id' => 172,
                'pronunciation' => 'SHIKASHITE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            40 => 
            array (
                'id' => 553,
                'is_kunyomi' => 1,
                'character_id' => 172,
                'pronunciation' => 'SHIKAREDOMO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            41 => 
            array (
                'id' => 554,
                'is_kunyomi' => 0,
                'character_id' => 172,
                'pronunciation' => 'JI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            42 => 
            array (
                'id' => 555,
                'is_kunyomi' => 0,
                'character_id' => 172,
                'pronunciation' => 'NI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            43 => 
            array (
                'id' => 556,
                'is_kunyomi' => 1,
                'character_id' => 173,
                'pronunciation' => 'SUKI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            44 => 
            array (
                'id' => 557,
                'is_kunyomi' => 0,
                'character_id' => 173,
                'pronunciation' => 'RAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            45 => 
            array (
                'id' => 558,
                'is_kunyomi' => 0,
                'character_id' => 173,
                'pronunciation' => 'RUI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            46 => 
            array (
                'id' => 559,
                'is_kunyomi' => 1,
                'character_id' => 174,
                'pronunciation' => 'MIMI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            47 => 
            array (
                'id' => 560,
                'is_kunyomi' => 1,
                'character_id' => 174,
                'pronunciation' => 'NOMI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            48 => 
            array (
                'id' => 561,
                'is_kunyomi' => 0,
                'character_id' => 174,
                'pronunciation' => 'JI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            49 => 
            array (
                'id' => 562,
                'is_kunyomi' => 0,
                'character_id' => 174,
                'pronunciation' => 'JOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            50 => 
            array (
                'id' => 563,
                'is_kunyomi' => 1,
                'character_id' => 175,
                'pronunciation' => 'FUDE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            51 => 
            array (
                'id' => 564,
                'is_kunyomi' => 1,
                'character_id' => 175,
                'pronunciation' => 'KOKONI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            52 => 
            array (
                'id' => 565,
                'is_kunyomi' => 0,
                'character_id' => 175,
                'pronunciation' => 'ITSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            53 => 
            array (
                'id' => 566,
                'is_kunyomi' => 0,
                'character_id' => 175,
                'pronunciation' => 'ICHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            54 => 
            array (
                'id' => 567,
                'is_kunyomi' => 1,
                'character_id' => 176,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            55 => 
            array (
                'id' => 568,
                'is_kunyomi' => 0,
                'character_id' => 176,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            56 => 
            array (
                'id' => 569,
                'is_kunyomi' => 1,
                'character_id' => 177,
                'pronunciation' => 'SHISHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            57 => 
            array (
                'id' => 570,
                'is_kunyomi' => 0,
                'character_id' => 177,
                'pronunciation' => 'NIKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            58 => 
            array (
                'id' => 571,
                'is_kunyomi' => 0,
                'character_id' => 177,
                'pronunciation' => 'JッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            59 => 
            array (
                'id' => 572,
                'is_kunyomi' => 1,
                'character_id' => 178,
                'pronunciation' => 'OMI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            60 => 
            array (
                'id' => 573,
                'is_kunyomi' => 1,
                'character_id' => 178,
                'pronunciation' => 'KERAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            61 => 
            array (
                'id' => 574,
                'is_kunyomi' => 0,
                'character_id' => 178,
                'pronunciation' => 'SHIN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            62 => 
            array (
                'id' => 575,
                'is_kunyomi' => 0,
                'character_id' => 178,
                'pronunciation' => 'JIN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            63 => 
            array (
                'id' => 576,
                'is_kunyomi' => 1,
                'character_id' => 179,
                'pronunciation' => 'MIZUKARA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            64 => 
            array (
                'id' => 577,
                'is_kunyomi' => 1,
                'character_id' => 179,
                'pronunciation' => 'ONOZUKARA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            65 => 
            array (
                'id' => 578,
                'is_kunyomi' => 1,
                'character_id' => 179,
                'pronunciation' => 'YORI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            66 => 
            array (
                'id' => 579,
                'is_kunyomi' => 0,
                'character_id' => 179,
                'pronunciation' => 'SHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            67 => 
            array (
                'id' => 580,
                'is_kunyomi' => 0,
                'character_id' => 179,
                'pronunciation' => 'JI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            68 => 
            array (
                'id' => 581,
                'is_kunyomi' => 1,
                'character_id' => 180,
                'pronunciation' => 'ITARU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            69 => 
            array (
                'id' => 582,
                'is_kunyomi' => 1,
                'character_id' => 180,
                'pronunciation' => 'ITARI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            70 => 
            array (
                'id' => 583,
                'is_kunyomi' => 0,
                'character_id' => 180,
                'pronunciation' => 'SHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            71 => 
            array (
                'id' => 584,
                'is_kunyomi' => 1,
                'character_id' => 181,
                'pronunciation' => 'USU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            72 => 
            array (
                'id' => 585,
                'is_kunyomi' => 0,
                'character_id' => 181,
                'pronunciation' => 'KYッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            73 => 
            array (
                'id' => 586,
                'is_kunyomi' => 1,
                'character_id' => 182,
                'pronunciation' => 'SHITA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            74 => 
            array (
                'id' => 587,
                'is_kunyomi' => 0,
                'character_id' => 182,
                'pronunciation' => 'ZETSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            75 => 
            array (
                'id' => 588,
                'is_kunyomi' => 0,
                'character_id' => 182,
                'pronunciation' => 'SETSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            76 => 
            array (
                'id' => 589,
                'is_kunyomi' => 1,
                'character_id' => 183,
                'pronunciation' => 'SOMUKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            77 => 
            array (
                'id' => 590,
                'is_kunyomi' => 0,
                'character_id' => 183,
                'pronunciation' => 'SEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            78 => 
            array (
                'id' => 591,
                'is_kunyomi' => 0,
                'character_id' => 183,
                'pronunciation' => 'SHUN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            79 => 
            array (
                'id' => 592,
                'is_kunyomi' => 1,
                'character_id' => 184,
                'pronunciation' => 'FUNE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            80 => 
            array (
                'id' => 593,
                'is_kunyomi' => 0,
                'character_id' => 184,
                'pronunciation' => 'SHッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            81 => 
            array (
                'id' => 594,
                'is_kunyomi' => 0,
                'character_id' => 184,
                'pronunciation' => 'SHU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            82 => 
            array (
                'id' => 595,
                'is_kunyomi' => 1,
                'character_id' => 185,
                'pronunciation' => 'USHITORA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            83 => 
            array (
                'id' => 596,
                'is_kunyomi' => 0,
                'character_id' => 185,
                'pronunciation' => 'KON',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            84 => 
            array (
                'id' => 597,
                'is_kunyomi' => 1,
                'character_id' => 186,
                'pronunciation' => 'IRO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            85 => 
            array (
                'id' => 598,
                'is_kunyomi' => 0,
                'character_id' => 186,
                'pronunciation' => 'SHOKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            86 => 
            array (
                'id' => 599,
                'is_kunyomi' => 0,
                'character_id' => 186,
                'pronunciation' => 'SHIKI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            87 => 
            array (
                'id' => 600,
                'is_kunyomi' => 1,
                'character_id' => 187,
                'pronunciation' => 'KUSA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            88 => 
            array (
                'id' => 601,
                'is_kunyomi' => 0,
                'character_id' => 187,
                'pronunciation' => 'SOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            89 => 
            array (
                'id' => 602,
                'is_kunyomi' => 1,
                'character_id' => 188,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            90 => 
            array (
                'id' => 603,
                'is_kunyomi' => 0,
                'character_id' => 188,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            91 => 
            array (
                'id' => 604,
                'is_kunyomi' => 1,
                'character_id' => 189,
                'pronunciation' => 'TORAKANMURI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            92 => 
            array (
                'id' => 605,
                'is_kunyomi' => 0,
                'character_id' => 189,
                'pronunciation' => 'KO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            93 => 
            array (
                'id' => 606,
                'is_kunyomi' => 0,
                'character_id' => 189,
                'pronunciation' => 'KU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            94 => 
            array (
                'id' => 607,
                'is_kunyomi' => 1,
                'character_id' => 190,
                'pronunciation' => 'MUSHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            95 => 
            array (
                'id' => 608,
                'is_kunyomi' => 0,
                'character_id' => 190,
                'pronunciation' => 'CHッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            96 => 
            array (
                'id' => 609,
                'is_kunyomi' => 0,
                'character_id' => 190,
                'pronunciation' => 'KI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            97 => 
            array (
                'id' => 610,
                'is_kunyomi' => 1,
                'character_id' => 191,
                'pronunciation' => 'CHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            98 => 
            array (
                'id' => 611,
                'is_kunyomi' => 0,
                'character_id' => 191,
                'pronunciation' => 'KETSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            99 => 
            array (
                'id' => 612,
                'is_kunyomi' => 1,
                'character_id' => 192,
                'pronunciation' => 'IKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            100 => 
            array (
                'id' => 613,
                'is_kunyomi' => 1,
                'character_id' => 192,
                'pronunciation' => 'YUKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            101 => 
            array (
                'id' => 614,
                'is_kunyomi' => 1,
                'character_id' => 192,
                'pronunciation' => 'OKONAU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            102 => 
            array (
                'id' => 615,
                'is_kunyomi' => 0,
                'character_id' => 192,
                'pronunciation' => 'KOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            103 => 
            array (
                'id' => 616,
                'is_kunyomi' => 0,
                'character_id' => 192,
                'pronunciation' => 'GYOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            104 => 
            array (
                'id' => 617,
                'is_kunyomi' => 0,
                'character_id' => 192,
                'pronunciation' => 'AN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            105 => 
            array (
                'id' => 618,
                'is_kunyomi' => 1,
                'character_id' => 193,
                'pronunciation' => 'KOROMO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            106 => 
            array (
                'id' => 619,
                'is_kunyomi' => 1,
                'character_id' => 193,
                'pronunciation' => 'KIRU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            107 => 
            array (
                'id' => 620,
                'is_kunyomi' => 0,
                'character_id' => 193,
                'pronunciation' => 'I',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            108 => 
            array (
                'id' => 621,
                'is_kunyomi' => 0,
                'character_id' => 193,
                'pronunciation' => 'E',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            109 => 
            array (
                'id' => 622,
                'is_kunyomi' => 1,
                'character_id' => 194,
                'pronunciation' => 'KOROMOHEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            110 => 
            array (
                'id' => 623,
                'is_kunyomi' => 0,
                'character_id' => 194,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            111 => 
            array (
                'id' => 624,
                'is_kunyomi' => 1,
                'character_id' => 195,
                'pronunciation' => 'ッOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            112 => 
            array (
                'id' => 625,
                'is_kunyomi' => 0,
                'character_id' => 195,
                'pronunciation' => 'AKA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            113 => 
            array (
                'id' => 626,
                'is_kunyomi' => 0,
                'character_id' => 195,
                'pronunciation' => 'EKE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            114 => 
            array (
                'id' => 627,
                'is_kunyomi' => 1,
                'character_id' => 196,
                'pronunciation' => 'NISHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            115 => 
            array (
                'id' => 628,
                'is_kunyomi' => 0,
                'character_id' => 196,
                'pronunciation' => 'SEI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            116 => 
            array (
                'id' => 629,
                'is_kunyomi' => 0,
                'character_id' => 196,
                'pronunciation' => 'SAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            117 => 
            array (
                'id' => 630,
                'is_kunyomi' => 1,
                'character_id' => 197,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            118 => 
            array (
                'id' => 631,
                'is_kunyomi' => 0,
                'character_id' => 197,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            119 => 
            array (
                'id' => 632,
                'is_kunyomi' => 1,
                'character_id' => 198,
                'pronunciation' => 'MIRU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            120 => 
            array (
                'id' => 633,
                'is_kunyomi' => 1,
                'character_id' => 198,
                'pronunciation' => 'MIERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            121 => 
            array (
                'id' => 634,
                'is_kunyomi' => 1,
                'character_id' => 198,
                'pronunciation' => 'MAMIERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            122 => 
            array (
                'id' => 635,
                'is_kunyomi' => 0,
                'character_id' => 198,
                'pronunciation' => 'KEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            123 => 
            array (
                'id' => 636,
                'is_kunyomi' => 1,
                'character_id' => 199,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            124 => 
            array (
                'id' => 637,
                'is_kunyomi' => 0,
                'character_id' => 199,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            125 => 
            array (
                'id' => 638,
                'is_kunyomi' => 1,
                'character_id' => 200,
                'pronunciation' => 'TSUNO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            126 => 
            array (
                'id' => 639,
                'is_kunyomi' => 1,
                'character_id' => 200,
                'pronunciation' => 'KADO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            127 => 
            array (
                'id' => 640,
                'is_kunyomi' => 1,
                'character_id' => 200,
                'pronunciation' => 'SUMI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            128 => 
            array (
                'id' => 641,
                'is_kunyomi' => 0,
                'character_id' => 200,
                'pronunciation' => 'KAKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            129 => 
            array (
                'id' => 642,
                'is_kunyomi' => 0,
                'character_id' => 200,
                'pronunciation' => 'ROKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            130 => 
            array (
                'id' => 643,
                'is_kunyomi' => 0,
                'character_id' => 200,
                'pronunciation' => 'KOKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            131 => 
            array (
                'id' => 644,
                'is_kunyomi' => 1,
                'character_id' => 201,
                'pronunciation' => 'KOTO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            132 => 
            array (
                'id' => 645,
                'is_kunyomi' => 1,
                'character_id' => 201,
                'pronunciation' => 'IU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            133 => 
            array (
                'id' => 646,
                'is_kunyomi' => 1,
                'character_id' => 201,
                'pronunciation' => 'KOTOBA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            134 => 
            array (
                'id' => 647,
                'is_kunyomi' => 0,
                'character_id' => 201,
                'pronunciation' => 'GEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            135 => 
            array (
                'id' => 648,
                'is_kunyomi' => 0,
                'character_id' => 201,
                'pronunciation' => 'GON',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            136 => 
            array (
                'id' => 649,
                'is_kunyomi' => 0,
                'character_id' => 201,
                'pronunciation' => 'GIN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            137 => 
            array (
                'id' => 650,
                'is_kunyomi' => 1,
                'character_id' => 202,
                'pronunciation' => 'GONBEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            138 => 
            array (
                'id' => 651,
                'is_kunyomi' => 0,
                'character_id' => 202,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            139 => 
            array (
                'id' => 652,
                'is_kunyomi' => 1,
                'character_id' => 203,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            140 => 
            array (
                'id' => 653,
                'is_kunyomi' => 0,
                'character_id' => 203,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            141 => 
            array (
                'id' => 654,
                'is_kunyomi' => 1,
                'character_id' => 204,
                'pronunciation' => 'TANI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            142 => 
            array (
                'id' => 655,
                'is_kunyomi' => 1,
                'character_id' => 204,
                'pronunciation' => 'KIWAMARU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            143 => 
            array (
                'id' => 656,
                'is_kunyomi' => 0,
                'character_id' => 204,
                'pronunciation' => 'KOKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            144 => 
            array (
                'id' => 657,
                'is_kunyomi' => 0,
                'character_id' => 204,
                'pronunciation' => 'YOKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            145 => 
            array (
                'id' => 658,
                'is_kunyomi' => 1,
                'character_id' => 205,
                'pronunciation' => 'MAME',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            146 => 
            array (
                'id' => 659,
                'is_kunyomi' => 1,
                'character_id' => 205,
                'pronunciation' => 'TAKATSUKI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            147 => 
            array (
                'id' => 660,
                'is_kunyomi' => 0,
                'character_id' => 205,
                'pronunciation' => 'TOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            148 => 
            array (
                'id' => 661,
                'is_kunyomi' => 0,
                'character_id' => 205,
                'pronunciation' => 'ZU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            149 => 
            array (
                'id' => 662,
                'is_kunyomi' => 1,
                'character_id' => 206,
                'pronunciation' => 'INOKO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            150 => 
            array (
                'id' => 663,
                'is_kunyomi' => 0,
                'character_id' => 206,
                'pronunciation' => 'SHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            151 => 
            array (
                'id' => 664,
                'is_kunyomi' => 1,
                'character_id' => 207,
                'pronunciation' => 'TOKERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            152 => 
            array (
                'id' => 665,
                'is_kunyomi' => 1,
                'character_id' => 207,
                'pronunciation' => 'YURUMERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            153 => 
            array (
                'id' => 666,
                'is_kunyomi' => 0,
                'character_id' => 207,
                'pronunciation' => 'CHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            154 => 
            array (
                'id' => 667,
                'is_kunyomi' => 0,
                'character_id' => 207,
                'pronunciation' => 'TAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            155 => 
            array (
                'id' => 668,
                'is_kunyomi' => 1,
                'character_id' => 208,
                'pronunciation' => 'KAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            156 => 
            array (
                'id' => 669,
                'is_kunyomi' => 0,
                'character_id' => 208,
                'pronunciation' => 'BAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            157 => 
            array (
                'id' => 670,
                'is_kunyomi' => 0,
                'character_id' => 208,
                'pronunciation' => 'HAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            158 => 
            array (
                'id' => 671,
                'is_kunyomi' => 1,
                'character_id' => 209,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            159 => 
            array (
                'id' => 672,
                'is_kunyomi' => 0,
                'character_id' => 209,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            160 => 
            array (
                'id' => 673,
                'is_kunyomi' => 1,
                'character_id' => 210,
                'pronunciation' => 'AKA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            161 => 
            array (
                'id' => 674,
                'is_kunyomi' => 1,
                'character_id' => 210,
                'pronunciation' => 'AKAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            162 => 
            array (
                'id' => 675,
                'is_kunyomi' => 0,
                'character_id' => 210,
                'pronunciation' => 'SEKI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            163 => 
            array (
                'id' => 676,
                'is_kunyomi' => 0,
                'character_id' => 210,
                'pronunciation' => 'SHAKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            164 => 
            array (
                'id' => 677,
                'is_kunyomi' => 1,
                'character_id' => 211,
                'pronunciation' => 'HASHIRU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            165 => 
            array (
                'id' => 678,
                'is_kunyomi' => 0,
                'character_id' => 211,
                'pronunciation' => 'SOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            166 => 
            array (
                'id' => 679,
                'is_kunyomi' => 0,
                'character_id' => 211,
                'pronunciation' => 'SHU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            167 => 
            array (
                'id' => 680,
                'is_kunyomi' => 1,
                'character_id' => 212,
                'pronunciation' => 'HASHIRU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            168 => 
            array (
                'id' => 681,
                'is_kunyomi' => 0,
                'character_id' => 212,
                'pronunciation' => 'SOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            169 => 
            array (
                'id' => 682,
                'is_kunyomi' => 0,
                'character_id' => 212,
                'pronunciation' => 'SHU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            170 => 
            array (
                'id' => 683,
                'is_kunyomi' => 1,
                'character_id' => 213,
                'pronunciation' => 'ASHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            171 => 
            array (
                'id' => 684,
                'is_kunyomi' => 1,
                'character_id' => 213,
                'pronunciation' => 'TARIRU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            172 => 
            array (
                'id' => 685,
                'is_kunyomi' => 1,
                'character_id' => 213,
                'pronunciation' => 'TASU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            173 => 
            array (
                'id' => 686,
                'is_kunyomi' => 0,
                'character_id' => 213,
                'pronunciation' => 'SOKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            174 => 
            array (
                'id' => 687,
                'is_kunyomi' => 0,
                'character_id' => 213,
                'pronunciation' => 'SHOKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            175 => 
            array (
                'id' => 688,
                'is_kunyomi' => 0,
                'character_id' => 213,
                'pronunciation' => 'SッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            176 => 
            array (
                'id' => 689,
                'is_kunyomi' => 1,
                'character_id' => 214,
                'pronunciation' => 'MI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            177 => 
            array (
                'id' => 690,
                'is_kunyomi' => 1,
                'character_id' => 214,
                'pronunciation' => 'MIZUKARA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            178 => 
            array (
                'id' => 691,
                'is_kunyomi' => 0,
                'character_id' => 214,
                'pronunciation' => 'SHIN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            179 => 
            array (
                'id' => 692,
                'is_kunyomi' => 0,
                'character_id' => 214,
                'pronunciation' => 'KEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            180 => 
            array (
                'id' => 693,
                'is_kunyomi' => 1,
                'character_id' => 215,
                'pronunciation' => 'KURUMA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            181 => 
            array (
                'id' => 694,
                'is_kunyomi' => 0,
                'character_id' => 215,
                'pronunciation' => 'SHA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            182 => 
            array (
                'id' => 695,
                'is_kunyomi' => 0,
                'character_id' => 215,
                'pronunciation' => 'KYO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            183 => 
            array (
                'id' => 696,
                'is_kunyomi' => 1,
                'character_id' => 216,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            184 => 
            array (
                'id' => 697,
                'is_kunyomi' => 0,
                'character_id' => 216,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            185 => 
            array (
                'id' => 698,
                'is_kunyomi' => 1,
                'character_id' => 217,
                'pronunciation' => 'KARAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            186 => 
            array (
                'id' => 699,
                'is_kunyomi' => 1,
                'character_id' => 217,
                'pronunciation' => 'TSURAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            187 => 
            array (
                'id' => 700,
                'is_kunyomi' => 1,
                'character_id' => 217,
                'pronunciation' => 'KANOTO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            188 => 
            array (
                'id' => 701,
                'is_kunyomi' => 0,
                'character_id' => 217,
                'pronunciation' => 'SHIN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            189 => 
            array (
                'id' => 702,
                'is_kunyomi' => 1,
                'character_id' => 218,
                'pronunciation' => 'TATSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            190 => 
            array (
                'id' => 703,
                'is_kunyomi' => 0,
                'character_id' => 218,
                'pronunciation' => 'SHIN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            191 => 
            array (
                'id' => 704,
                'is_kunyomi' => 1,
                'character_id' => 219,
                'pronunciation' => 'SHIッNYOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            192 => 
            array (
                'id' => 705,
                'is_kunyomi' => 0,
                'character_id' => 219,
                'pronunciation' => 'CHAKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            193 => 
            array (
                'id' => 706,
                'is_kunyomi' => 1,
                'character_id' => 220,
                'pronunciation' => 'SHIッNYOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            194 => 
            array (
                'id' => 707,
                'is_kunyomi' => 0,
                'character_id' => 220,
                'pronunciation' => 'CHAKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            195 => 
            array (
                'id' => 708,
                'is_kunyomi' => 1,
                'character_id' => 221,
                'pronunciation' => 'KUNI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            196 => 
            array (
                'id' => 709,
                'is_kunyomi' => 1,
                'character_id' => 221,
                'pronunciation' => 'MURA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            197 => 
            array (
                'id' => 710,
                'is_kunyomi' => 1,
                'character_id' => 221,
                'pronunciation' => 'URッERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            198 => 
            array (
                'id' => 711,
                'is_kunyomi' => 0,
                'character_id' => 221,
                'pronunciation' => 'YッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            199 => 
            array (
                'id' => 712,
                'is_kunyomi' => 0,
                'character_id' => 221,
                'pronunciation' => 'OU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            200 => 
            array (
                'id' => 713,
                'is_kunyomi' => 1,
                'character_id' => 222,
                'pronunciation' => 'TORI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            201 => 
            array (
                'id' => 714,
                'is_kunyomi' => 1,
                'character_id' => 222,
                'pronunciation' => 'MINORU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            202 => 
            array (
                'id' => 715,
                'is_kunyomi' => 0,
                'character_id' => 222,
                'pronunciation' => 'YッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            203 => 
            array (
                'id' => 716,
                'is_kunyomi' => 1,
                'character_id' => 223,
                'pronunciation' => 'WAKATSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            204 => 
            array (
                'id' => 717,
                'is_kunyomi' => 1,
                'character_id' => 223,
                'pronunciation' => 'WAKARERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            205 => 
            array (
                'id' => 718,
                'is_kunyomi' => 1,
                'character_id' => 223,
                'pronunciation' => 'HIZUME',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            206 => 
            array (
                'id' => 719,
                'is_kunyomi' => 0,
                'character_id' => 223,
                'pronunciation' => 'HAN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            207 => 
            array (
                'id' => 720,
                'is_kunyomi' => 0,
                'character_id' => 223,
                'pronunciation' => 'BAN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            208 => 
            array (
                'id' => 721,
                'is_kunyomi' => 0,
                'character_id' => 223,
                'pronunciation' => 'HEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            209 => 
            array (
                'id' => 722,
                'is_kunyomi' => 1,
                'character_id' => 224,
                'pronunciation' => 'SATO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            210 => 
            array (
                'id' => 723,
                'is_kunyomi' => 0,
                'character_id' => 224,
                'pronunciation' => 'RI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            211 => 
            array (
                'id' => 724,
                'is_kunyomi' => 1,
                'character_id' => 225,
                'pronunciation' => 'KANE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            212 => 
            array (
                'id' => 725,
                'is_kunyomi' => 0,
                'character_id' => 225,
                'pronunciation' => 'KIN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            213 => 
            array (
                'id' => 726,
                'is_kunyomi' => 0,
                'character_id' => 225,
                'pronunciation' => 'KON',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            214 => 
            array (
                'id' => 727,
                'is_kunyomi' => 1,
                'character_id' => 226,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            215 => 
            array (
                'id' => 728,
                'is_kunyomi' => 0,
                'character_id' => 226,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            216 => 
            array (
                'id' => 729,
                'is_kunyomi' => 1,
                'character_id' => 227,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            217 => 
            array (
                'id' => 730,
                'is_kunyomi' => 0,
                'character_id' => 227,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            218 => 
            array (
                'id' => 731,
                'is_kunyomi' => 1,
                'character_id' => 228,
                'pronunciation' => 'NAGAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            219 => 
            array (
                'id' => 732,
                'is_kunyomi' => 1,
                'character_id' => 228,
                'pronunciation' => 'TAKERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            220 => 
            array (
                'id' => 733,
                'is_kunyomi' => 1,
                'character_id' => 228,
                'pronunciation' => 'OSA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            221 => 
            array (
                'id' => 734,
                'is_kunyomi' => 0,
                'character_id' => 228,
                'pronunciation' => 'CHOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            222 => 
            array (
                'id' => 735,
                'is_kunyomi' => 1,
                'character_id' => 229,
                'pronunciation' => 'NAGッAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            223 => 
            array (
                'id' => 736,
                'is_kunyomi' => 1,
                'character_id' => 229,
                'pronunciation' => 'OSA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            224 => 
            array (
                'id' => 737,
                'is_kunyomi' => 0,
                'character_id' => 229,
                'pronunciation' => 'CHOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            225 => 
            array (
                'id' => 738,
                'is_kunyomi' => 1,
                'character_id' => 230,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            226 => 
            array (
                'id' => 739,
                'is_kunyomi' => 0,
                'character_id' => 230,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            227 => 
            array (
                'id' => 740,
                'is_kunyomi' => 1,
                'character_id' => 231,
                'pronunciation' => 'KADO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            228 => 
            array (
                'id' => 741,
                'is_kunyomi' => 0,
                'character_id' => 231,
                'pronunciation' => 'MON',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            229 => 
            array (
                'id' => 742,
                'is_kunyomi' => 0,
                'character_id' => 231,
                'pronunciation' => 'BON',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            230 => 
            array (
                'id' => 743,
                'is_kunyomi' => 1,
                'character_id' => 232,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            231 => 
            array (
                'id' => 744,
                'is_kunyomi' => 0,
                'character_id' => 232,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            232 => 
            array (
                'id' => 745,
                'is_kunyomi' => 1,
                'character_id' => 233,
                'pronunciation' => 'OKA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            233 => 
            array (
                'id' => 746,
                'is_kunyomi' => 0,
                'character_id' => 233,
                'pronunciation' => 'FU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            234 => 
            array (
                'id' => 747,
                'is_kunyomi' => 1,
                'character_id' => 234,
                'pronunciation' => 'KOZATOHEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            235 => 
            array (
                'id' => 748,
                'is_kunyomi' => 0,
                'character_id' => 234,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            236 => 
            array (
                'id' => 749,
                'is_kunyomi' => 1,
                'character_id' => 235,
                'pronunciation' => 'OYOBU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            237 => 
            array (
                'id' => 750,
                'is_kunyomi' => 0,
                'character_id' => 235,
                'pronunciation' => 'TAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            238 => 
            array (
                'id' => 751,
                'is_kunyomi' => 0,
                'character_id' => 235,
                'pronunciation' => 'DAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            239 => 
            array (
                'id' => 752,
                'is_kunyomi' => 0,
                'character_id' => 235,
                'pronunciation' => 'I',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            240 => 
            array (
                'id' => 753,
                'is_kunyomi' => 1,
                'character_id' => 236,
                'pronunciation' => 'TORI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            241 => 
            array (
                'id' => 754,
                'is_kunyomi' => 0,
                'character_id' => 236,
                'pronunciation' => 'SUI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            242 => 
            array (
                'id' => 755,
                'is_kunyomi' => 0,
                'character_id' => 236,
                'pronunciation' => 'SAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            243 => 
            array (
                'id' => 756,
                'is_kunyomi' => 1,
                'character_id' => 237,
                'pronunciation' => 'AME',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            244 => 
            array (
                'id' => 757,
                'is_kunyomi' => 1,
                'character_id' => 237,
                'pronunciation' => 'AMA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            245 => 
            array (
                'id' => 758,
                'is_kunyomi' => 0,
                'character_id' => 237,
                'pronunciation' => 'U',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            246 => 
            array (
                'id' => 759,
                'is_kunyomi' => 1,
                'character_id' => 238,
                'pronunciation' => 'AO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            247 => 
            array (
                'id' => 760,
                'is_kunyomi' => 1,
                'character_id' => 238,
                'pronunciation' => 'AOI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            248 => 
            array (
                'id' => 761,
                'is_kunyomi' => 0,
                'character_id' => 238,
                'pronunciation' => 'SEI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            249 => 
            array (
                'id' => 762,
                'is_kunyomi' => 0,
                'character_id' => 238,
                'pronunciation' => 'SHOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            250 => 
            array (
                'id' => 763,
                'is_kunyomi' => 1,
                'character_id' => 239,
                'pronunciation' => 'AO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            251 => 
            array (
                'id' => 764,
                'is_kunyomi' => 1,
                'character_id' => 239,
                'pronunciation' => 'AOI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            252 => 
            array (
                'id' => 765,
                'is_kunyomi' => 0,
                'character_id' => 239,
                'pronunciation' => 'SEI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            253 => 
            array (
                'id' => 766,
                'is_kunyomi' => 0,
                'character_id' => 239,
                'pronunciation' => 'SHOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            254 => 
            array (
                'id' => 767,
                'is_kunyomi' => 1,
                'character_id' => 240,
                'pronunciation' => 'SORERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            255 => 
            array (
                'id' => 768,
                'is_kunyomi' => 1,
                'character_id' => 240,
                'pronunciation' => 'ARAZU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            256 => 
            array (
                'id' => 769,
                'is_kunyomi' => 0,
                'character_id' => 240,
                'pronunciation' => 'HI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:54',
                'updated_at' => '2017-10-21 14:33:54',
            ),
            257 => 
            array (
                'id' => 770,
                'is_kunyomi' => 1,
                'character_id' => 241,
                'pronunciation' => 'OMO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            258 => 
            array (
                'id' => 771,
                'is_kunyomi' => 1,
                'character_id' => 241,
                'pronunciation' => 'OMOTE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            259 => 
            array (
                'id' => 772,
                'is_kunyomi' => 1,
                'character_id' => 241,
                'pronunciation' => 'TSURA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            260 => 
            array (
                'id' => 773,
                'is_kunyomi' => 0,
                'character_id' => 241,
                'pronunciation' => 'MEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            261 => 
            array (
                'id' => 774,
                'is_kunyomi' => 0,
                'character_id' => 241,
                'pronunciation' => 'BEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            262 => 
            array (
                'id' => 775,
                'is_kunyomi' => 1,
                'character_id' => 242,
                'pronunciation' => 'OMO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            263 => 
            array (
                'id' => 776,
                'is_kunyomi' => 1,
                'character_id' => 242,
                'pronunciation' => 'OMOTE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            264 => 
            array (
                'id' => 777,
                'is_kunyomi' => 1,
                'character_id' => 242,
                'pronunciation' => 'TSURA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            265 => 
            array (
                'id' => 778,
                'is_kunyomi' => 0,
                'character_id' => 242,
                'pronunciation' => 'MEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            266 => 
            array (
                'id' => 779,
                'is_kunyomi' => 0,
                'character_id' => 242,
                'pronunciation' => 'BEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            267 => 
            array (
                'id' => 780,
                'is_kunyomi' => 1,
                'character_id' => 243,
                'pronunciation' => 'KAWA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            268 => 
            array (
                'id' => 781,
                'is_kunyomi' => 1,
                'character_id' => 243,
                'pronunciation' => 'ARATAMARU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            269 => 
            array (
                'id' => 782,
                'is_kunyomi' => 1,
                'character_id' => 243,
                'pronunciation' => 'ARATAMERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            270 => 
            array (
                'id' => 783,
                'is_kunyomi' => 0,
                'character_id' => 243,
                'pronunciation' => 'KAKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            271 => 
            array (
                'id' => 784,
                'is_kunyomi' => 0,
                'character_id' => 243,
                'pronunciation' => 'KYOKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            272 => 
            array (
                'id' => 785,
                'is_kunyomi' => 1,
                'character_id' => 244,
                'pronunciation' => 'NAMESHIGAWA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            273 => 
            array (
                'id' => 786,
                'is_kunyomi' => 1,
                'character_id' => 244,
                'pronunciation' => 'SOMUKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            274 => 
            array (
                'id' => 787,
                'is_kunyomi' => 0,
                'character_id' => 244,
                'pronunciation' => 'I',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            275 => 
            array (
                'id' => 788,
                'is_kunyomi' => 1,
                'character_id' => 245,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            276 => 
            array (
                'id' => 789,
                'is_kunyomi' => 0,
                'character_id' => 245,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            277 => 
            array (
                'id' => 790,
                'is_kunyomi' => 1,
                'character_id' => 246,
                'pronunciation' => 'NIRA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            278 => 
            array (
                'id' => 791,
                'is_kunyomi' => 0,
                'character_id' => 246,
                'pronunciation' => 'KYッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            279 => 
            array (
                'id' => 792,
                'is_kunyomi' => 0,
                'character_id' => 246,
                'pronunciation' => 'KU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            280 => 
            array (
                'id' => 793,
                'is_kunyomi' => 1,
                'character_id' => 247,
                'pronunciation' => 'OTO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            281 => 
            array (
                'id' => 794,
                'is_kunyomi' => 1,
                'character_id' => 247,
                'pronunciation' => 'NE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            282 => 
            array (
                'id' => 795,
                'is_kunyomi' => 0,
                'character_id' => 247,
                'pronunciation' => 'ON',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            283 => 
            array (
                'id' => 796,
                'is_kunyomi' => 0,
                'character_id' => 247,
                'pronunciation' => 'IN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            284 => 
            array (
                'id' => 797,
                'is_kunyomi' => 1,
                'character_id' => 248,
                'pronunciation' => 'KASHIRA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            285 => 
            array (
                'id' => 798,
                'is_kunyomi' => 1,
                'character_id' => 248,
                'pronunciation' => 'PッEJI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            286 => 
            array (
                'id' => 799,
                'is_kunyomi' => 0,
                'character_id' => 248,
                'pronunciation' => 'KETSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            287 => 
            array (
                'id' => 800,
                'is_kunyomi' => 0,
                'character_id' => 248,
                'pronunciation' => 'YOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            288 => 
            array (
                'id' => 801,
                'is_kunyomi' => 0,
                'character_id' => 248,
                'pronunciation' => 'KECHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            289 => 
            array (
                'id' => 802,
                'is_kunyomi' => 1,
                'character_id' => 249,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            290 => 
            array (
                'id' => 803,
                'is_kunyomi' => 0,
                'character_id' => 249,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            291 => 
            array (
                'id' => 804,
                'is_kunyomi' => 1,
                'character_id' => 250,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            292 => 
            array (
                'id' => 805,
                'is_kunyomi' => 0,
                'character_id' => 250,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            293 => 
            array (
                'id' => 806,
                'is_kunyomi' => 1,
                'character_id' => 251,
                'pronunciation' => 'KAZE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            294 => 
            array (
                'id' => 807,
                'is_kunyomi' => 0,
                'character_id' => 251,
                'pronunciation' => 'FッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            295 => 
            array (
                'id' => 808,
                'is_kunyomi' => 0,
                'character_id' => 251,
                'pronunciation' => 'FU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            296 => 
            array (
                'id' => 809,
                'is_kunyomi' => 1,
                'character_id' => 252,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            297 => 
            array (
                'id' => 810,
                'is_kunyomi' => 0,
                'character_id' => 252,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            298 => 
            array (
                'id' => 811,
                'is_kunyomi' => 1,
                'character_id' => 253,
                'pronunciation' => 'TOBU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            299 => 
            array (
                'id' => 812,
                'is_kunyomi' => 1,
                'character_id' => 253,
                'pronunciation' => 'TOBASU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            300 => 
            array (
                'id' => 813,
                'is_kunyomi' => 0,
                'character_id' => 253,
                'pronunciation' => 'HI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            301 => 
            array (
                'id' => 814,
                'is_kunyomi' => 1,
                'character_id' => 254,
                'pronunciation' => 'KッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            302 => 
            array (
                'id' => 815,
                'is_kunyomi' => 1,
                'character_id' => 254,
                'pronunciation' => 'KURAU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            303 => 
            array (
                'id' => 816,
                'is_kunyomi' => 1,
                'character_id' => 254,
                'pronunciation' => 'TABERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            304 => 
            array (
                'id' => 817,
                'is_kunyomi' => 0,
                'character_id' => 254,
                'pronunciation' => 'SHOKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            305 => 
            array (
                'id' => 818,
                'is_kunyomi' => 0,
                'character_id' => 254,
                'pronunciation' => 'SHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            306 => 
            array (
                'id' => 819,
                'is_kunyomi' => 0,
                'character_id' => 254,
                'pronunciation' => 'JIKI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            307 => 
            array (
                'id' => 820,
                'is_kunyomi' => 1,
                'character_id' => 255,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            308 => 
            array (
                'id' => 821,
                'is_kunyomi' => 0,
                'character_id' => 255,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            309 => 
            array (
                'id' => 822,
                'is_kunyomi' => 1,
                'character_id' => 256,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            310 => 
            array (
                'id' => 823,
                'is_kunyomi' => 0,
                'character_id' => 256,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            311 => 
            array (
                'id' => 824,
                'is_kunyomi' => 1,
                'character_id' => 257,
                'pronunciation' => 'KUBI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            312 => 
            array (
                'id' => 825,
                'is_kunyomi' => 1,
                'character_id' => 257,
                'pronunciation' => 'KOUBE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            313 => 
            array (
                'id' => 826,
                'is_kunyomi' => 1,
                'character_id' => 257,
                'pronunciation' => 'SHIRUSHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            314 => 
            array (
                'id' => 827,
                'is_kunyomi' => 0,
                'character_id' => 257,
                'pronunciation' => 'SHU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            315 => 
            array (
                'id' => 828,
                'is_kunyomi' => 0,
                'character_id' => 257,
                'pronunciation' => 'SHッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            316 => 
            array (
                'id' => 829,
                'is_kunyomi' => 1,
                'character_id' => 258,
                'pronunciation' => 'KAORI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            317 => 
            array (
                'id' => 830,
                'is_kunyomi' => 1,
                'character_id' => 258,
                'pronunciation' => 'KA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            318 => 
            array (
                'id' => 831,
                'is_kunyomi' => 0,
                'character_id' => 258,
                'pronunciation' => 'KOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            319 => 
            array (
                'id' => 832,
                'is_kunyomi' => 0,
                'character_id' => 258,
                'pronunciation' => 'KYOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            320 => 
            array (
                'id' => 833,
                'is_kunyomi' => 1,
                'character_id' => 259,
                'pronunciation' => 'UMA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            321 => 
            array (
                'id' => 834,
                'is_kunyomi' => 0,
                'character_id' => 259,
                'pronunciation' => 'BA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            322 => 
            array (
                'id' => 835,
                'is_kunyomi' => 0,
                'character_id' => 259,
                'pronunciation' => 'ME',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            323 => 
            array (
                'id' => 836,
                'is_kunyomi' => 0,
                'character_id' => 259,
                'pronunciation' => 'MA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            324 => 
            array (
                'id' => 837,
                'is_kunyomi' => 1,
                'character_id' => 260,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            325 => 
            array (
                'id' => 838,
                'is_kunyomi' => 0,
                'character_id' => 260,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            326 => 
            array (
                'id' => 839,
                'is_kunyomi' => 1,
                'character_id' => 261,
                'pronunciation' => 'HONE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            327 => 
            array (
                'id' => 840,
                'is_kunyomi' => 0,
                'character_id' => 261,
                'pronunciation' => 'KOTSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            328 => 
            array (
                'id' => 841,
                'is_kunyomi' => 1,
                'character_id' => 262,
                'pronunciation' => 'TAKAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            329 => 
            array (
                'id' => 842,
                'is_kunyomi' => 1,
                'character_id' => 262,
                'pronunciation' => 'TAKAMARU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            330 => 
            array (
                'id' => 843,
                'is_kunyomi' => 1,
                'character_id' => 262,
                'pronunciation' => 'TAKASA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            331 => 
            array (
                'id' => 844,
                'is_kunyomi' => 0,
                'character_id' => 262,
                'pronunciation' => 'KOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            332 => 
            array (
                'id' => 845,
                'is_kunyomi' => 1,
                'character_id' => 263,
                'pronunciation' => 'TAKAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            333 => 
            array (
                'id' => 846,
                'is_kunyomi' => 1,
                'character_id' => 263,
                'pronunciation' => 'TAKAMARU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            334 => 
            array (
                'id' => 847,
                'is_kunyomi' => 1,
                'character_id' => 263,
                'pronunciation' => 'TAKASA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            335 => 
            array (
                'id' => 848,
                'is_kunyomi' => 0,
                'character_id' => 263,
                'pronunciation' => 'KOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            336 => 
            array (
                'id' => 849,
                'is_kunyomi' => 1,
                'character_id' => 264,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            337 => 
            array (
                'id' => 850,
                'is_kunyomi' => 0,
                'character_id' => 264,
                'pronunciation' => 'HYOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            338 => 
            array (
                'id' => 851,
                'is_kunyomi' => 0,
                'character_id' => 264,
                'pronunciation' => 'HYッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            339 => 
            array (
                'id' => 852,
                'is_kunyomi' => 1,
                'character_id' => 265,
                'pronunciation' => 'TATAKAU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            340 => 
            array (
                'id' => 853,
                'is_kunyomi' => 1,
                'character_id' => 265,
                'pronunciation' => 'ARASOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            341 => 
            array (
                'id' => 854,
                'is_kunyomi' => 0,
                'character_id' => 265,
                'pronunciation' => 'TOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            342 => 
            array (
                'id' => 855,
                'is_kunyomi' => 0,
                'character_id' => 265,
                'pronunciation' => 'TSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            343 => 
            array (
                'id' => 856,
                'is_kunyomi' => 0,
                'character_id' => 265,
                'pronunciation' => 'KAKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            344 => 
            array (
                'id' => 857,
                'is_kunyomi' => 1,
                'character_id' => 266,
                'pronunciation' => 'NOBIRU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            345 => 
            array (
                'id' => 858,
                'is_kunyomi' => 0,
                'character_id' => 266,
                'pronunciation' => 'CHOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            346 => 
            array (
                'id' => 859,
                'is_kunyomi' => 1,
                'character_id' => 267,
                'pronunciation' => 'KANAE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            347 => 
            array (
                'id' => 860,
                'is_kunyomi' => 0,
                'character_id' => 267,
                'pronunciation' => 'REKI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            348 => 
            array (
                'id' => 861,
                'is_kunyomi' => 0,
                'character_id' => 267,
                'pronunciation' => 'KAKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            349 => 
            array (
                'id' => 862,
                'is_kunyomi' => 1,
                'character_id' => 268,
                'pronunciation' => 'ONI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            350 => 
            array (
                'id' => 863,
                'is_kunyomi' => 0,
                'character_id' => 268,
                'pronunciation' => 'KI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            351 => 
            array (
                'id' => 864,
                'is_kunyomi' => 1,
                'character_id' => 269,
                'pronunciation' => 'UO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            352 => 
            array (
                'id' => 865,
                'is_kunyomi' => 1,
                'character_id' => 269,
                'pronunciation' => 'SAKANA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            353 => 
            array (
                'id' => 866,
                'is_kunyomi' => 1,
                'character_id' => 269,
                'pronunciation' => 'SUNADORU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            354 => 
            array (
                'id' => 867,
                'is_kunyomi' => 0,
                'character_id' => 269,
                'pronunciation' => 'GYO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            355 => 
            array (
                'id' => 868,
                'is_kunyomi' => 1,
                'character_id' => 270,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            356 => 
            array (
                'id' => 869,
                'is_kunyomi' => 0,
                'character_id' => 270,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            357 => 
            array (
                'id' => 870,
                'is_kunyomi' => 1,
                'character_id' => 271,
                'pronunciation' => 'TORI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            358 => 
            array (
                'id' => 871,
                'is_kunyomi' => 0,
                'character_id' => 271,
                'pronunciation' => 'CHOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            359 => 
            array (
                'id' => 872,
                'is_kunyomi' => 1,
                'character_id' => 272,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            360 => 
            array (
                'id' => 873,
                'is_kunyomi' => 0,
                'character_id' => 272,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            361 => 
            array (
                'id' => 874,
                'is_kunyomi' => 1,
                'character_id' => 273,
                'pronunciation' => 'SHIO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            362 => 
            array (
                'id' => 875,
                'is_kunyomi' => 1,
                'character_id' => 273,
                'pronunciation' => 'SHIOCHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            363 => 
            array (
                'id' => 876,
                'is_kunyomi' => 1,
                'character_id' => 273,
                'pronunciation' => 'TATE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            364 => 
            array (
                'id' => 877,
                'is_kunyomi' => 0,
                'character_id' => 273,
                'pronunciation' => 'RO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            365 => 
            array (
                'id' => 878,
                'is_kunyomi' => 1,
                'character_id' => 274,
                'pronunciation' => 'SHIKA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            366 => 
            array (
                'id' => 879,
                'is_kunyomi' => 1,
                'character_id' => 274,
                'pronunciation' => 'KA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            367 => 
            array (
                'id' => 880,
                'is_kunyomi' => 0,
                'character_id' => 274,
                'pronunciation' => 'ROKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            368 => 
            array (
                'id' => 881,
                'is_kunyomi' => 1,
                'character_id' => 275,
                'pronunciation' => 'MUGI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            369 => 
            array (
                'id' => 882,
                'is_kunyomi' => 0,
                'character_id' => 275,
                'pronunciation' => 'BAKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            370 => 
            array (
                'id' => 883,
                'is_kunyomi' => 1,
                'character_id' => 276,
                'pronunciation' => 'MUGI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            371 => 
            array (
                'id' => 884,
                'is_kunyomi' => 0,
                'character_id' => 276,
                'pronunciation' => 'BAKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            372 => 
            array (
                'id' => 885,
                'is_kunyomi' => 1,
                'character_id' => 277,
                'pronunciation' => 'ASA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            373 => 
            array (
                'id' => 886,
                'is_kunyomi' => 0,
                'character_id' => 277,
                'pronunciation' => 'MA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            374 => 
            array (
                'id' => 887,
                'is_kunyomi' => 0,
                'character_id' => 277,
                'pronunciation' => 'BA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            375 => 
            array (
                'id' => 888,
                'is_kunyomi' => 1,
                'character_id' => 278,
                'pronunciation' => 'KI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            376 => 
            array (
                'id' => 889,
                'is_kunyomi' => 0,
                'character_id' => 278,
                'pronunciation' => 'KOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            377 => 
            array (
                'id' => 890,
                'is_kunyomi' => 0,
                'character_id' => 278,
                'pronunciation' => 'OU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            378 => 
            array (
                'id' => 891,
                'is_kunyomi' => 1,
                'character_id' => 279,
                'pronunciation' => 'KI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            379 => 
            array (
                'id' => 892,
                'is_kunyomi' => 0,
                'character_id' => 279,
                'pronunciation' => 'KOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            380 => 
            array (
                'id' => 893,
                'is_kunyomi' => 0,
                'character_id' => 279,
                'pronunciation' => 'OU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            381 => 
            array (
                'id' => 894,
                'is_kunyomi' => 1,
                'character_id' => 280,
                'pronunciation' => 'KIBI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            382 => 
            array (
                'id' => 895,
                'is_kunyomi' => 0,
                'character_id' => 280,
                'pronunciation' => 'SHO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            383 => 
            array (
                'id' => 896,
                'is_kunyomi' => 1,
                'character_id' => 281,
                'pronunciation' => 'KUROI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            384 => 
            array (
                'id' => 897,
                'is_kunyomi' => 1,
                'character_id' => 281,
                'pronunciation' => 'KURO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            385 => 
            array (
                'id' => 898,
                'is_kunyomi' => 0,
                'character_id' => 281,
                'pronunciation' => 'KOKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            386 => 
            array (
                'id' => 899,
                'is_kunyomi' => 1,
                'character_id' => 282,
                'pronunciation' => 'KUROI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            387 => 
            array (
                'id' => 900,
                'is_kunyomi' => 1,
                'character_id' => 282,
                'pronunciation' => 'KURO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            388 => 
            array (
                'id' => 901,
                'is_kunyomi' => 0,
                'character_id' => 282,
                'pronunciation' => 'KOKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            389 => 
            array (
                'id' => 902,
                'is_kunyomi' => 1,
                'character_id' => 283,
                'pronunciation' => 'NッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            390 => 
            array (
                'id' => 903,
                'is_kunyomi' => 1,
                'character_id' => 283,
                'pronunciation' => 'NUI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            391 => 
            array (
                'id' => 904,
                'is_kunyomi' => 0,
                'character_id' => 283,
                'pronunciation' => 'CHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            392 => 
            array (
                'id' => 905,
                'is_kunyomi' => 1,
                'character_id' => 284,
                'pronunciation' => 'TSUTOMERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            393 => 
            array (
                'id' => 906,
                'is_kunyomi' => 1,
                'character_id' => 284,
                'pronunciation' => 'AOGAERU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            394 => 
            array (
                'id' => 907,
                'is_kunyomi' => 0,
                'character_id' => 284,
                'pronunciation' => 'BOU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            395 => 
            array (
                'id' => 908,
                'is_kunyomi' => 0,
                'character_id' => 284,
                'pronunciation' => 'BIN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            396 => 
            array (
                'id' => 909,
                'is_kunyomi' => 0,
                'character_id' => 284,
                'pronunciation' => 'BEN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            397 => 
            array (
                'id' => 910,
                'is_kunyomi' => 1,
                'character_id' => 285,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            398 => 
            array (
                'id' => 911,
                'is_kunyomi' => 0,
                'character_id' => 285,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            399 => 
            array (
                'id' => 912,
                'is_kunyomi' => 1,
                'character_id' => 286,
                'pronunciation' => 'KANAE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            400 => 
            array (
                'id' => 913,
                'is_kunyomi' => 1,
                'character_id' => 286,
                'pronunciation' => 'MASANI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            401 => 
            array (
                'id' => 914,
                'is_kunyomi' => 0,
                'character_id' => 286,
                'pronunciation' => 'TEI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            402 => 
            array (
                'id' => 915,
                'is_kunyomi' => 1,
                'character_id' => 287,
                'pronunciation' => 'TSUZUMI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            403 => 
            array (
                'id' => 916,
                'is_kunyomi' => 0,
                'character_id' => 287,
                'pronunciation' => 'KO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            404 => 
            array (
                'id' => 917,
                'is_kunyomi' => 1,
                'character_id' => 288,
                'pronunciation' => 'TSUZUMI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            405 => 
            array (
                'id' => 918,
                'is_kunyomi' => 0,
                'character_id' => 288,
                'pronunciation' => 'KO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            406 => 
            array (
                'id' => 919,
                'is_kunyomi' => 0,
                'character_id' => 288,
                'pronunciation' => 'KU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            407 => 
            array (
                'id' => 920,
                'is_kunyomi' => 1,
                'character_id' => 289,
                'pronunciation' => 'NEZUMI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            408 => 
            array (
                'id' => 921,
                'is_kunyomi' => 0,
                'character_id' => 289,
                'pronunciation' => 'SO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            409 => 
            array (
                'id' => 922,
                'is_kunyomi' => 0,
                'character_id' => 289,
                'pronunciation' => 'SHO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            410 => 
            array (
                'id' => 923,
                'is_kunyomi' => 1,
                'character_id' => 290,
                'pronunciation' => 'NEZUMI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            411 => 
            array (
                'id' => 924,
                'is_kunyomi' => 0,
                'character_id' => 290,
                'pronunciation' => 'SHO',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            412 => 
            array (
                'id' => 925,
                'is_kunyomi' => 1,
                'character_id' => 291,
                'pronunciation' => 'HANA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            413 => 
            array (
                'id' => 926,
                'is_kunyomi' => 0,
                'character_id' => 291,
                'pronunciation' => 'BI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            414 => 
            array (
                'id' => 927,
                'is_kunyomi' => 0,
                'character_id' => 291,
                'pronunciation' => 'HI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            415 => 
            array (
                'id' => 928,
                'is_kunyomi' => 1,
                'character_id' => 292,
                'pronunciation' => 'SOROU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            416 => 
            array (
                'id' => 929,
                'is_kunyomi' => 1,
                'character_id' => 292,
                'pronunciation' => 'HITOSHッI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            417 => 
            array (
                'id' => 930,
                'is_kunyomi' => 1,
                'character_id' => 292,
                'pronunciation' => 'HITOSHIKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            418 => 
            array (
                'id' => 931,
                'is_kunyomi' => 0,
                'character_id' => 292,
                'pronunciation' => 'SEI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            419 => 
            array (
                'id' => 932,
                'is_kunyomi' => 0,
                'character_id' => 292,
                'pronunciation' => 'SAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            420 => 
            array (
                'id' => 933,
                'is_kunyomi' => 0,
                'character_id' => 292,
                'pronunciation' => 'ZAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            421 => 
            array (
                'id' => 934,
                'is_kunyomi' => 1,
                'character_id' => 293,
                'pronunciation' => 'SOROU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            422 => 
            array (
                'id' => 935,
                'is_kunyomi' => 1,
                'character_id' => 293,
                'pronunciation' => 'HITOSHッI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            423 => 
            array (
                'id' => 936,
                'is_kunyomi' => 1,
                'character_id' => 293,
                'pronunciation' => 'HITOSHIKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            424 => 
            array (
                'id' => 937,
                'is_kunyomi' => 0,
                'character_id' => 293,
                'pronunciation' => 'SEI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            425 => 
            array (
                'id' => 938,
                'is_kunyomi' => 0,
                'character_id' => 293,
                'pronunciation' => 'ZAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            426 => 
            array (
                'id' => 939,
                'is_kunyomi' => 0,
                'character_id' => 293,
                'pronunciation' => 'SAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            427 => 
            array (
                'id' => 940,
                'is_kunyomi' => 1,
                'character_id' => 294,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            428 => 
            array (
                'id' => 941,
                'is_kunyomi' => 0,
                'character_id' => 294,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            429 => 
            array (
                'id' => 942,
                'is_kunyomi' => 1,
                'character_id' => 295,
                'pronunciation' => 'HA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            430 => 
            array (
                'id' => 943,
                'is_kunyomi' => 1,
                'character_id' => 295,
                'pronunciation' => 'YOWAI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            431 => 
            array (
                'id' => 944,
                'is_kunyomi' => 1,
                'character_id' => 295,
                'pronunciation' => 'YOWAISURU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            432 => 
            array (
                'id' => 945,
                'is_kunyomi' => 0,
                'character_id' => 295,
                'pronunciation' => 'SHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            433 => 
            array (
                'id' => 946,
                'is_kunyomi' => 1,
                'character_id' => 296,
                'pronunciation' => 'HA',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            434 => 
            array (
                'id' => 947,
                'is_kunyomi' => 0,
                'character_id' => 296,
                'pronunciation' => 'SHI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            435 => 
            array (
                'id' => 948,
                'is_kunyomi' => 1,
                'character_id' => 297,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            436 => 
            array (
                'id' => 949,
                'is_kunyomi' => 0,
                'character_id' => 297,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            437 => 
            array (
                'id' => 950,
                'is_kunyomi' => 1,
                'character_id' => 298,
                'pronunciation' => 'TATSU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            438 => 
            array (
                'id' => 951,
                'is_kunyomi' => 0,
                'character_id' => 298,
                'pronunciation' => 'RYッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            439 => 
            array (
                'id' => 952,
                'is_kunyomi' => 0,
                'character_id' => 298,
                'pronunciation' => 'ROU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            440 => 
            array (
                'id' => 953,
                'is_kunyomi' => 1,
                'character_id' => 299,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            441 => 
            array (
                'id' => 954,
                'is_kunyomi' => 0,
                'character_id' => 299,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            442 => 
            array (
                'id' => 955,
                'is_kunyomi' => 1,
                'character_id' => 300,
                'pronunciation' => 'KAME',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            443 => 
            array (
                'id' => 956,
                'is_kunyomi' => 0,
                'character_id' => 300,
                'pronunciation' => 'KI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            444 => 
            array (
                'id' => 957,
                'is_kunyomi' => 0,
                'character_id' => 300,
                'pronunciation' => 'KYッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            445 => 
            array (
                'id' => 958,
                'is_kunyomi' => 0,
                'character_id' => 300,
                'pronunciation' => 'KIN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            446 => 
            array (
                'id' => 959,
                'is_kunyomi' => 1,
                'character_id' => 301,
                'pronunciation' => 'KAME',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            447 => 
            array (
                'id' => 960,
                'is_kunyomi' => 0,
                'character_id' => 301,
                'pronunciation' => 'KI',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            448 => 
            array (
                'id' => 961,
                'is_kunyomi' => 0,
                'character_id' => 301,
                'pronunciation' => 'KYッU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            449 => 
            array (
                'id' => 962,
                'is_kunyomi' => 0,
                'character_id' => 301,
                'pronunciation' => 'KIN',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            450 => 
            array (
                'id' => 963,
                'is_kunyomi' => 1,
                'character_id' => 302,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            451 => 
            array (
                'id' => 964,
                'is_kunyomi' => 0,
                'character_id' => 302,
                'pronunciation' => '',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            452 => 
            array (
                'id' => 965,
                'is_kunyomi' => 1,
                'character_id' => 303,
                'pronunciation' => 'FUE',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
            453 => 
            array (
                'id' => 966,
                'is_kunyomi' => 0,
                'character_id' => 303,
                'pronunciation' => 'YAKU',
                'pronunciation_audio_link' => NULL,
                'created_at' => '2017-10-21 14:33:55',
                'updated_at' => '2017-10-21 14:33:55',
            ),
        ));
        
        
    }
}