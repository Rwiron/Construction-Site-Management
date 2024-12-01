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
        Schema::create('utilities', function (Blueprint $table) {
            $table->id();
            $table->string('utility_name'); // Name of the utility (e.g., electricity, water)
            $table->text('description')->nullable(); // Description of the utility
            $table->enum('status', ['Active', 'Inactive'])->default('Active'); // Status of the utility
            $table->float('cost')->nullable(); // Cost of the utility
            $table->date('billing_date')->nullable(); // Billing date for the utility
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilities');
    }
};
