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
            'name'           => config('auth.admins.superadmin.username'),
            'first_name'     => config('auth.admins.superadmin.first_name'),
            'last_name'      => config('auth.admins.superadmin.last_name'),
            'email'          => config('auth.admins.superadmin.email'),
            'password'       => bcrypt(config('auth.admins.superadmin.password')),
            'bio'            => 'Superadmin user',
            'address_line_1' => config('auth.admins.superadmin.address_line_1'),
            'address_line_2' => config('auth.admins.superadmin.address_line_2'),
            'city'           => config('auth.admins.superadmin.city'),
            'state'          => config('auth.admins.superadmin.state'),
            'postal_code'    => config('auth.admins.superadmin.postal_code'),
            'birthday'       => \Carbon\Carbon::parse('1980-08-03'),
            'active_at'      => \Carbon\Carbon::now(),
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
