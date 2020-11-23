<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            $table->foreignId('blog_id')->constrained('blogs')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->bigInteger('parent_comment_id')->nullable()->default(-1)->comment('Parent Comment');

            $table->json('flags')->nullable();                    
            $table->string('title',255)->nullable();
            $table->longText('body')->nullable();
            $table->boolean('is_hidden')->nullable()->default(false);                    

            $table->json('reactions')->nullable();                    
            $table->json('shares')->nullable();                    
            $table->json('report')->nullable()->comment('Reported data');
            
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
        Schema::dropIfExists('comments');
    }
}
