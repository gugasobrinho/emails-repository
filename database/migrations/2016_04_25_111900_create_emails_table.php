<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsTable extends Migration
{
	public function up()
	{
		Schema::create('emails', function(Blueprint $table) {
        $table->bigIncrements('id')->unsigned();
  			$table->string('email')->nullable()->default(null);
  			$table->string('type_email')->nullable()->default(null);
  			$table->bigInteger('model_id')->unsigned();
  			$table->string('model_type')->nullable()->default(null);

        $table->timestamps();
		});
	}

	public function down()
	{
	    Schema::dropIfExists('emails');
	}
}
