<?php

use App\Models\Layout;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLayoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layouts', function (Blueprint $table) {
            $table->id();
            $table->string('primaryColor')->nullable();
            $table->string('secondaryColor')->nullable();
            $table->string('bgImage')->nullable();
            $table->string('bgColor')->nullable();
            
            $table->string('profileImageDiv')->nullable();
            $table->string('profileImage')->nullable();

            $table->string('userDetailsDiv')->nullable();
            $table->string('userNameDiv')->nullable();
            $table->string('userName')->nullable();

            $table->string('linksContainer')->nullable();
            $table->string('linksDiv')->nullable();
            $table->string('linkIcon')->nullable();
            $table->string('linkText')->nullable();
            
            $table->timestamps();
        });

        Layout::create([
            'primaryColor' => '#008080',
            'secondaryColor' => '#399fe4',
            'bgImage' => 'images/yellow.jpg',
            'bgColor' => 'red',
            'profileImageDiv' => 'flex flex-col items-center',
            'profileImage'  => 'h-32 w-32 rounded-full shadow-xl',
            'userDetailsDiv' => 'bg-white rounded-md p-6 -mt-12',
            'userNameDiv' => 'flex flex-col items-center',
            'userName' => 'font-bold mt-3 pl-4 uppercase text-gray-800',
            'linksContainer' => 'mt-12',
            'linksDiv' => 'social-links flex rounded-xl mb-4 gap-2',
            'linkIcon' => 'icon w-1/4 justify-center flex rounded-md py-2 bg-blue-400',
            'linkText' => 'py-2 bg-white rounded-md text text-center w-full text-gray-700'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('layouts');
    }
}
