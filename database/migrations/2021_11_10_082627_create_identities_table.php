<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identities', function (Blueprint $table) {
            $table->id();
            $table->string('firstName')->unique();
            $table->string('lastName')->unique();
            $table->string('email')->unique();
            $table->string('phoneNumber')->unique();
            $table->text('adresse');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('skype');
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
        Schema::dropIfExists('identities');

   }
}