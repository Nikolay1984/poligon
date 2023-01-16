<?php

use App\Models\BlogCategory;
use Illuminate\Database\Seeder;

class BlogCategoriesTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $cName      = 'Not category';
        $categories = [
            [
                'title'       => $cName,
                'slug'        => str_slug( $cName ),
                'parent_id'   => 1,
                'description' => 'это родительская категория',
            ],
        ];

        for ( $i = 1; $i < 10; $i ++ ) {

            $cName     = "Category N-" . $i;
            $parent_id = ( $i > 4 ) ? rand( 2, 4 ) : 1;

            $categories[] = [
                'title'       => $cName,
                'slug'        => str_slug( 'slug - ' . $cName ),
                'parent_id'   => $parent_id,
                'description' => 'это категория с номером ' . $i,
            ];

        }

        \DB::table( 'blog_categories' )->insert( $categories );
    }
}
