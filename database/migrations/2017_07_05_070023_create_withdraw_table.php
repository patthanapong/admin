<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWithdrawTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdraws', function(Blueprint $table) {
      $table->increments('id');
      $table->string('username');//ชื่อลูกค้า
      $table->string('balance');//ยอดเงิน
      $table->string('bankwithdraw');//ถอนเข้าธนาคาร
      $table->string('accountnumberwithdraw');//ถอนเข้าเลขที่บัญชี
      $table->string('accountnamewithdraw');//ถอนเข้าชื่อบัญชี
      $table->datetime('datetime');//วันเวลาที่ฝาก
      $table->string('channelwithdraw');//ช่องทางการถอน
      $table->string('tel');//เบอร์โทร
      $table->string('opinion');//ความคิดเห็น
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
        Schema::dropIfExists('withdraws');
    }
}
