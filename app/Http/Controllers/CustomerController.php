<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Barryvdh\DomPDF\Facade\Pdf;
use DB;
// use PDF;

class CustomerController extends Controller
{
    public function customer()
    {
        $customer = Customer::all();
        return view('layouts.customer.index')->with('customer', $customer);
    }

    public function create()
    {
        return view('layouts.customer.create');
    }

    public function input(Request $request)
    {
        $customer       = new Customer;
        $customer->nomor_surat = $request->nomor_surat;
        $customer->tahun_surat = $request->tahun_surat;
        $customer->tahapan = $request->tahapan;
        $customer->nama = $request->nama;
        $customer->jabatan = $request->jabatan;
        $customer->nomor_surat_perintah = $request->nomor_surat_perintah;
        $customer->alamat = $request->alamat;
     
      
        $customer->bentuk1 = $request->bentuk1;
        $customer->tujuan1 = $request->tujuan1;
        $customer->sasaran1 = $request->sasaran1;
        $customer->waktudantempat1 = $request->waktudantempat1;
        
        $customer->uraian_singkat           = $request->uraian_singkat;
        $customer->peristiwa                = $request->peristiwa;
        $customer->tempat_kejadian          = $request->tempat_kejadian;
        $customer->waktu_kejadian           = $request->waktu_kejadian;
        $customer->pelaku                   = $request->pelaku;
        $customer->alamat_peristiwa         = $request->alamat_peristiwa;
        $customer->nama_saksi1              = $request->nama_saksi1;
        $customer->alamat_Saksi1            = $request->alamat_Saksi1;
        $customer->nama_saksi2              = $request->nama_saksi2;
        $customer->alamat_saksi2            = $request->alamat_saksi2;
        $customer->alat_bukti_a             = $request->alat_bukti_a;
        $customer->alat_bukti_b             = $request->alat_bukti_b;
        $customer->alat_bukti_c             = $request->alat_bukti_c;
        $customer->barang_bukti_a           = $request->barang_bukti_a;
        $customer->barang_bukti_b           = $request->barang_bukti_b;
        $customer->barang_bukti_c           = $request->barang_bukti_c;
        $customer->uraian_singkat_dugaan    = $request->uraian_singkat_dugaan;
        $customer->fakta                    = $request->fakta;
        $customer->analisa                  = $request->analisa;
        $customer->peristiwa_pemilu         = $request->peristiwa_pemilu;
        $customer->tempat_kejadian_potensi  = $request->tempat_kejadian_potensi;
        $customer->waktu_kejadian_potensi   = $request->waktu_kejadian_potensi;
        $customer->bentuk_objek_sengketa    = $request->bentuk_objek_sengketa;
        $customer->identitas_objek_sengketa = $request->identitas_objek_sengketa;
        $customer->hari_dikeluarkan         = $request->hari_dikeluarkan;
        $customer->kerugian_langsung        = $request->kerugian_langsung;
        $customer->uraian_singkat_sengketa  = $request->uraian_singkat_sengketa;
        $customer->tanggal_surat            = $request->tanggal_surat;
        

        $customer->save();
        return redirect('customer');
    }
    public function view($id_customer)
    {
        $customer = Customer::find($id_customer);
        return view('layouts.customer.view', compact('customer'));
    }
    public function cetak_pdf($id_customer)
    {
        
        $record = DB::table('customer')->where('id_customer',$id_customer)->first();
        $pdf    = PDF::loadView('layouts.customer.cetak_pdf', ['customer' => $id_customer], compact('record'));
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream('Form-A.pdf');
        // return $pdf->download('form-a.pdf');

    }
    public function edit($id_customer)
    {
        $customer = Customer::find($id_customer);
        return view('layouts.customer.edit', compact('customer'));
    }

    public function update(Request $request, $id_customer)
    {
        $customer = Customer::findOrFail($id_customer);
        $customer->nomor_surat              = $request->get('nomor_surat');
        $customer->tahun_surat              = $request->get('tahun_surat');
        $customer->tahapan              = $request->get('tahapan');
        $customer->nama                     = $request->get('nama');
        $customer->jabatan                  = $request->get('jabatan');
        $customer->nomor_surat_perintah     = $request->get('nomor_surat_perintah');

        $customer->alamat                   = $request->get('alamat');
        
        
        $customer->bentuk1                  = $request->get('bentuk1');
        $customer->tujuan1                  = $request->get('tujuan1');
        $customer->sasaran1                 = $request->get('sasaran1');
        $customer->waktudantempat1          = $request->get('waktudantempat1');
        $customer->uraian_singkat           = $request->get('uraian_singkat');
        $customer->peristiwa                = $request->get('peristiwa');
        $customer->tempat_kejadian          = $request->get('tempat_kejadian');
        $customer->waktu_kejadian           = $request->get('waktu_kejadian');
        $customer->pelaku                   = $request->get('pelaku');
        $customer->alamat_peristiwa         = $request->get('alamat_peristiwa');
        $customer->nama_saksi1              = $request->get('nama_saksi1');
        $customer->alamat_Saksi1            = $request->get('alamat_Saksi1');
        $customer->nama_saksi2              = $request->get('nama_saksi2');
        $customer->alamat_saksi2            = $request->get('alamat_saksi2');
        $customer->alat_bukti_a             = $request->get('alat_bukti_a');
        $customer->alat_bukti_b             = $request->get('alat_bukti_b');
        $customer->alat_bukti_c             = $request->get('alat_bukti_c');
        $customer->barang_bukti_a           = $request->get('barang_bukti_a');
        $customer->barang_bukti_b           = $request->get('barang_bukti_b');
        $customer->barang_bukti_c           = $request->get('barang_bukti_c');
        $customer->uraian_singkat_dugaan    = $request->get('uraian_singkat_dugaan');
        $customer->fakta                    = $request->get('fakta');
        $customer->analisa                  = $request->get('analisa');
        $customer->peristiwa_pemilu         = $request->get('peristiwa_pemilu');
        $customer->tempat_kejadian_potensi  = $request->get('tempat_kejadian_potensi');
        $customer->waktu_kejadian_potensi   = $request->get('waktu_kejadian_potensi');
        $customer->bentuk_objek_sengketa    = $request->get('bentuk_objek_sengketa');
        $customer->identitas_objek_sengketa = $request->get('identitas_objek_sengketa');
        $customer->hari_dikeluarkan         = $request->get('hari_dikeluarkan');
        $customer->kerugian_langsung        = $request->get('kerugian_langsung');
        $customer->uraian_singkat_sengketa  = $request->get('uraian_singkat_sengketa');
        $customer->tanggal_surat            = $request->get('tanggal_surat');
        
        $customer->save();
        return redirect('customer')->with('alert-success', 'Data berhasil Diubah.');
    }
    public function delete($id_customer)
    {
        $customer = Customer::find($id_customer);
        $customer->delete();
        return redirect('customer');
    }

}