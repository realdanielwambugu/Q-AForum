<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class CreateAnswersTable
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table)
        {
            $table->id();

            $table->integer('user_id');

            $table->string('question_id');

            $table->string('answer');

            $table->string('image');

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
        Schema::drop('answers');
    }
}
