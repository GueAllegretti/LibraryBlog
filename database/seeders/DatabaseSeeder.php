<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        $books = [
            0 => ["Pinocchio", "Collodi C."],
            1 => ["Sulla natura", "Epicuro"],
            2 => ["Le tragedie", "Seneca"],
            3 => ["Palinsesto", "Anonimo"],
            4 => ["Manoscritto", "Anonimo"],
            5 => ["Opuscolo", "Anonimo"],
            6 => ["Pergamena", "Anonimo"],
        ];

        foreach($books as $book) {
            DB::table('books')->insert([
                'title'=>$book[0],
                'author'=>$book[1],
            ]);
        }
    }
}
