<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned()->index()->nullable();
            $table->char('cpf', 11)->unique();
            $table->string('name');
            $table->timestamps();
            // address
            $table->string('address1');
            $table->string('address2');
            $table->string('neighborhood');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            // phones
            $table->string('phone1');
            $table->string('phone2');

            $table->foreign('company_id')
                  ->references('id')->on('companies')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customers');
    }
}
