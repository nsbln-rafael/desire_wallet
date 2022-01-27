<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallet_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('wallet_id');
            $table->unsignedBigInteger('wallet_from_id')->nullable();
            $table->unsignedBigInteger('wallet_to_id')->nullable();
            $table->smallInteger('operation');
            $table->decimal('balance_old', 13, 4)->default(0);
            $table->decimal('balance_new', 13, 4)->default(0);
            $table->timestamps();
        });

        Schema::table('wallet_logs', function (Blueprint $table) {
            $table->foreign('wallet_id')->references('id')->on('wallets');
            $table->foreign('wallet_from_id')->references('id')->on('wallets');
            $table->foreign('wallet_to_id')->references('id')->on('wallets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wallet_logs');
    }
}
