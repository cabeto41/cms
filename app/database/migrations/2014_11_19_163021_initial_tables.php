<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitialTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('sections',function (Blueprint $table)
		{
            $table->increments('id');
            $table->string('guid'); // cadena de tipo uniqueidentifier
 			$table->string('name'); // Our Company
 			$table->string('slug_url'); // Our Company
 			$table->boolean('menu')->default(false);
 			$table->tinyInteger('menu_order')->unsigned()->default(200);
 			$table->string('type'); // page, blog, products, gallery
 			$table->boolean('published')->default(false);
 			$table->string('created_by');
 			$table->string('update_by');
            $table->timestamps(); // created_at,updated_at
            $table->timestamp('published_at');
            $table->string('published_by');
            $table->softDeletes(); // deleted_at
        });

		Schema::create('pages',function (Blueprint $table)
		{
            $table->increments('id');
            $table->string('guid'); // cadena de tipo uniqueidentifier

            // table sections -> FK section_guid
            $table->integer('section_id')->unsigned()->nullable();
            $table->foreign('section_id')->references('id')->on('sections');

            $table->string('title'); // the Team
            $table->string('slug_url'); // the-team
			$table->tinyInteger('order_num')->unsigned()->default(200);
			$table->text('body'); // content
			$table->string('tab_title');
			$table->mediumText('meta_description')->nullable();

			$table->boolean('featured')->default(false);
 			$table->boolean('published')->default(false);
 			$table->timestamp('published_at');
            $table->string('published_by');

             $table->string('created_by');
 			$table->string('update_by');
 			$table->timestamps(); // created_at,updated_at
            $table->softDeletes(); // deleted_at
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
        Schema::drop('pages');
		Schema::drop('sections');
	}

}
