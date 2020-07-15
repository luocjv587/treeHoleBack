<?php

use Hyperf\Database\Schema\Schema;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Migrations\Migration;

class Init extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('letter', function (Blueprint $table) {
            $table->increments('id');
            $table->text('letter_info')->comment('信内容');
            $table->integer('like')->comment('喜爱数')->default(0);
            $table->integer('get')->comment('获取次数')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('', function (Blueprint $table) {
            //
        });
    }
}
