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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId("sub_category_id")->constrained("subсategories")->onDelete('cascade');
            $table->string("name");
            $table->text("description");
            $table->string("adrss");
            $table->float("budget");
            $table->foreignId("user_id")->constrained("users")->onDelete('cascade');
            $table->dateTime("time");
            $table->integer("status")->default(0);
            $table->boolean("edited")->default(false);
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
        Schema::dropIfExists('orders');
    }
};
