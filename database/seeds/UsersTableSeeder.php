<?php


use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $data = [
            [
                'name'     => 'Дима',
                'email'    => 'dima@com.ru',
                'password' => bcrypt( 'dima' ),
            ],
            [
                'name'     => 'Петя',
                'email'    => 'petja@com.ru',
                'password' => bcrypt( 'petja' ),
            ],
        ];

        \DB::table( 'users' )->insert( $data );

    }
}
