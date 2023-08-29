<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContactPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_pages', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('name')->collation('utf8_unicode_ci')->nullable();
            $table->string('email')->collation('utf8_unicode_ci')->nullable();
            $table->string('phone')->collation('utf8_unicode_ci')->nullable();
            $table->string('subject')->collation('utf8_unicode_ci')->nullable();
            $table->longText('message')->collation('utf8_unicode_ci')->nullable();
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
        Schema::dropIfExists('contact_pages');
    }
}
