@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- /.card -->

              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Tabel Form A</h3>
                </div>
                <div class="card-header col-lg-3 col-6">
                <form action="{{url('customer/create')}}" method="get">
                    <button
                    type="submit" wire:click="update" name="new" id="new" value="Tambah Data" class="btn btn-block btn-secondary">
                    Tambah Data
                    </button>
                 </form> 
                </div>
                   <!-- /.card-header -->
                    <div class="card-body">
                            
                            <table id="example1" class="table table-bordered table-striped">
                                <tbody>
                                  <tr>
                                  <div class="d-inline-block align-middle bg-gray-50 ">
                                  <td >
                                      <h6 class="f-w-700">
                                        Nomor
                                      </h6>
                                    </td>
                                    <td >
                                      <h6 class="f-w-700">
                                        Nama
                                      </h6>
                                    </td>
                                    <td >
                                      <h6 class="f-w-700">
                                        Tahapan
                                      </h6>
                                    </td>
                                    <td >
                                      <h6 class="f-w-700">
                                        Jabatan
                                      </h6>
                                    </td>
                                    <td >
                                      <h6 class="f-w-700">
                                        Pilihan
                                      </h6>
                                    </td>
                                  </tr>
                                 
                        @foreach ($customer as $Customer)
                        <tr>
                            <div class="d-inline-block align-middle">
                            <td >
                                {{ $Customer->nomor_surat }}
                            </td>
                            <td >
                                {{ $Customer->nama }}
                            </td >
                            <td >
                                {{ $Customer->tahapan }}
                            </td>
                            <td >
                                {{ $Customer->jabatan }}
                            </td>
                            <td>
                            <button type="button" class="btn btn-default">
                                <a href="{{url('customer/delete',array($Customer->id_customer))}}" class="px-4 py-2 text-red bg-indigo-600 rounded">
                                    Delete</a></button>
                            <button type="button" class="btn btn-default">
                                <a href="{{url('customer/edit',array($Customer->id_customer))}}" class="px-4 py-2 text-blue bg-red-600 rounded">
                                    Edit</a></button>
                                <a href="{{url('customer/view',array($Customer->id_customer))}}" class="btn btn-info rounded">
                                    Lihat</a>
                                <a href="{{ URL::to('/customer/cetak_pdf',array($Customer->id_customer)) }}" class="btn btn-primary" target="_blank"><i class="fa fa-print"></i>  CETAK PDF</a>
                            </td>
                            </div>
                        </tr>
                        @endforeach
                              </table>
                            </div>
                          </div>
                      
                  <!-- /.card-body -->
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
</div>
@stop