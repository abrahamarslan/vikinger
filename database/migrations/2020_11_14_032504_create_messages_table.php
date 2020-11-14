<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->json('flags')->nullable();
            $table->string('event_type',255)->nullable();
            $table->enum('is_for_me',['0','1'])->nullable()->comment('0 - For me, 1 - Sent by me');
            $table->string('status',255)->nullable()->default('False');
            $table->bigInteger('chat_session')->nullable()->default(0)->comment('Chat Session ID');
            $table->bigInteger('last_session')->nullable()->default(0)->comment('Last Chat Session ID');
            $table->bigInteger('media_id')->nullable()->default(0)->comment('Media Table ID');
            $table->json('message_info')->nullable()->comment('Message meta info');
            $table->bigInteger('parent_message')->nullable()->default(0)->comment('Parent Message ID');
            $table->timestamp('message_date')->useCurrent();
            $table->timestamp('sent_date')->useCurrent();
            $table->foreignId('from_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('to_id')->constrained('users')->onDelete('cascade');
            $table->string('push_name',255)->nullable();
            $table->longText('message')->nullable();
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
        Schema::dropIfExists('messages');
    }
}
