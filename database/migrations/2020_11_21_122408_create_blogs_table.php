<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {

            $table->id();

            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->json('flags')->nullable();
            $table->string('title',255)->nullable();
            
            $table->string('slug',255)->nullable();
            $table->string('url_slug',255)->nullable();
            $table->longText('body')->nullable();
            $table->json('tags')->nullable();

            $table->boolean('status',255)->nullable()->default(true);
            $table->string('post_status',255)->nullable()->default('published');
            $table->timestamp('published_at')->nullable()->useCurrent();

            $table->boolean('show_in_homepage')->nullable()->default(0);
            $table->boolean('allow_comments')->nullable()->default(true);
            $table->boolean('featured')->nullable()->default(0);
            $table->boolean('approved')->nullable()->default(true);

            $table->bigInteger('hits')->nullable()->default(0)->comment('Blog Post Views');
            $table->json('reactions')->nullable()->comment('Reactions data');
            $table->json('shares')->nullable()->comment('Share data');

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
        Schema::dropIfExists('blogs');
    }
}
