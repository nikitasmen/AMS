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
        Schema::create('companies_jobs', function (Blueprint $table) {
            $table->foreignId('company_id')->constrained("companies")->cascadeOnDelete();
            $table->foreignId('job_id')->constrained("job_openings")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies_jobs');
    }
};
