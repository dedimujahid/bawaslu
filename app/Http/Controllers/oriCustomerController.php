<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Barryvdh\DomPDF\Facade\Pdf;

// use PDF;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::all();
        return view('customer.index')->with('customer', $customer);
    }

    public function create()
    {
        return view('customer.create');
    }

    public function input(Request $request)
    {
        $customer = new Customer;
        $customer->nama = $request->nama;
        $customer->nomor_telepon = $request->nomor_telepon;
        $customer->email = $request->email;
        $customer->alamat = $request->alamat;
        $customer->jabatan = $request->jabatan;
        $customer->nomor_surat_perintah = $request->nomor_surat_perintah;
        $customer->bentuk1 = $request->bentuk1;
        $customer->tujuan1 = $request->tujuan1;
        $customer->sasaran1 = $request->sasaran1;
        $customer->waktudantempat1 = $request->waktudantempat1;
        $customer->bentuk2 = $request->bentuk2;
        $customer->tujuan2 = $request->tujuan2;
        $customer->sasaran2 = $request->sasaran2;
        $customer->waktudantempat2 = $request->waktudantempat2;
        $customer->uraian_singkat = $request->uraian_singkat;
        $customer->peristiwa = $request->peristiwa;
        $customer->tempat_kejadian = $request->tempat_kejadian;
        $customer->waktu_kejadian = $request->waktu_kejadian;
        $customer->pelaku = $request->pelaku;
        $customer->alamat_peristiwa = $request->alamat_peristiwa;
        $customer->nama_saksi1 = $request->nama_saksi1;
        $customer->alamat_Saksi1 = $request->alamat_Saksi1;
        $customer->nama_saksi2 = $request->nama_saksi2;
        $customer->alamat_saksi2 = $request->alamat_saksi2;
        $customer->alat_bukti_a = $request->alat_bukti_a;
        $customer->alat_bukti_b = $request->alat_bukti_b;
        $customer->alat_bukti_c = $request->alat_bukti_c;
        $customer->barang_bukti_a = $request->barang_bukti_a;
        $customer->barang_bukti_b = $request->barang_bukti_b;
        $customer->barang_bukti_c = $request->barang_bukti_c;
        $customer->uraian_singkat_dugaan = $request->uraian_singkat_dugaan;

        $customer->save();
        return redirect('customer');
    }
    public function view($id_customer)
    {
        $customer = Customer::find($id_customer);
        return view('customer.view', compact('customer'));
    }
    public function cetak_pdf()
    {
        $customer = Customer::all();

        $pdf = PDF::loadView('customer.cetak_pdf', ['customer' => $customer]);
        return $pdf->stream('Form-A.pdf');
        // return $pdf->download('form-a.pdf');

        // return $pdf->stream();
    }
    public function edit($id_customer)
    {
        $customer = Customer::find($id_customer);
        return view('customer.edit', compact('customer'));
    }

    public function update(Request $request, $id_customer)
    {
        $customer = Customer::findOrFail($id_customer);
        $customer->nama = $request->get('nama');
        $customer->nomor_telepon = $request->get('nomor_telepon');
        $customer->email = $request->get('email');
        $customer->alamat = $request->get('alamat');
        $customer->jabatan = $request->get('jabatan');
        $customer->nomor_surat_perintah = $request->get('nomor_surat_perintah');
        $customer->bentuk1 = $request->get('bentuk1');
        $customer->tujuan1 = $request->get('tujuan1');
        $customer->sasaran1 = $request->get('sasaran1');
        $customer->waktudantempat1 = $request->get('waktudantempat1');
        $customer->bentuk2 = $request->get('bentuk2');
        $customer->tujuan2 = $request->get('tujuan2');
        $customer->sasaran2 = $request->get('sasaran2');
        $customer->waktudantempat2 = $request->get('waktudantempat2');
        $customer->uraian_singkat = $request->get('uraian_singkat');
        $customer->peristiwa = $request->get('peristiwa');
        $customer->tempat_kejadian = $request->get('tempat_kejadian');
        $customer->waktu_kejadian = $request->get('waktu_kejadian');
        $customer->pelaku = $request->get('pelaku');
        $customer->alamat_peristiwa = $request->get('alamat_peristiwa');
        $customer->nama_saksi1 = $request->get('nama_saksi1');
        $customer->alamat_Saksi1 = $request->get('alamat_Saksi1');
        $customer->nama_saksi2 = $request->get('nama_saksi2');
        $customer->alamat_saksi2 = $request->get('alamat_saksi2');
        $customer->alat_bukti_a = $request->get('alat_bukti_a');
        $customer->alat_bukti_b = $request->get('alat_bukti_b');
        $customer->alat_bukti_c = $request->get('alat_bukti_c');
        $customer->barang_bukti_a = $request->get('barang_bukti_a');
        $customer->barang_bukti_b = $request->get('barang_bukti_b');
        $customer->barang_bukti_c = $request->get('barang_bukti_c');
        $customer->uraian_singkat_dugaan = $request->get('uraian_singkat_dugaan');
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