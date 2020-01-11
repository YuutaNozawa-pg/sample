<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateShopPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_positions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('shop_id');
            $table->string('lat');
            $table->string('lng');
            $table->timestamps();
        });

        Schema::table('shop_positions', function (Blueprint $table) {
            DB::statement("ALTER TABLE shop_positions ADD COLUMN position geometry GENERATED ALWAYS AS (ST_GeometryFromText('POINT(lng lat)', 4326)) STORED AFTER lng");
        });

        
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_positions');
    }
}
