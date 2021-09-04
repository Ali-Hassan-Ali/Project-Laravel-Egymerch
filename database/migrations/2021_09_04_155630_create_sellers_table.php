<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone');
            $table->string('country');
            
            $table->double('printing_field')->default('0');
            $table->double('redbubble')->default('0');
            $table->double('merch_by_amazon')->default('0');
            $table->double('etsy')->default('0')->default('0');
            $table->double('teespring')->default('0');
            $table->double('spreadshirt')->default('0');
            $table->double('zazzle')->default('0');
            $table->double('teepublic')->default('0');
            $table->double('others')->default('0');
            
            $table->string('work_online');
            $table->string('make_designs_use');
            $table->string('usually_get_traffic');
            $table->string('stores_links');

            $table->text('about_yourself');

            $table->rememberToken();
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
        Schema::dropIfExists('sellers');
    }
}
