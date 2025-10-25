
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

        // Buat tabel persyaratan_dokumen
        Schema::create('persyaratan_dokumen', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kode')->unique();
            $table->text('deskripsi')->nullable();
            $table->boolean('wajib')->default(true);
            $table->string('tipe_file')->default('pdf');
            $table->integer('ukuran_max')->default(2048);
            $table->timestamps();
        });

        // Buat tabel pengajuans
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_pengajuan')->unique();
            $table->foreignId('user_id');
            $table->enum('jenis', ['DD', 'ADD']);
            $table->string('tahun_anggaran', 4);
            $table->enum('status', ['draft', 'diajukan', 'diproses', 'disetujui', 'ditolak'])->default('draft');
            $table->timestamps();
            
            // Tambah foreign key setelah tabel dibuat
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Buat tabel dokumen_pengajuans
        Schema::create('dokumen_pengajuans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pengajuan_id');
            $table->foreignId('persyaratan_id');
            $table->string('path');
            $table->string('nama_asli');
            $table->timestamps();
            
            // Tambah foreign key setelah tabel dibuat
            $table->foreign('pengajuan_id')->references('id')->on('pengajuans')->onDelete('cascade');
            $table->foreign('persyaratan_id')->references('id')->on('persyaratan_dokumen')->onDelete('cascade');
        });

        // Buat tabel review_dokumens
        Schema::create('review_dokumens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dokumen_pengajuan_id');
            $table->foreignId('reviewer_id');
            $table->enum('status', ['disetujui', 'ditolak'])->nullable();
            $table->text('catatan')->nullable();
            $table->timestamps();
            
            // Tambah foreign key setelah tabel dibuat
            $table->foreign('dokumen_pengajuan_id')->references('id')->on('dokumen_pengajuans')->onDelete('cascade');
            $table->foreign('reviewer_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review_dokumens');
        Schema::dropIfExists('dokumen_pengajuans');
        Schema::dropIfExists('pengajuans');
        Schema::dropIfExists('persyaratan_dokumen');
        
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'nama_desa', 'nama_kecamatan']);
        });
    }
};