<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('fullname', 200);
            $table->tinyInteger('gender')->comment('1:男性、2:女性');
            $table->integer('age_id')->comment('agesのidが入る');
            $table->string('email', 255);
            $table->tinyInteger('is_send_email')->comment('1:送信許可、2:送信不可');
            $table->text('feedback');
            $table->timestamps();
            $table->date('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
