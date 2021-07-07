<?php

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('about')->nullable();;
            $table->string('slug')->nullable()->unique();
            $table->string('website')->nullable();
            $table->integer('layout_id')->default(1);
            $table->string('mobile')->nullable();
            $table->string('avatar')->nullable()->default('default.png');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        User::create([
            'name' => 'Vimal Bharti',
            'email' => 'vimal@gmail.com',
            'password' => Hash::make('password'),
            'about' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab veniam magnam consequuntur iste amet perspiciatis, doloremque minima facere error'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
