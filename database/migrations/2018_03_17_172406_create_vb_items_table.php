<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVbItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vb_items', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('type_id');
            $table->integer('status_id');
            $table->integer('user_id');

            $table->boolean('calculate');
            $table->float('cost');

            $table->text('notes');

            $table->string('windows_license');
            $table->string('office_license');
            $table->string('serial_number');
            $table->string('imei_number');
            $table->string('express_code');
            $table->string('service_tag');
            $table->string('vb_number')->unique();

            $table->timestamp('warranty_start')->nullable();
            $table->timestamp('warranty_end')->nullable();
            $table->timestamps();
        });

        Schema::create('vb_item_history', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('vb_item_id');
            $table->integer('subtype_id');
            $table->integer('status_id');
            $table->integer('user_id');

            $table->boolean('calculate');
            $table->float('cost');

            $table->text('notes');

            $table->string('windows_license');
            $table->string('office_license');
            $table->string('serial_number');
            $table->string('imei_number');
            $table->string('express_code');
            $table->string('service_tag');
            $table->string('vb_number')->unique();

            $table->timestamp('warranty_start')->nullable();
            $table->timestamp('warranty_end')->nullable();
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
        Schema::dropIfExists('vb_items');
    }
}
