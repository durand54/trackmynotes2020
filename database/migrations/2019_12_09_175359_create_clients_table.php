<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('propertyname');
            $table->string('groupname');
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('tollfree')->nullable();
            $table->string('email')->nullable();
            $table->string('web')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('title')->nullable();
            $table->string('contactphone')->nullable();
            $table->string('contactext')->nullable();
            $table->string('contactemail')->nullable();
            $table->string('numdays')->nullable();
            $table->string('numcatered')->nullable();
            $table->string('numNotcatered')->nullable();
            $table->string('numevents')->nullable();
            $table->string('assignment')->nullable();
            $table->string('lgstsqft')->nullable();
            $table->string('lgstname')->nullable();
            $table->string('todaysdate')->nullable();
            $table->text('groupnotes')->nullable();
            $table->string('groupstatus')->nullable();
            $table->string('eventweek')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     *             updating so we can test github
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
