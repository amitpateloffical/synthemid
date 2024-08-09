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
        Schema::table('print_histories', function (Blueprint $table) {
            $table->text('document_printed_copies');
            $table->string('issuance_to');
            $table->text('issued_copies');
            $table->text('issued_reason');
            $table->text('department');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('print_histories', function (Blueprint $table) {
            //
        });
    }
};