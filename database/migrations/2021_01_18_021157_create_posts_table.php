<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->dateTimeTz('date')
                ->nullable()
                ->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('slug', 512);
            $table->string('link', 512)->unique();
            $table->text('content');
            $table->string('thumbnail', 512)->nullable();
            $table->string('image', 512)->nullable();
            $table->string('author')->nullable();
            $table->foreignId('post_source_id')
                ->constrained();
            $table->integer('visits')->default(0);

            $table->timestampsTz();
            $table->softDeletesTz();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
