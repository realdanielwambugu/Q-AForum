<?php

Namespace App\Database\Migrations;

use Xcholars\Support\Proxies\Schema;

use Xcholars\Database\Schema\Blueprint;

class CreateQuestionsTable
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table)
        {
            $table->id();

            $table->integer('group_id');

            $table->integer('user_id');

            $table->string('question');

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
        Schema::drop('questions');
    }
}
