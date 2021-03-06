<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        // Create the table.
        Schema::create('user_types', function($table) {
            $table->increments('id');
            $table->string('user_type', 128);
            $table->string('description', 256);

            // Laravel columns
            $table->timestamps();
            $table->softDeletes();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Drop the table
		Schema::drop('user_types');
	}

}
