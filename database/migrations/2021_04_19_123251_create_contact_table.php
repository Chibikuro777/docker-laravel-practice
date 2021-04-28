<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('last_name', 100)->comment('姓');
            $table->string('first_name', 100)->comment('名');
            $table->string('last_name_kana', 100)->comment('セイ');
            $table->string('first_name_kana', 100)->comment('メイ');
            $table->string('zip', 20)->comment('郵便番号');
            $table->string('address', 255)->comment('住所');
            $table->string('telephone', 30)->comment('電話番号');
            $table->string('email', 255)->comment('メールアドレス');
            $table->text('user_agent')->comment('応募者使用機種');
            $table->string('ip_address', 50)->comment('応募者IPアドレス');
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
        Schema::dropIfExists('contacts');
    }
}
