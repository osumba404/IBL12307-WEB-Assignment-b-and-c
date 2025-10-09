<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->timestamp('enrolled_on')->nullable();
            $table->string('status')->default('active'); // active / dropped
            $table->timestamps();

            $table->unique(['student_id', 'course_id']); // prevent duplicates
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
