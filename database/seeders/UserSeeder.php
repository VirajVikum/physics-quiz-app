<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=User::create([
            'name'=>'Super Admin',
            'email'=>'admin@gmail.com',
            'password'=> bcrypt('admin'),
            'user_type_id'=>'1',
        ]);

        $adminRole = Role::firstOrCreate(['name' => 'super-admin']);
        $user->assignRole($adminRole);
    }
}
