<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('samples', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->length(11)->default(null)->nullable(false)->comment('ユーザーID');
            $table->integer('sample_id')->unique('idx_samples_sample_id')->length(11)->default(null)->nullable(false)->comment('サンプルID');
            $table->integer('production_id')->index('idx_samples_production_id')->length(11)->default(null)->nullable(false)->comment('商品ID');
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
        Schema::dropIfExists('samples');
    }
}
