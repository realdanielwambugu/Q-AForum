<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class CreateSettingsTable
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table)
        {
            $table->id();

            $table->string('email')->default('hotel@gmail.com');

            $table->string('phone')->default('0700 000 000');

            $table->string('website')->default('hotel.com');

            $table->text('about_us')->default('
               Lorem ipsum dolor sit amet, consectetur adipiscing elit.
               Ac eget pellentesque adipiscing adipiscing sit.
               Lectus aliquam eu a morbi varius non congue arcu,
               ornare. Quis pulvinar nec ante lectus tellus arcu.
               Adipiscing nulla mattis quisque non nibh maecenas.
            ');

            $table->timestamps();
        });

    }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::drop('settings');
    }
}
