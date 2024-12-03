<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            [
                'name' => 'Lamisa',
                'email' => 'lamisa@xyz.com',
                'age' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Junaed',
                'email' => 'junaed@xyz.com',
                'age' => 26,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gazi',
                'email' => 'gazi@xyz.com',
                'age' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Avi',
                'email' => 'avi@xyz.com',
                'age' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nahian',
                'email' => 'nahian@xyz.com',
                'age' => 27,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}

