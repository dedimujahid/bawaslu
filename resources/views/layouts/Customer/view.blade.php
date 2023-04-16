<title>  Data Form A</title>

        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Data Form A
            </h2>
            

        </x-slot>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        
    <div class="container">
        <div class="panel panel-default">
            
            <div class="panel-heading">
            <a href="{{route('cetak_pdf')}}" class="btn btn-primary" target="_blank"><i class="fa fa-print"></i>CETAK PDF</a>
                <b>FORM. A</b> <br>
                <b>LAPORAN HASIL PENGAWASAN PEMILU</b> <br>
                <b>NOMOR :    /LHP/PM.00.02/JL.34/00/2023</b> <br>
            </div>
            </div>
            <div class="panel-body">
                <form action="{{url('customer/view', $customer->id_customer)}}" method="post">

                <div class="form-group ">
                        <label for="nama">Nama Pelaksana Tugas : </label>
                        <td class="px-6 py-4 border-b border-gray-200">{{ $customer->nama }}</td>
                    </div>
                    <div class="form-group mb-4">
                        <label for="nomor_telepon">Nomor Telepon : </label>
                        <td class="px-6 py-4 border-b border-gray-200">{{ $customer->nomor_telepon }}</td>
                    </div>
                    <div class="form-group mb-4">
                        <label for="email">Email : </label>
                        <td class="px-6 py-4 border-b border-gray-200">{{ $customer->email }}</td>
                    </div>
                    <div class="form-floating mb-4">
                        <label for="floatingInput">Jabatan :</label>
                        <td class="px-6 py-4 border-b border-gray-200">{{ $customer->jabatan }}</td>
                    </div>
                     <div class="form-floating mb-4">
                        <label for="floatingInput" id="label_noktp">Nomor Surat Perintah : </label>
                        <td class="px-6 py-4 border-b border-gray-200">{{ $customer->nomor_surat_perintah }}</td>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat : </label>
                        <td class="px-6 py-4 border-b border-gray-200">{{ $customer->alamat }}</td>
                    </div>
                    
                    <b>II. Kegiatan Pengawasan</b> <br>
                    <small>1. Kegiatan I</small><br>
                    <div class="form-floating mb-4">
                        <label for="floatingInput">a. Bentuk :</label>
                        <td class="px-6 py-4 border-b border-gray-200">{{ $customer->bentuk1 }}</td>  
                    </div>
                    <div class="form-floating mb-4">
                        <label for="floatingInput">b. Tujuan :</label>
                        <td class="px-6 py-4 border-b border-gray-200">{{ $customer->tujuan1 }}</td>
                    </div>
                    <div class="form-floating mb-4">
                        <label for="floatingInput">c. Sasaran :</label>
                        <td class="px-6 py-4 border-b border-gray-200">{{ $customer->sasaran1 }}</td>
                    </div>
                    <div class="form-floating mb-4">
                    <label for="floatingInput">d. Waktu dan Tempat :</label>
                    <td class="px-6 py-4 border-b border-gray-200">{{ $customer->waktudantempat1 }}</td>
                    </div>

                    <small>2. Kegiatan II</small><br>
                    <div class="form-floating mb-4">
                    <label for="floatingInput">a. Bentuk :</label>
                    <td class="px-6 py-4 border-b border-gray-200">{{ $customer->bentuk2 }}</td>
                    </div>
                    <div class="form-floating mb-4">
                    <label for="floatingInput">b. Tujuan :</label>
                    <td class="px-6 py-4 border-b border-gray-200">{{ $customer->tujuan2 }}</td>  
                    </div>
                    <div class="form-floating mb-4">
                    <label for="floatingInput">c. Sasaran :</label>
                    <td class="px-6 py-4 border-b border-gray-200">{{ $customer->sasaran2 }}</td>
                    </div>
                    <div class="form-floating mb-4">
                    <label for="floatingInput">d. Waktu dan Tempat :</label>
                    <td class="px-6 py-4 border-b border-gray-200">{{ $customer->waktudantempat2 }}</td>
                    </div>
               
                <b>Uraian Singkat Hasil Pengawasan</b> <br>
                    <div class="form-group mb-4">
                    <label for="floatingInput">Isi Uraian : <br></label>
                    <td class="px-6 py-4 border-b border-gray-200">{{ $customer->uraian_singkat }}</td>   
                    </div>

                <b>III. Informasi Dugaan Pelanggaran : </b> <br>
                <small>1. Peristiwa</small><br>
                    <div class="form-floating mb-4">
                    <label for="floatingInput">a. Peristiwa :</label>
                    <td class="px-6 py-4 border-b border-gray-200">{{ $customer->peristiwa }}</td>
                    </div>
                    <div class="form-floating mb-4">
                    <label for="floatingInput">b. Tempat Kejadian :</label>
                    <td class="px-6 py-4 border-b border-gray-200">{{ $customer->tempat_kejadian }}</td>
                    </div>
  
                    <div class="form-floating mb-4">
                    <label for="floatingInput">c. Waktu Kejadian : </label>
                    <td class="px-6 py-4 border-b border-gray-200">{{ $customer->waktu_kejadian }}</td> 
                    </div>
                    <div class="form-floating mb-4">
                    <label for="floatingTextarea2">d. Pelaku :</label>
                    <td class="px-6 py-4 border-b border-gray-200">{{ $customer->pelaku }}</td>
                    </div>
                    <div class="form-floating mb-4">
                    <label for="floatingTextarea2">e. Alamat :</label>
                    <td class="px-6 py-4 border-b border-gray-200">{{ $customer->alamat_peristiwa }}</td>
                    </div>

                    <small>2. Saksi-saksi</small><br>
                    <div class="form-floating mb-4">
                    <label for="floatingInput">a. Nama :</label>
                    <td class="px-6 py-4 border-b border-gray-200">{{ $customer->nama_saksi1 }}</td>
                    </div>
                    <div class="form-floating mb-4">
                    <label for="floatingInput"> Alamat :</label>
                    <td class="px-6 py-4 border-b border-gray-200">{{ $customer->alamat_Saksi1 }}</td>
                    </div>
                    <div class="form-floating mb-4">
                    <label for="floatingInput">b. Nama :</label>
                    <td class="px-6 py-4 border-b border-gray-200">{{ $customer->nama_saksi2 }}</td>
                    </div>
                    <div class="form-floating mb-4">
                    <label for="floatingInput">Alamat :</label>
                    <td class="px-6 py-4 border-b border-gray-200">{{ $customer->alamat_saksi2 }}</td>
                    </div>

                    <small>3. Alat Bukti</small><br>
                    <div class="form-floating mb-4">
                    <label for="floatingInput">a.</label>
                    <td class="px-6 py-4 border-b border-gray-200">{{ $customer->alat_bukti_a }}</td>
                    </div>
                    <div class="form-floating mb-4">
                    <label for="floatingInput">b.</label>
                    <td class="px-6 py-4 border-b border-gray-200">{{ $customer->alat_bukti_b }}</td>
                    </div>
                    <div class="form-floating mb-4">
                    <label for="floatingInput">c.</label>
                    <td class="px-6 py-4 border-b border-gray-200">{{ $customer->alat_bukti_c }}</td>
                    </div>


                    <small>4. Barang Bukti</small><br>
                    <div class="form-floating mb-4">
                        <label for="floatingInput">a.</label>
                        <td class="px-6 py-4 border-b border-gray-200">{{ $customer->barang_bukti_a }}</td>
                    </div>
                    <div class="form-floating mb-4">
                        <label for="floatingInput">b.</label>
                        <td class="px-6 py-4 border-b border-gray-200">{{ $customer->barang_bukti_b }}</td>
                    </div>
                    <div class="form-floating mb-4">
                        <label for="floatingInput">c.</label>
                        <td class="px-6 py-4 border-b border-gray-200">{{ $customer->barang_bukti_c }}</td>
                    </div>
             

                <b>Uraian Singkat Dugaan Pelanggaran</b> <br>
                    <div class="form-group mb-4">
                        <label for="floatingInput">Isi Uraian : <br></label>
                        <td class="px-6 py-4 border-b border-gray-200">{{ $customer->uraian_singkat_dugaan }}</td>
                    </div> 

                    <div class="form-group">
                        <input type="submit" name="send" id="send" value="Simpan" class="px-4 py-2 text-white bg-indigo-600 rounded">{!!csrf_field()!!}
                    </div>
          
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

