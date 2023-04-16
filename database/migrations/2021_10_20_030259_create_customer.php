<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id('id_customer');
            $table->string('nama', 200);
            $table->string('nomor_surat', 200);
            $table->string('tahun_surat', 200);
            $table->string('tahapan', 250);
            $table->string('jabatan', 200);
            $table->string('role', 100);
            $table->string('nomor_surat_perintah', 200);
            $table->string('alamat', 200);
            $table->string('bentuk1', 200);
            $table->string('tujuan1', 200);
            $table->string('sasaran1', 200);
            $table->string('waktudantempat1', 200);
            $table->string('uraian_singkat', 200);
            $table->string('peristiwa', 200);
            $table->string('tempat_kejadian', 200);
            $table->string('waktu_kejadian', 200);
            $table->string('pelaku', 200);
            $table->string('alamat_peristiwa', 200);
            $table->string('nama_saksi1', 200);
            $table->string('alamat_Saksi1', 200);
            $table->string('nama_saksi2', 200);
            $table->string('alamat_saksi2', 200);
            $table->string('alat_bukti_a', 200);
            $table->string('alat_bukti_b', 200);
            $table->string('alat_bukti_c', 200);
            $table->string('barang_bukti_a', 200);
            $table->string('barang_bukti_b', 200);
            $table->string('barang_bukti_c', 200);
            $table->string('uraian_singkat_dugaan', 200);
            $table->string('fakta', 200);
            $table->string('peristiwa_pemilu', 200);
            $table->string('tempat_kejadian_potensi', 200);
            $table->string('waktu_kejadian_potensi', 200);
            $table->string('bentuk_objek_sengketa', 200);
            $table->string('identitas_objek_sengketa', 200);
            $table->string('hari_dikeluarkan', 200);
            $table->string('kerugian_langsung', 200);
            $table->string('uraian_singkat_sengketa', 200);
            $table->string('tanggal_surat', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
