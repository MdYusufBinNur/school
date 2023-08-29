<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->collation('utf8_unicode_ci')->nullable();
            $table->string('member_type')->collation('utf8_unicode_ci')->nullable(); //member,committee
            $table->string('designation')->collation('utf8_unicode_ci')->nullable(); //principle,senior teacher
            $table->string('mobile')->collation('utf8_unicode_ci')->nullable(); //+880******
            $table->string('department')->collation('utf8_unicode_ci')->nullable(); //science, commerce
            $table->string('image')->nullable();

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
        Schema::dropIfExists('members');
    }
}
