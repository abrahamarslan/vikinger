<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freplies', function (Blueprint $table) {
            $table->id();

            $table->foreignId('fpost_id')->constrained('fposts')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->json('flags')->nullable();
            $table->string('title',255)->nullable();
            
            $table->string('slug',255)->nullable();
            $table->string('url_slug',255)->nullable();
            $table->longText('body')->nullable();
            $table->json('tags')->nullable();

            $table->boolean('status',255)->nullable()->default(true);
            $table->string('post_status',255)->nullable()->default('published');
            $table->timestamp('published_at')->nullable()->useCurrent();

            $table->boolean('featured')->nullable()->default(0);
            $table->boolean('approved')->nullable()->default(true);

            $table->bigInteger('is_reply')->nullable()->default(0)->comment('Is this a reply to another comment?');            
            $table->bigInteger('is_reply_id')->nullable()->default(-1)->comment('If it is a resply, then id of the comment');                        
            $table->string('badge',255)->nullable();

            $table->bigInteger('reported')->nullable()->default(0)->comment('Reports of forum post');
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
        Schema::dropIfExists('freplies');
    }
}