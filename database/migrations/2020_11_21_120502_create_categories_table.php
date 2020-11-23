<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->json('flags')->nullable();
            $table->string('title',255)->nullable();
            $table->string('slug',255)->nullable();
            $table->string('url_slug',255)->nullable();
            $table->string('status',255)->nullable()->default('False');
            $table->bigInteger('order')->nullable()->default(-1)->comment('Category Order');
            $table->bigInteger('parent_category_id')->nullable()->default(-1)->comment('Parent Category');
            $table->longText('description')->nullable();
            $table->string('type',255)->nullable();
            
            $table->string('icon',255)->nullable();
            $table->string('thumbnail',255)->nullable();
            $table->string('image',255)->nullable();

            $table->string('seo_image',255)->nullable();
            $table->string('seo_canonical_url',255)->nullable();
            $table->string('seo_site',255)->nullable();
            $table->string('seo_type',255)->nullable();
            $table->string('seo_property',255)->nullable();
            $table->string('seo_locale',255)->nullable();
            $table->string('seo_separator',255)->nullable();
            $table->string('seo_title',255)->nullable();
            $table->string('seo_description',255)->nullable();
            $table->softDeletes();

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
        Schema::dropIfExists('categories');
    }
}
