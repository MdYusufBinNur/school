<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCornerMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corner_messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->collation('utf8_unicode_ci')->nullable();
            $table->string('designation')->collation('utf8_unicode_ci')->nullable();
            $table->string('group')->collation('utf8_unicode_ci')->nullable();
            $table->longText('message')->collation('utf8_unicode_ci')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('corner_messages');
    }
}
