@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

            <div class="card">
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Edit Data Form A</h4>
            </div>
            <div  class  = "panel-body">
            <form action = "{{url('customer/update', $customer->id_customer)}}" method = "post">
            <b>I. Data Pengawas Pemilihan: </b> <br>
                <div   class = "form-group">
                <label for   = "tahapan">Tahapan yang diawasi :</label>
                <input type  = "text" name = "tahapan" id = "tahapan" class = "form-control" required = "require">
                    </div>
                <div class="form-group">
                        <label for="nama">Nama Pelaksana Tugas</label>
                        <input type="text" name="nama" id="nama" value="{{$customer->nama}}" class="w-full py-2 rounded" required="require">
                    </div>
                    <div class="form-group">
                        <label for="nomor_surat">Nomor Surat</label>
                        <input type="text" name="nomor_surat" value="{{$customer->nomor_surat}}" id="nomor_surat" class="w-full py-2 rounded">
                    </div>
                    <div class="form-group">
                        <label for="tahun_surat">Tahun Surat</label>
                        <input type="text" name="tahun_surat" value="{{$customer->tahun_surat}}" id="tahun_surat" class="w-full py-2 rounded">
                    </div>
                    <div class="form-floating mb-4">
                        <label for="floatingInput">Jabatan :</label>
                        <input type="text" class="form-control" value="{{$customer->jabatan}}" id="jabatan" required name="jabatan">
                    </div>
                     <div class="form-floating mb-4">
                        <label for="floatingInput" id="label_noktp">Nomor Surat Perintah : </label>
                        <input type="number" class="form-control" value="{{$customer->nomor_surat_perintah}}" id="nomor_surat_perintah" required name="nomor_surat_perintah" >
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" value="{{$customer->alamat}}" id="alamat" class="w-full py-2 rounded">
                    </div>
                    
                <b>II. Kegiatan Pengawasan</b> <br>
                    <small>1. Kegiatan I</small><br>
                    <div class = "form-floating mb-4">
                        <label for="floatingInput">a. Bentuk :</label>
                        <input type="text" class="form-control bg-white" value="{{$customer->bentuk1}}" id="bentuk1"  name="bentuk1">
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">b. Tujuan :</label>
                    <input type  = "text" class = "form-control" id = "tujuan1" value = "{{$customer->tujuan1}}" required name = "tujuan1" >
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">c. Sasaran :</label>
                    <input type  = "text" class = "form-control" id = "sasaran1" value = "{{$customer->sasaran1}}" required name = "sasaran1" >
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">d. Waktu dan Tempat :</label>
                    <input type  = "text" class = "form-control" id = "waktudantempat1" value = "{{$customer->waktudantempat1}}" required name = "waktudantempat1" >
                    </div>

                   
               
                <b>Uraian Singkat Hasil Pengawasan</b> <br>
                    <div   class = "form-group mb-4">
                    <label for   = "floatingInput">Isi Uraian</label>
                    <input class = "form-control" placeholder = "uraian_singkat" name = "uraian_singkat" value = "{{$customer->uraian_singkat}}" id = "uraian_singkat" style = "height: 100px">
                    </div>

                <b>III. Informasi Dugaan Pelanggaran : </b> <br>
                <small>1. Peristiwa</small><br>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">a. Peristiwa :</label>
                    <input type  = "text" class = "form-control bg-white" id = "peristiwa" value = "{{$customer->peristiwa}}" required name = "peristiwa">
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">b. Tempat Kejadian :</label>
                    <input type  = "text" class = "form-control" id = "tempat_kejadian" value = "{{$customer->tempat_kejadian}}" required name = "tempat_kejadian" >
                    </div>
  
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">c. Waktu Kejadian : </label>
                    <input type  = "number" class = "form-control" id = "waktu_kejadian" value = "{{$customer->waktu_kejadian}}" required name = "waktu_kejadian" >
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingTextarea2">d. Pelaku :</label>
                    <input class = "form-control" placeholder = "pelaku" name = "pelaku" id = "pelaku" value = "{{$customer->pelaku}}" style = "height: 100px" >
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingTextarea2">e. Alamat :</label>
                    <input class = "form-control" placeholder = "alamat_peristiwa" name = "alamat_peristiwa" value = "{{$customer->alamat_peristiwa}}" id = "alamat_peristiwa" style = "height: 100px">
                    </div>

                    <small>2. Saksi-saksi</small><br>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">a. Nama :</label>
                    <input type  = "text" class = "form-control bg-white" id = "nama_saksi1" value = "{{$customer->nama_saksi1}}" required name = "nama_saksi1">
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput"> Alamat :</label>
                    <input type  = "text" class = "form-control" id = "alamat_Saksi1" value = "{{$customer->alamat_Saksi1}}" required name = "alamat_Saksi1" >
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">b. Nama :</label>
                    <input type  = "text" class = "form-control" id = "nama_saksi2" value = "{{$customer->nama_saksi2}}" required name = "nama_saksi2" >
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">Alamat :</label>
                    <input type  = "text" class = "form-control" id = "alamat_saksi2" value = "{{$customer->alamat_saksi2}}" required name = "alamat_saksi2" >
                    </div>

                    <small>3. Alat Bukti</small><br>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">a.</label>
                    <input type  = "text" class = "form-control bg-white" id = "alat_bukti_a" value = "{{$customer->alat_bukti_a}}" required name = "alat_bukti_a">
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">b.</label>
                    <input type  = "text" class = "form-control" id = "alat_bukti_b" value = "{{$customer->alat_bukti_b}}" required name = "alat_bukti_b" >
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">c.</label>
                    <input type  = "text" class = "form-control" id = "alat_bukti_c" value = "{{$customer->alat_bukti_c}}" required name = "alat_bukti_c" >
                    </div>


                    <small>4. Barang Bukti</small><br>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">a.</label>
                    <input type  = "text" class = "form-control bg-white" id = "barang_bukti_a" value = "{{$customer->barang_bukti_a}}" required name = "barang_bukti_a">
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">b.</label>
                    <input type  = "text" class = "form-control" id = "barang_bukti_b" value = "{{$customer->barang_bukti_b}}" required name = "barang_bukti_b" >
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">c.</label>
                    <input type  = "text" class = "form-control" id = "barang_bukti_c" value = "{{$customer->barang_bukti_c}}" required name = "barang_bukti_c">
                    </div>
             

                <b>Uraian Singkat Dugaan Pelanggaran</b> <br>
                    <div   class = "form-group mb-4">
                    <input class = "form-control" placeholder = "uraian singkat dugaan" value = "{{$customer->uraian_singkat_dugaan}}" id = "uraian_singkat_dugaan" style = "height: 100px" >
                    </div> 
                <b>Fakta dan Keterangan</b> <br>
                    <div   class = "form-group mb-4">
                    <input class = "form-control" value = "{{$customer->fakta}}" id = "fakta" style = "height: 50px" >
                    </div>
                <b>Analisa</b> <br>
                    <div   class = "form-group mb-4">
                    <input class = "form-control"  value = "{{$customer->analisa}}" name = "analisa" id = "analisa" style = "height: 50px" >
                    </div>
                    
                <b>V. Informasi Potensi Sengketa : </b> <br>
                <label>1. Peristiwa</label><br>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">a. Peristiwa Pemilu :</label>
                    <input type  = "text" class = "form-control bg-white" value = "{{$customer->peristiwa_pemilu}}" id = "peristiwa_pemilu"  required name = "peristiwa_pemilu">
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">b. Tempat Kejadian :</label>
                    <input type  = "text" class = "form-control" value = "{{$customer->tempat_kejadian_potensi}}" id = "tempat_kejadian_potensi" required name = "tempat_kejadian_potensi" >
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">c. Waktu Kejadian :</label>
                    <input type  = "text" class = "form-control" value = "{{$customer->waktu_kejadian_potensi}}" id = "waktu_kejadian_potensi" required name = "waktu_kejadian_potensi" >
                    </div>

                <label>2. Objek Sengketa</label><br>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">a. Bentuk Objek Sengketa :</label>
                    <input type  = "text" class = "form-control bg-white" value = "{{$customer->bentuk_objek_sengketa}}" id = "bentuk_objek_sengketa"  required name = "bentuk_objek_sengketa">
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">b. Identitas objek sengketa  :</label>
                    <input type  = "text" class = "form-control" value = "{{$customer->identitas_objek_sengketa}}" id = "identitas_objek_sengketa" required name = "identitas_objek_sengketa" >
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">c. Hari/tanggal dikeluarkan  :</label>
                    <input type  = "text" class = "form-control" value = "{{$customer->hari_dikeluarkan}}" id = "hari_dikeluarkan" required name = "hari_dikeluarkan" >
                    </div>
                    <div   class = "form-floating mb-4">
                    <label for   = "floatingInput">d. Kerugian Langsung  :</label>
                    <input type  = "text" class = "form-control" value = "{{$customer->kerugian_langsung}}" id = "kerugian_langsung" required name = "kerugian_langsung" >
                    </div>

                <b>3.	Uraian singkat potensi sengketa  </b> <br>
                    <div   class = "form-group mb-4">
                    <input class = "form-control" placeholder = "uraian singkat potensi sengketa" value = "{{$customer->uraian_singkat_sengketa}}" id = "uraian_singkat_sengketa" style = "height: 100px" >
                    </div>
                    
                    <div   class = "form-group">
                    <label for   = "tanggal_surat">Tanggal Surat :</label>
                    <input type  = "text" name = "tanggal_surat" value = "{{$customer->tanggal_surat}}" id = "tanggal_surat"  class = "w-full py-2 rounded" required = "require">
                    </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
              <!-- /.card -->
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
    <!-- /.content -->
</div>
@stop