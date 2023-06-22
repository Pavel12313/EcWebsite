<?php

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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name',100)->nullable(false);
            $table->integer('price')->nullable(false);
            $table->string('taxkbn',1)->nullable();
            $table->string('souryou',1)->nullable();
            $table->text('details')->nullable(false);
            $table->string('cate1',50)->nullable();
            $table->string('cate2',50)->nullable();
            $table->string('cate3',50)->nullable();
            $table->string('size',20)->nullable();
            $table->string('status',20)->nullable();
            $table->string('haisou',50)->nullable();
            $table->string('tiiki',20)->nullable();
            $table->string('niisu',50)->nullable();
            $table->string('syuppin',50)->nullable();
            $table->string('imgfile1',100)->nullable();
            $table->string('imgfile2',100)->nullable();
            $table->string('imgfile3',100)->nullable();
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
        Schema::dropIfExists('products');
    }
};
