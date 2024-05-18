<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('form_requests', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->text('description')->nullable();
            $table->string('document_path')->nullable();
            $table->string('status')->default('pending');
            $table->integer('quantity')->default(1);
            $table->decimal('total_amount', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('form_requests');
    }
}
