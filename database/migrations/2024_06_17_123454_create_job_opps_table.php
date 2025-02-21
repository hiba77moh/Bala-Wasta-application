<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_opps', function (Blueprint $table) {
            $table->id();
            $table->string('job_description')->nullable();
            $table->string('job_requirements')->nullable();
            $table->string('responsibility')->nullable();
            $table->integer('number_of_vacancies')->nullable();
            // $table->addColumn('salary1', 'salary2')->nullable();
            // $table->integer('salary_range')->nullable();
            $table->integer('years_of_experiences')->nullable();
            $table->string('address')->nullable();
            $table->integer('min_age')->nullable();
            $table->integer('max_age')->nullable();
            $table->string('salary');
            $table->enum('gender', ['male', 'female'])->nullable();  //all  
            $table->enum('job_type', ['onsite', 'remote'])->nullable();
            $table->boolean('portfolio_check')->nullable();
            $table->foreignId('company_id')->cascadeOnDelete();
            $table->foreignId('city_id')->cascadeOnDelete();
            $table->foreignId('job_level_id')->nullable()->cascadeOnDelete();
            $table->foreignId('job_title_id')->nullable()->cascadeOnDelete();
            $table->foreignId('job_idustry_id')->nullable()->cascadeOnDelete();
            $table->foreignId('education_level_id')->nullable()->cascadeOnDelete();
            $table->foreignId('job_type_id')->nullable()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_opps');
    }
};