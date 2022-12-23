<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use App\Models\Cocktail;
use Illuminate\Database\Seeder;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cocktails = Helpers::read_csv(__DIR__ . '/../../config/cocktails.csv');

        foreach ($cocktails as $index => $cocktail_row) {
            if ($index === 0) {
                continue;
            }

            [$name, $technique] = $cocktail_row;

            $cocktail = new Cocktail();
            $cocktail->name = $name;
            $cocktail->technique = $technique;
            $cocktail->save();
        }
    }
}
