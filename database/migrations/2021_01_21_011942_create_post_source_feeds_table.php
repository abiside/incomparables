<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostSourceFeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_source_feeds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_source_id')
                ->constrained();
            $table->string('feed');
            $table->timestampsTz();
            $table->softDeletesTz();

            $table->unique(['post_source_id', 'feed']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_source_feeds');
    }
}
