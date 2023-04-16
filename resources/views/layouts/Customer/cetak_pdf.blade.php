<!DOCTYPE html>
<html>
<head>
	<title>Form A Bawaslu Kota Malang</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<!-- <h1>FORM. A</h1> -->
		<h2>FORM. A</h2>
		<h2>LAPORAN HASIL PENGAWASAN PEMILU 2024</h2>
		<h2>NOMOR:  {{$record->id_customer}}/LHP/PM.00.02/JI.34/00/2023</h2>
		<!-- <h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5> -->
	</center>
 	<h3>I.	Data Pengawas Pemilihan:</h3>
	<h6>Tahapan yang diawasi</h6>
	<table class='table table-bordered' action="{{URL::to('/cetak_pdf/'.$record->id_customer)}}">
		<tbody>
		<tr>
			<th>Tahapan yang diawasi : </th>
			<td>{{$record->tahapan}}</td>
			</tr>

			<tr>
			<th>Nama Pelaksana Tugas : </th>
			<td>{{$record->nama}}</td>
			</tr>

			<tr>
			<th>Alamat : </th>
			<td>{{$record->alamat}}</td>
			</tr>
			<tr>
			<th>Jabatan : </th>
			<td>{{$record->jabatan}}</td>
			</tr>
			<tr>
			<th>Nomor Surat Perintah : </th>
			<td>{{$record->nomor_surat_perintah}}</td>
			</tr>

			<tr>
			<th>II. Kegiatan Pengawasan : </th>
			<td>{{$record->uraian_singkat}}</td>
			</tr>

			<tr>
			<th>a. Bentuk : </th>
			<td>{{$record->bentuk1}}</td>
			</tr>
			<tr>
			<th>b. Tujuan : </th>
			<td>{{$record->tujuan1}}</td>
			</tr>
			<tr>
			<th>c. Sasaran : </th>
			<td>{{$record->sasaran1}}</td>
			</tr>
			<tr>
			<th>d. Waktu dan Tempat : </th>
			<td>{{$record->waktudantempat1}}</td>
			</tr>
			
			<tr>
			<th>III. Uraian Singkat Hasil Pengawasan : </th>
			<td>{{$record->uraian_singkat}}</td>
			</tr>
			<tr>
			<th>Peristiwa : </th>
			<td>{{$record->peristiwa}}</td>
			</tr>
			<tr>
			<th>Tempat Kejadian: </th>
			<td>{{$record->tempat_kejadian}}</td>
			</tr>
			<tr>
			<th>Waktu Kejadian : </th>
			<td>{{$record->waktu_kejadian}}</td>
			</tr>
			<tr>
			<th>Pelaku : </th>
			<td>{{$record->pelaku}}</td>
			</tr>
			<tr>
			<th>Alamat Peristiwa : </th>
			<td>{{$record->alamat_peristiwa}}</td>
			</tr>
			<tr>
			<th>Nama Saksi : </th>
			<td>{{$record->nama_saksi1}}</td>
			</tr>
			<tr>
			<th>Alamat Saksi : </th>
			<td>{{$record->alamat_Saksi1}}</td>
			</tr>
			<tr>
			<th>Nama Saksi : </th>
			<td>{{$record->nama_saksi2}}</td>
			</tr>
			<tr>
			<th>Alamat Saksi : </th>
			<td>{{$record->alamat_saksi2}}</td>
			</tr>
			<tr>
			<th>Alat Bukti A : </th>
			<td>{{$record->alat_bukti_a}}</td>
			</tr>
			<tr>
			<th>Alat Bukti B : </th>
			<td>{{$record->alat_bukti_b}}</td>
			</tr>
			<tr>
			<th>Alat Bukti C : </th>
			<td>{{$record->alat_bukti_c}}</td>
			</tr>
			<tr>
			<th>Barang Bukti A : </th>
			<td>{{$record->barang_bukti_a}}</td>
			</tr>
			<tr>
			<th>Barang Bukti B : </th>
			<td>{{$record->barang_bukti_b}}</td>
			</tr>
			<tr>
			<th>Barang Bukti C : </th>
			<td>{{$record->barang_bukti_c}}</td>
			</tr>
			<tr>
			<th>Uraian Singkat Dugaan: </th>
			<td>{{$record->uraian_singkat_dugaan}}</td>
			</tr>

		</tbody>
	</table>
 
</body>
</html>