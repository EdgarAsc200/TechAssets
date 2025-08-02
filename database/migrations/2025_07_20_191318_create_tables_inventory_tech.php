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
        //
        Schema::create('categories', function (Blueprint $table) {
    $table->id();
    $table->string('name', 50);
    $table->timestamps();
});

        Schema::create('device_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('category_id')->contrained('categories');
            $table->string('brand');
            $table->string('model');
            $table->string('operative_system');
            $table->string('arquitecture', 10);
            $table->timestamps();
        });

        Schema::create('devices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('device_model_id')->contrained('device_models');
            $table->string('serie',250);
            $table->float('price');
            $table->integer('memory_ram')->nullable();
            $table->integer('storage')->nullable();
            $table->string('antivirus_version')->nullable();
            $table->string('office_version');
            $table->boolean('active_directory_enable')->nullable()->default(false);
            $table->timestamps();
        });

        Schema::create('personales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('last_name_1');
            $table->string('last_name_2');
            $table->string('email');
            $table->timestamps();
        });

        Schema::create('warehouses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('street');
            $table->integer('street_number')->unsigned()->nullable()->default(12);
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->timestamps();
        });
        Schema::create('assets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('device_id')->contrained('devices');
            $table->foreignId('personal_id')->contrsaiained('personales');
            $table->foreignId('warehouse_id')->contrained('warehouses');
            $table->foreignId('user_id')->contrained('users');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     * 
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('devices');
        Schema::dropIfExists('device_models');
        Schema::dropIfExists('personales');
        Schema::dropIfExists('warehouses');
        Schema::dropIfExists('assets');
    }
};
