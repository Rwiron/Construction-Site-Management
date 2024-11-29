<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenancesTable extends Migration
{
    public function up()
    {
        Schema::create('maintenances', function (Blueprint $table) {
            $table->id();
            $table->string('maintenance_type');
            $table->text('description')->nullable();
            $table->enum('status', ['Pending', 'In Progress', 'Completed'])->default('Pending');
            $table->foreignId('assigned_to')->nullable()->constrained('users')->onDelete('set null');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->enum('priority', ['Low', 'Medium', 'High'])->default('Medium');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('maintenances');
    }
}
