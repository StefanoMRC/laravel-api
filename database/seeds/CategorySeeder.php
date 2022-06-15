<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories=[
            ['name'=>'HTML', 'color'=>'danger'],
            ['name'=>'CSS', 'color'=>'info'],
            ['name'=>'JAVASCRIPT', 'color'=>'success'],
            ['name'=>'VUE', 'color'=>'primary'],
        ];
        foreach ($categories as $category) {
            $newCategory= new Category();
            $newCategory->name=$category['name'];
            $newCategory->color=$category['color'];
            $newCategory->save();
        }
    }
}
