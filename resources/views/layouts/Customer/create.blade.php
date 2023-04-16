@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- /.card -->
              <section>
    <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Tambahkan Laporan Form A</h3>
    </div>
    <div class = "container">
    <div class = "panel panel-default">
    <div class = "panel-heading container" >
                <center>
                <b >FORM. A</b> <br>
                <b>LAPORAN HASIL PENGAWASAN PEMILU</b> <br>
                <b>NOMOR: ../LHP/PM.00.02/JL.34/00/20..</b> <br>
                <center>
            </div>

            <div  class  = "card-body">
            <form action = "{{url('customer')}}" method = "POST" enctype = "multipart/form-data">
            <div  class  = "form-group">
            <div   class = "form-group">
            <label for   = "nomor_surat">Nomor Surat :</label>
            <input type  = "text" name = "nomor_surat" id = "nomor_surat"  class="w-full py-2 rounded" required = "require">
            </div>
            
            <div   class = "form-group">
            <label for   = "tahun_surat">Tahun Surat :</label>
            <input type  = "text" name = "tahun_surat" id = "tahun_surat"  class = "w-full py-2 rounded" required = "require">
            </div>
                <b>I. Data Pengawas Pemilihan: </b> <br>
                    <div class="form-group">
                        <label for="tahapan">Tahapan yang diawasi :</label>
                        <input type="text" name="tahapan" id="tahapan" class="form-control" required="require">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama Pelaksana Tugas Pengawasan :</label>
                        <input type="text" name="nama" id="nama" class="form-control" required="require">
                    </div>

                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">Jabatan :</label>
                    <input type  = "text" class = "form-control" id = "jabatan" required name = "jabatan">
                    </div>

                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput" id = "label_noktp">Nomor Surat Perintah Tugas : </label>
                    <input type  = "number" class     = "form-control" id = "nomor_surat_perintah" required name = "nomor_surat_perintah" >
                   </div>

                    <div class="form-group">
                        <label for="alamat">Alamat :</label>
                        <input type="text" name="alamat" id="alamat" class="form-control">
                    </div>
                    
                    <b>II. Kegiatan Pengawasan</b> <br>
                    <!-- <small>1. Kegiatan I</small><br> -->
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">a. Bentuk :</label>
                    <input type  = "text" class = "form-control bg-white" id = "bentuk1"  name = "bentuk1">
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">b. Tujuan :</label>
                    <input type  = "text" class = "form-control" id = "tujuan1" required name = "tujuan1" >
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">c. Sasaran :</label>
                    <input type  = "text" class = "form-control" id = "sasaran1" required name = "sasaran1" >
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">d. Waktu dan Tempat :</label>
                    <input type  = "text" class = "form-control" id = "waktudantempat1" required name = "waktudantempat1" >
                    </div>
              
                <b>Uraian Singkat Hasil Pengawasan</b> <br>
                    <div   class = "form-group mb-4">
                    <input class = "form-control" placeholder = "uraian singkat" name = "uraian_singkat" id = "uraian_singkat" style = "height: 100px">
                    </div>

                <b>III. Informasi Dugaan Pelanggaran : </b> <br>
                <small>1. Peristiwa</small><br>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">a. Peristiwa :</label>
                    <input type  = "text" class = "form-control bg-white" id = "peristiwa"  required name = "peristiwa">
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">b. Tempat Kejadian :</label>
                    <input type  = "text" class = "form-control" id = "tempat_kejadian" required name = "tempat_kejadian" >
                    </div>
  
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">c. Waktu Kejadian : </label>
                    <input type  = "text" class = "form-control" id = "waktu_kejadian" required name = "waktu_kejadian" >
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingTextarea2">d. Pelaku :</label>
                    <input class = "form-control" placeholder = "pelaku" name = "pelaku" id = "pelaku">
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingTextarea2">e. Alamat :</label>
                    <input class = "form-control" name = "alamat_peristiwa" id = "alamat_peristiwa">
                    </div>

                    <small>2. Saksi-saksi</small><br>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">a. Nama :</label>
                    <input type  = "text" class = "form-control bg-white" id = "nama_saksi1"  required name = "nama_saksi1">
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput"> Alamat :</label>
                    <input type  = "text" class = "form-control" id = "alamat_Saksi1" required name = "alamat_Saksi1" >
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">b. Nama :</label>
                    <input type  = "text" class = "form-control" id = "nama_saksi2" required name = "nama_saksi2" >
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">Alamat :</label>
                    <input type  = "text" class = "form-control" id = "alamat_saksi2" required name = "alamat_saksi2" >
                    </div>

                    <small>3. Alat Bukti</small><br>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">a.</label>
                    <input type  = "text" class = "form-control bg-white" id = "alat_bukti_a"  required name = "alat_bukti_a">
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">b.</label>
                    <input type  = "text" class = "form-control" id = "alat_bukti_b" required name = "alat_bukti_b" >
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">c.</label>
                    <input type  = "text" class = "form-control" id = "alat_bukti_c" required name = "alat_bukti_c" >
                    </div>


                    <small>4. Barang Bukti</small><br>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">a.</label>
                    <input type  = "text" class = "form-control bg-white" id = "barang_bukti_a"  required name = "barang_bukti_a">
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">b.</label>
                    <input type  = "text" class = "form-control" id = "barang_bukti_b" required name = "barang_bukti_b" >
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">c.</label>
                    <input type  = "text" class = "form-control" id = "barang_bukti_c" required name = "barang_bukti_c">
                    </div>
             

                <b>Uraian Singkat Dugaan Pelanggaran</b> <br>
                    <div   class = "form-group mb-4">
                    <input class = "form-control" placeholder = "uraian singkat dugaan" name = "uraian_singkat_dugaan" id = "uraian_singkat_dugaan" style = "height: 100px" >
                    </div> 
                <b>Fakta dan Keterangan</b> <br>
                    <div   class = "form-group mb-4">
                    <input class = "form-control" name = "fakta" id = "fakta" style = "height: 50px" >
                    </div>
                <b>Analisa</b> <br>
                    <div   class = "form-group mb-4">
                    <input class = "form-control"  name = "analisa" id = "analisa" style = "height: 50px" >
                    </div>
                    
                <b>V. Informasi Potensi Sengketa : </b> <br>
                <label>1. Peristiwa</label><br>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">a. Peristiwa Pemilu :</label>
                    <input type  = "text" class = "form-control bg-white" id = "peristiwa_pemilu"  required name = "peristiwa_pemilu">
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">b. Tempat Kejadian :</label>
                    <input type  = "text" class = "form-control" id = "tempat_kejadian_potensi" required name = "tempat_kejadian_potensi" >
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">c. Waktu Kejadian :</label>
                    <input type  = "text" class = "form-control" id = "waktu_kejadian_potensi" required name = "waktu_kejadian_potensi" >
                    </div>

                <label>2. Objek Sengketa</label><br>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">a. Bentuk Objek Sengketa :</label>
                    <input type  = "text" class = "form-control bg-white" id = "bentuk_objek_sengketa"  required name = "bentuk_objek_sengketa">
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">b. Identitas objek sengketa  :</label>
                    <input type  = "text" class = "form-control" id = "identitas_objek_sengketa" required name = "identitas_objek_sengketa" >
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">c. Hari/tanggal dikeluarkan  :</label>
                    <input type  = "text" class = "form-control" id = "hari_dikeluarkan" required name = "hari_dikeluarkan" >
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">d. Kerugian Langsung  :</label>
                    <input type  = "text" class = "form-control" id = "kerugian_langsung" required name = "kerugian_langsung" >
                    </div>

                <b>3.	Uraian singkat potensi sengketa  </b> <br>
                    <div   class = "form-group mb-4">
                    <input class = "form-control" placeholder = "uraian singkat potensi sengketa" name = "uraian_singkat_sengketa" id = "uraian_singkat_sengketa" style = "height: 100px" >
                    </div>
                    
                    <div   class = "form-group">
                    <label for   = "tanggal_surat">Tanggal Surat :</label>
                    <input type  = "text" name = "tanggal_surat" id = "tanggal_surat"  class = "w-full py-2 rounded" required = "require">
                    </div>
                    <small>Malang, </small><br>
                    <small>Pelaksana Tugas,</small><br>
                    <!-- <div class="form-group">
                        <button type="submit" name="submit" id="submit" value="Simpan" class="px-3 py-2 text-white bg-green-600" >{!!csrf_field()!!}
                    </div> -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
                    </div>  
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
    <!-- /.content -->
    @stop
                
  
