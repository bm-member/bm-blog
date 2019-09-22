<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            'PHP',
            'Java',
            'Python',
            'SQL'
        ];

        foreach($datas as $data) {
            $cat = new Category();
            $cat->name = $data;
            $cat->save();
        }

    }
}
