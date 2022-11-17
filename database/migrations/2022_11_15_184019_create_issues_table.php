<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->id();

            $table->timestamps();

            $table->string('title');

            $table->string('description');

            $table->string('issue_type');

            $table->foreignId('priority')->constrained('issue_priorities');

            $table->foreignId('created_by')->constrained('users');

            $table->foreignId('closed_by')->constrained('users');

            $table->string('resolution_summary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('issues');
    }
};
