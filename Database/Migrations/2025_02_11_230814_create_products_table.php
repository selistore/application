<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
  * Run the migrations.
  */
  public function up() {
    Schema::create('products', function (Blueprint $table) {
      $table->id();
      $table->unsignedInteger('printful_id');
      $table->foreignId('main_category_id')->constrained();
      $table->string('type');
      $table->string('name');
      $table->string('brand');
      $table->string('model');
      $table->string('image');
      $table->integer('variant_count');
      $table->boolean('is_discontinued');
      $table->text('description');
      $table->softDeletes();
      $table->timestamps();
    });

    Schema::create('sizes', function (Blueprint $table) {
      $table->id();
      $table->unsignedInteger('printful_id');
      $table->foreignId('product_id')->constrained();
      $table->string('size');
      $table->softDeletes();
      $table->timestamps();
    });

    Schema::create('colors', function (Blueprint $table) {
      $table->id();
      $table->unsignedInteger('printful_id');
      $table->foreignId('product_id')->constrained();
      $table->string('name');
      $table->string('value');
      $table->softDeletes();
      $table->timestamps();
    });

    Schema::create('techniques', function (Blueprint $table) {
      $table->id();
      $table->unsignedInteger('printful_id');
      $table->foreignId('product_id')->constrained();
      $table->string('key');
      $table->string('display_name');
      $table->boolean('is_default');
      $table->softDeletes();
      $table->timestamps();
    });

    Schema::create('placements', function (Blueprint $table) {
      $table->id();
      $table->unsignedInteger('printful_id');
      $table->foreignId('product_id')->constrained();
      $table->string('placement');
      $table->string('technique');
      $table->integer('print_area_width');
      $table->integer('print_area_height');
      $table->softDeletes();
      $table->timestamps();
    });

    Schema::create('layers', function (Blueprint $table) {
      $table->id();
      $table->unsignedInteger('printful_id');
      $table->foreignId('placement_id')->constrained();
      $table->string('type');
      $table->json('layer_options');
      $table->softDeletes();
      $table->timestamps();
    });

    Schema::create('placement_options', function (Blueprint $table) {
      $table->id();
      $table->unsignedInteger('printful_id');
      $table->foreignId('placement_id')->constrained();
      $table->string('name');
      $table->json('techniques');
      $table->string('type');
      $table->json('values');
      $table->softDeletes();
      $table->timestamps();
    });

    Schema::create('product_options', function (Blueprint $table) {
      $table->id();
      $table->unsignedInteger('printful_id');
      $table->foreignId('product_id')->constrained();
      $table->string('name');
      $table->json('techniques');
      $table->string('type');
      $table->json('values');
      $table->softDeletes();
      $table->timestamps();
    });

    Schema::create('variants', function (Blueprint $table) {
      $table->id();
      $table->unsignedInteger('printful_id');
      $table->unsignedInteger('catalog_product_id');
      $table->string('name');
      $table->string('size');
      $table->string('color');
      $table->string('color_code');
      $table->string('color_code2')->nullable();
      $table->string('image');
      $table->foreignId('product_id')->constrained();
      $table->softDeletes();
      $table->timestamps();
    });
  }

  /**
  * Reverse the migrations.
  */
  public function down() {
    Schema::dropIfExists('product_options');
    Schema::dropIfExists('placement_options');
    Schema::dropIfExists('layers');
    Schema::dropIfExists('placements');
    Schema::dropIfExists('techniques');
    Schema::dropIfExists('colors');
    Schema::dropIfExists('sizes');
    Schema::dropIfExists('products');
  }
};