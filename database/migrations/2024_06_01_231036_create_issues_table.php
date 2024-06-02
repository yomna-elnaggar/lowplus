<?php


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('issue_number')->nullable();
            $table->date('issue_date')->nullable();
            $table->string('responsible_employee')->nullable();
            $table->string('issue_amount')->nullable();
            
            $table->longText('files')->nullable();
            
            $table->string('contender_name')->nullable();
            $table->string('contender_phone')->nullable();
            $table->string('contender_address')->nullable();
            $table->string('contender_attorney')->nullable();
            $table->string('contender_attorney_phone')->nullable();

            $table->string('court')->nullable();
            $table->string('judge_name')->nullable();
            $table->string('court_city')->nullable();
            $table->string('court_crcle')->nullable();
            $table->string('pleading_degree')->nullable();

            $table->foreignId('customer_id')->nullable()->references('id')->on('customers')->onDelete('cascade');
            $table->foreignId('issues_case_id')->nullable()->references('id')->on('issues_cases')->onDelete('cascade');
            $table->foreignId('issues_phase_id')->nullable()->references('id')->on('issues_phases')->onDelete('cascade');
            $table->foreignId('isues_type_id')->nullable()->references('id')->on('isues_types')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issues');
    }
};
