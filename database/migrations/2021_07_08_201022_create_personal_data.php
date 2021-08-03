<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_data', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('mobile_phone');
            $table->text('designation');
            $table->string('company_name');
            $table->text('company_address');
            $table->string('company_phone');
            $table->string('email');
            $table->string('province_origin');
            $table->string('industry');
            $table->string('industry_type');
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
        Schema::dropIfExists('personal_data');
    }
}
