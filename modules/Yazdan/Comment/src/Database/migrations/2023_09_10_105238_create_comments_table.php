<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Yazdan\Comment\Repositories\CommentRepository;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            $table->morphs('commentable');

            $table->text("body");

            $table->enum("status", CommentRepository::$statues)
                ->default(CommentRepository::STATUS_NEW);

            $table->foreignId("user_id");
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");

            $table->foreignId("comment_id")->nullable();
            $table->foreign("comment_id")->references("id")->on("comments")->onDelete("cascade");

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
