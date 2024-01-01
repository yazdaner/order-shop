<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Yazdan\Seller\App\Http\Requests\SellerRequest;
use Yazdan\Seller\Repositories\SellerRepository;

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

            $table->foreignId('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string("shop_name");
            $table->string("slug")->unique();
            $table->string("seller_name");
            $table->string("postal_code");

            $table->text("address");

            $table->string('national_number');
            $table->string('mobile');
            $table->string('card_number');
            $table->string('sheba_number');

            $table->text("description")->nullable();

            $table->enum("status", SellerRepository::$statues)->default(SellerRepository::STATUS_NEW);

            // nullable -> step 2

            $table->text("body")->nullable();
            $table->foreignId('media_id')->nullable();
            $table->foreign('media_id')->references('id')->on('media')->onDelete('cascade');
            // gallery

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
