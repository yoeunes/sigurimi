<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;

class CreateDefaultAdminUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        User::create([
            'name' => config('auth.admins.superadmin.name'),
            'email' => config('auth.admins.superadmin.email'),
            'password' => bcrypt(config('auth.admins.superadmin.password')),
            'birthday' => \Carbon\Carbon::parse('1980-08-03'),
            'active_at' => \Carbon\Carbon::now(),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        User::truncate();
    }
}
