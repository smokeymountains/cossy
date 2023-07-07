<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('_project', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Title');
            $table->string('Descr');
            $table->string('meta');
            $table->tinyInteger('status')->default('0')->comment('0=Inprogress,1=Complete');
            $table->tinyInteger('popular')->default('0')->comment('0=Not Popular,1=Popular');
            $table->date('start');
            $table->date('End');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_project');
    }
};
