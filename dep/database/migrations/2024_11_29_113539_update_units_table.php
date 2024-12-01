<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('units', function (Blueprint $table) {
            // Rename 'unit_name' to 'name'
            $table->renameColumn('unit_name', 'name');

            // Add new columns
            $table->text('description')->nullable()->after('name');
            $table->enum('status', ['Available', 'Occupied', 'Maintenance'])
                ->default('Available')
                ->after('description');

            // Drop 'location' if it's no longer needed
            $table->dropColumn('location');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('units', function (Blueprint $table) {
            // Revert changes
            $table->renameColumn('name', 'unit_name');
            $table->dropColumn('description');
            $table->dropColumn('status');
            $table->string('location')->nullable()->after('unit_name');
        });
    }
}
