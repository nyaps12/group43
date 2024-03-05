<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    // Creating Super Admin User
    $superAdmin = User::create([
      'name' => 'Super Admin',
      'email' => 'superadmin@yahoo.com',
      'password' => Hash::make('superadmin123'),
    ]);
    $superAdmin->assignRole('Super Admin');

    // Creating Admin User
    $admin = User::create([
      'name' => 'Admin',
      'email' => 'admin@yahoo.com',
      'password' => Hash::make('admin123'),
    ]);
    $admin->assignRole('Admin');

    // Creating Product Manager User
    $Driver = User::create([
      'name' => 'Driver',
      'email' => 'Driver@yahoo.com',
      'password' => Hash::make('driver123'),
    ]);
    $Driver->assignRole('Driver');
  }
}
