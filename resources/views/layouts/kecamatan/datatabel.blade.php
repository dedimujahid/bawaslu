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
                  <h3 class="card-title">Daftar Laporan</h3>
                </div>
                <div class="card-header col-lg-3 col-6">
                    <a href="{{ route('forma') }}"><button type="button" class="btn btn-block btn-secondary" >Tambahkan</button></a>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Nama Pengawas</th>
                      <th>Wilayah</th>
                      <th>Jabatan</th>
                      <th>Role</th>
                      <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Other browsers</td>
                      <td>All others</td>
                      <td>-</td>
                      <td>-</td>
                      <td>U</td>
                    </tr>
                    </tbody>
                  </table>
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
@section('js')
    <script>
        $(function () {
            $('#example').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('datatabel') }}",
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'phone', name: 'phone'},
                ]
            });
        });
    </script>
@stop
