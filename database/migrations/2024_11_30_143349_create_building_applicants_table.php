<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building_applicants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Link to users table
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->enum('status', ['Submitted', 'Under Review', 'Approved', 'Rejected'])->default('Submitted');
            $table->json('documents')->nullable(); // Store uploaded documents
            $table->timestamp('applied_at')->useCurrent();
            $table->timestamps(); // Laravel's created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('building_applicants');
    }
}
