<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Tag;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $tag_names=[
           'BackEnd',
           'CiberSecurity',
           'FrontEnd',
           'Sistemista',
           'UI',
           'RisorseUmane',
           'DevelopManager',
           'Designer',
           'DevOps'
        ];

        foreach ($tag_names as $name) {
            $new_tag=new Tag();
            $new_tag->name=$name;
            $new_tag->color=$faker->hexColor();
            $new_tag->save();
        }
    }
}
