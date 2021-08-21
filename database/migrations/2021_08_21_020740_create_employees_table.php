<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('fisrt_name');
            $table->string('middle_name')->nullable();
            $table->string('address');
            $table->string('departement_id')->constrainted();
            $table->string('country_id')->constrainted();
            $table->string('state_id')->constrainted();
            $table->string('city_id')->constrainted();
            $table->char('zip_code');
            $table->date('birthdate')->nullable();
            $table->date('date-hired')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
