<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmacies', function (Blueprint $table) {

            $table->id();
            $table->string('pharmacy_name')->notNull();
            $table->string('manager_name');
            $table->string('phone');
            $table->unique('email');
            $table->string('password');
            $table->string('city');
            $table->string('domain')->nullable();
            $table->string('location_lattude');
            $table->string('location_longtude');
            $table->string('notes');
            $table->string('logo');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pharmacies');
    }
};
