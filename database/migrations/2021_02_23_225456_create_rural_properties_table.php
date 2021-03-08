<?php

use App\Models\City;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRuralPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rural_properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('street');
            $table->enum('city', City::getCities());
            $table->string('zip_code');
            $table->double('latitude', 11,8);
            $table->double('longitude', 11,8);
            $table->string('phone');
            $table->foreignId('user_id')->constrained();
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
        Schema::dropIfExists('rural_properties');
    }
}
