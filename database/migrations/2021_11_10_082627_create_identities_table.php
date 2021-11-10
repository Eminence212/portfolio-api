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
            $table->string('phoneNumber')->unique();
            $table->text('adresse');
            $table->string('twitter')->unique();
            $table->string('linkedin')->unique();
            $table->string('facebook')->unique();
            $table->string('instagram')->unique();
            $table->string('skype')->unique();
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