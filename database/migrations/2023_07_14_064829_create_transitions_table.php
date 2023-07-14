<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transitions', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['income', 'expense'])->comment('အမျိုးအစား');
            $table->string('title')->comment('ခေါင်းစဉ်');
            $table->decimal('amount')->comment('ပမာဏ');
            $table->longText('description')->comment('ဖော်ပြချက်');
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
        Schema::dropIfExists('transitions');
    }
}
