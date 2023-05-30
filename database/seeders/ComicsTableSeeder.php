<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('db.comics');
        //dd($comics);
        foreach ($comics as $comic) {
           $newComic = new Comic();
           $newComic->title = $comic['title'];
           $newComic->description = $comic['description'];
           $newComic->thumb = $comic['thumb'];
           $newComic->price = $comic['price'];
           $newComic->series = $comic['series'];
           $newComic->sale_date = $comic['sale_date'];
           $newComic->type = $comic['type'];
           $newComic->artists = json_encode($comic['artists']); // Converti gli artisti in JSON
           $newComic->writers = json_encode($comic['writers']); // Converti gli scrittori in JSON
           $newComic->save();
        }
    }
}
