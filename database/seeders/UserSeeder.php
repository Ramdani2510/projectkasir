<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kasirRole = UserRole::where('nama_role', 'kasir')->first();

        if ($kasirRole) {
            
            User::create([
                'user_role_id' => $kasirRole->id,
                'name' => 'Kasir 1',
                'email' => 'kasirsalapan@gmail.com',
                'password' => Hash::make('ninekasir9'), 
            ]);
        } else {
            $this->command->error('Role "kasir" tidak ditemukan. Jalankan UserRoleSeeder terlebih dahulu.');
        }
    }
}
