<?php

use App\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach ( $comics as $c ) {

            $comic = new Comic();

            $comic->title = $c['title'];
            $comic->description = $c['description'];
            $comic->img = $c['thumb'];
            $comic->price = $c['price'];
            $comic->series = $c['series'];
            $comic->date = $c['sale_date'];
            $comic->type = $c['type'];

            $comic->save();

        }
    }
}
