<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCreatedByToDiscussionCommentsTable extends Migration
{
    public function up()
    {
        Schema::table('discussion_comments', function (Blueprint $table) {
            $table->unsignedBigInteger('created_by')->after('discussion_id');

            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('discussion_comments', function (Blueprint $table) {
            $table->dropForeign(['created_by']);
            $table->dropColumn('created_by');
        });
    }
}
