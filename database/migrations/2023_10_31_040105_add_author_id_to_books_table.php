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
        Schema::table('books', function (Blueprint $table) {
            //buat kolom author_id
            $table->foreignIdFor(\App\Models\Author::class)
                ->nullable()
                ->after('id')
                ->references('id')
                ->on('authors')
                ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            //hapus kolom author_id
            $table->dropColumn('author_id');
        });
    }
};
