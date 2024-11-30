<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Title of the report
            $table->string('type'); // Type of the report, e.g., "Maintenance", "Staffing"
            $table->unsignedBigInteger('generated_by'); // User who generated the report
            $table->foreign('generated_by')->references('id')->on('users')->onDelete('cascade');
            $table->timestamp('generated_at'); // Timestamp when the report was generated
            $table->enum('status', ['Pending', 'Completed', 'Failed']); // Status of the report
            $table->text('description')->nullable(); // Additional details or description
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reports');
    }
};
