<?php

namespace Database\Seeders;

use Illuminate\Http\Request;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Request $request)
    {
        $role = new Role();

      $role->name = $request->role;
      $role->save();
      return back();
    }
}
