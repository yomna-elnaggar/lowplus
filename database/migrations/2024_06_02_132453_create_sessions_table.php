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
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->dateTime('sessionDateTime')->nullable();
            $table->text('session_require')->nullable();
            $table->string('session_link')->nullable();
            $table->text('note')->nullable();
            $table->longText('files')->nullable();
            
            $table->string('court')->nullable();
            $table->string('judge_name')->nullable();
            $table->string('court_city')->nullable();
            $table->string('court_crcle')->nullable();
            $table->string('pleading_degree')->nullable();
            $table->foreignId('issue_id')->nullable()->references('id')->on('issues')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
