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
        Schema::create('delivery', function (Blueprint $table) {
            $table->id();
            $table->string('day')->nullable()->comment('วันที่ส่ง');
            $table->string('line')->nullable()->comment('line');
            $table->string('address')->nullable()->comment('ที่อยู่ลูกค้า');
            $table->string('quantity')->nullable()->comment('จำนวน');
            $table->string('details_delivery')->nullable()->comment('รายละเอียดการส่ง');
            $table->string('price')->nullable()->comment('ราคา');
            $table->integer('created_by')->nullable()->comment('user ที่เพิ่ม');
            $table->integer('updated_by')->nullable()->comment('user ที่แก้ไข');
            $table->integer('delete_by')->nulltable()->comment('user ที่ลบ');
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
        Schema::dropIfExists('delivery');
    }
};
