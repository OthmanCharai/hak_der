<?php

use App\Enums\UserGender;
use App\Enums\UserNationalty;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Blade;
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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('partner_name');
            $table->string('partner_username');
            $table->date('partner_birth_day');
            $table->text('partner_birth_place');

            $table->enum('partner_gender',UserGender::getValues());
            $table->enum('partner_nationality',UserNationalty::getValues());
            $table->string('partner_sickness');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::table('partners',function(Blueprint $table){
            $table->dropForeign('partners_user_id_foreign');
        });
        Schema::dropIfExists('partners');
    }
};
