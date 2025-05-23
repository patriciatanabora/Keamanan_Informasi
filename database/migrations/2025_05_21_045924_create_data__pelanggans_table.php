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
        Schema::create('Data_Pelanggan', function (Blueprint $table) {
    	$table->id();
    	$table->string('nama_pelanggan');
    	$table->text('alamat_pelanggan')->nullable();
    	$table->string('dokumen_pelanggan')->nullable(); // Untuk menyimpan path dokumen
    	$table->timestamps();
	});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data__pelanggans');
    }
};
