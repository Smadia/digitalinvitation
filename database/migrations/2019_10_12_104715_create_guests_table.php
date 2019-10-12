<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('event_id')
                ->unsigned();
            $table->foreign('event_id')
                ->references('id')
                ->on('events')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->bigInteger('identity_id')
                ->unsigned()
                ->nullable();
            $table->foreign('identity_id')
                ->references('id')
                ->on('identities')
                ->onUpdate('cascade')
                ->onDelete('set null');
            $table->string('name');
            $table->string('slug');
            $table->string('phone')
                ->nullable();
            $table->string('email')
                ->nullable();
            $table->text('address')
                ->nullable();
            $table->timestamp('confirmed_web_at')
                ->nullable();
            $table->timestamp('confirmed_arrival_at')
                ->nullable();
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
        Schema::dropIfExists('guests');
    }
}
