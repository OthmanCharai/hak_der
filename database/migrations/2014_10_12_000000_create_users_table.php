<?php

use App\Enums\UserGender;
use App\Enums\UserNationalty;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('username');
            $table->date('birth_day');
            $table->enum('gender',UserGender::getValues());
            $table->enum('nationality',UserNationalty::getValues())->nullable();
            $table->string('sickness')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->text('address');
            $table->string('zip_code');
            $table->string('residence')->nullable();
            $table->string('furnale_place')->nullable();
            $table->string('phone_number');
            $table->string('mobile_number');
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
        Schema::dropIfExists('users');
    }
};
