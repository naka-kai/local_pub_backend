<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained() // 外部キー制約
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('name', 255);
            $table->text('content')->nullable(); // null許容
            $table->string('tel')->nullable(); // null許容
            $table->text('address');
            $table->string('sns')->nullable(); // null許容
            $table->string('photo')->nullable(); // null許容
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
        Schema::dropIfExists('shops');
    }
}
