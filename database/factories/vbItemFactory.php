<?php

use Faker\Generator as Faker;

$factory->define(App\Models\VbItem::class, function (Faker $faker) {
    return [

    ];
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
