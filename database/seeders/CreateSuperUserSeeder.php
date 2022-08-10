<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class CreateSuperUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url='https://cdn.notinoimg.com/images/gallery/spage/HBO_BB_PARF_22_Logo_BOSS_Black_RGB_20220602_26.png';
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin',
            'password' => Hash::make('Password123#@!'),
            'avatar'=>$url,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ]);

        Role::create([
            'name' => 'admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $admin->assignRole('admin');

    }
}
