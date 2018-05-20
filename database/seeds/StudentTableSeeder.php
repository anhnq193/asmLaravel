<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('students') -> insert([
            [
                'rollNumber' => 'D12332',
                'name' => 'Quốc Anh',
                'phone' => '8234234',
                'email' => 'quocanh@gmail.com'
            ],
            [
                'rollNumber' => 'D83974',
                'name' => 'Trung Việt',
                'phone' => '2353433',
                'email' => 'trungviet@gmail.com'
            ],
            [
                'rollNumber' => 'D37482',
                'name' => 'Lê Kiên',
                'phone' => '345322',
                'email' => 'lekien@gmail.com'
            ],
            [
                'rollNumber' => 'D98374',
                'name' => 'Thu Hương',
                'phone' => '2341892',
                'email' => 'thuhuong@gmail.com'
            ],
            [
                'rollNumber' => 'D89723',
                'name' => 'Phương Trang',
                'phone' => '456232',
                'email' => 'phuongtrang@gmail.com'
            ]
        ]);
    }
}
