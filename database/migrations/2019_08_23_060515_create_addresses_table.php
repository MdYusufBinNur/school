<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('school_code')->collation('utf8_unicode_ci')->nullable();
            $table->string('college_code')->collation('utf8_unicode_ci')->nullable();
            $table->string('phone')->collation('utf8_unicode_ci')->nullable();
            $table->string('ein_no')->collation('utf8_unicode_ci')->nullable();
            $table->longText('address')->collation('utf8_unicode_ci')->nullable();
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
        Schema::dropIfExists('addresses');
    }
}
