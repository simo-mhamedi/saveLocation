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
        Schema::create('points', function (Blueprint $table) {
            $table->id();
            $table->string('longitude')->nullable();
            $table->string('secteur')->nullable();
            $table->string('numero')->nullable();
            $table->string('latitude')->nullable();
            $table->string('image')->nullable();
            $table->string('code')->nullable();
            $table->string('categorie')->nullable();
            $table->string('arrondissement')->nullable();
            $table->string('typeReseux')->nullable();
            $table->string('etatReseau')->nullable();
            $table->string('etatCable')->nullable();
            $table->string('nf')->nullable();
            $table->string('typeSupport')->nullable();
            $table->integer('nombreConsole')->nullable();
            $table->string('etatSupport')->nullable();
            $table->string('dispositionSupport')->nullable();
            $table->string('hauteurSupport')->nullable();
            $table->string('etatLuminaire')->nullable();
            $table->string('puissanceA')->nullable();
            $table->string('puissanceB')->nullable();
            $table->string('puissanceC')->nullable();
            $table->string('puissanceD')->nullable();
            $table->string('ageSupport')->nullable();
            $table->string('support')->nullable();
            $table->string('ageReseau')->nullable();
            $table->string('reseau')->nullable();
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
        Schema::dropIfExists('point');
    }
};
