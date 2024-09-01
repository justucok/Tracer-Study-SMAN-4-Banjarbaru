<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * varchar 100
     * date
     * varchar 250
     * string 12
     */
    public function up(): void
    {
        Schema::create('alumni', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birth');
            $table->string('address');
            $table->string('phone');
            $table->year('graduate');
            $table->string('class');
            $table->string('university');
            $table->string('major');
            $table->string('job');
            $table->string('office_address');
            $table->string('achievement');
            $table->string('instagram_account');
            $table->string('facebook_account');
            $table->string('other_account');
            $table->text('image_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumni');
    }
};
