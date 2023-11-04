<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('armoirs', function (Blueprint $table) {
            $table->id();
            $table->string('longitude')->nullable();
            $table->string('secteur')->nullable();
            $table->string('numero')->nullable();
            $table->string('numeroCompteur')->nullable();
            $table->string('calibre')->nullable();
            $table->string('tension')->nullable();
            $table->string('typeCommande')->nullable();
            $table->string('nombreDepart')->nullable();
            $table->string('puissance')->nullable();
            $table->string('latitude')->nullable();
            $table->string('image')->nullable();
            $table->string('conformite')->nullable();
            $table->string('source')->nullable();
            $table->string('arrondissement')->nullable();
            $table->string('observation')->nullable();
            $table->string('type')->nullable();
            $table->boolean('isGenerated')->default(false);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('armoir');
    }
};
