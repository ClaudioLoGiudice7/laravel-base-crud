<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;
use Faker\Generator as Faker;

class songsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $new_song = new Song;

        $new_song->title = "Coloratura";
        $new_song->album = "Music Of The Spheres";
        $new_song->author = "Coldplay";
        $new_song->editor = "Parlophone UK";
        $new_song->length = 10.18;
        $new_song->poster = "../../resources/img/MusicOfTheSpheres.jpg";
        $new_song->release_date = "July 21, 2021";
        $new_song->cover = false;

        $new_song->save();


        $new_song = new Song;

        $new_song->title = "Devil In Her Heart";
        $new_song->album = "With The Beatles";
        $new_song->author = "The Beatles";
        $new_song->editor = "Parlophone";
        $new_song->length = 2.26;
        $new_song->poster = "../../resources/img/DevilInHerHeart.jpg";
        $new_song->release_date = "November 22, 1963";
        $new_song->cover = true;

        $new_song->save();


        $new_song = new Song;

        $new_song->title = "Matilda";
        $new_song->album = "Harry's House";
        $new_song->author = "Harry Styles";
        $new_song->editor = "Columbia Records";
        $new_song->length = 4.05;
        $new_song->poster = "../../resources/img/Harry'sHouse.png";
        $new_song->release_date = "May 20, 2022";
        $new_song->cover = false;

        $new_song->save();


        $new_song = new Song;

        $new_song->title = "Seven Seas Of Rhye";
        $new_song->album = "Queen II";
        $new_song->author = "Queen";
        $new_song->editor = "EMI";
        $new_song->length = 2.47;
        $new_song->poster = "../../resources/img/QueenII.jpg";
        $new_song->release_date = "February 25, 1974";
        $new_song->cover = false;

        $new_song->save();


        $new_song = new Song;

        $new_song->title = "Wednesday Morning, 3 A.M.";
        $new_song->album = "Wednesday Morning, 3 A.M.";
        $new_song->author = "Simon & Garfunkel";
        $new_song->editor = "Columbia Records";
        $new_song->length = 2.13;
        $new_song->poster = "../../resources/img/WednesdayMorning3AM.jpg";
        $new_song->release_date = "October 19, 1964";
        $new_song->cover = false;

        $new_song->save();


        $new_song = new Song;

        $new_song->title = "Out Of My System";
        $new_song->album = "Faith In The Future";
        $new_song->author = "Louis Tomlinson";
        $new_song->editor = "BMG";
        $new_song->length = 2.17;
        $new_song->poster = "../../resources/img/FaithInTheFuture.jpg";
        $new_song->release_date = "October 14, 2022";
        $new_song->cover = false;

        $new_song->save();


        $new_song = new Song;

        $new_song->title = "I Want To Write You A Song";
        $new_song->album = "Made In The A.M.";
        $new_song->author = "One Direction";
        $new_song->editor = "Columbia Records";
        $new_song->length = 2.59;
        $new_song->poster = "../../resources/img/MadeInTheAM.jpg";
        $new_song->release_date = "October 14, 2022";
        $new_song->cover = false;

        $new_song->save();


        $new_song = new Song;

        $new_song->title = "Still";
        $new_song->album = "Heartbreak Weather";
        $new_song->author = "Niall Horan";
        $new_song->editor = "Capitol Records";
        $new_song->length = 4.11;
        $new_song->poster = "../../resources/img/HearrtbreakWeather.jpg";
        $new_song->release_date = "March 13, 2020";
        $new_song->cover = false;

        $new_song->save();


        $new_song = new Song;

        $new_song->title = "Story Of My Life (Glee Cast Version)";
        $new_song->album = "The Back-Up Plan (EP)";
        $new_song->author = "Glee Cast";
        $new_song->editor = "Twentieth Century Fox";
        $new_song->length = 4.02;
        $new_song->poster = "../../resources/img/Glee.jpg";
        $new_song->release_date = "April 23, 2014";
        $new_song->cover = true;

        $new_song->save();

        
        $new_song = new Song;

        $new_song->title = "Pointless";
        $new_song->album = "Pointless EP";
        $new_song->author = "Lewis Capaldi";
        $new_song->editor = "Vertigo Records";
        $new_song->length = 3.48;
        $new_song->poster = "../../resources/img/Pointless.jpg";
        $new_song->release_date = "December 2, 2022";
        $new_song->cover = false;

        $new_song->save();
        

        for ($i=0; $i < 100; $i++) { 
            $new_song = new Song;

            $new_song->title = $faker->words(3, true);
            $new_song->album = $faker->words(4, true);
            $new_song->author = $faker->words(2, true);
            $new_song->editor = $faker->words(2, true);
            $new_song->length = $faker->time();
            $new_song->poster = "https://picsum.photos/200/300";
            $new_song->release_date = $faker->dateTime();
            $new_song->cover = $faker->boolean();

            $new_song->save();
        }      
    }
}