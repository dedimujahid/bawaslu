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
                  <h3 class="card-title">User Bawaslu</h3>
                </div>
                <div class="card-header col-lg-3 col-6">
                    <a href="{{ route('formu') }}"><button type="button" class="btn btn-block btn-secondary" >Tambah User</button></a>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Pengawas</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($all as $key=>$row)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $row->name }}</td>
                      <td>{{$row->email}}</td>
                      <td>{{ $row->role }}</td>
                      <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default">
                            <a href="{{ URL::to('/edituser/'.$row->id) }}">Edit</a></button>
                            <button type="button" class="btn btn-default">
                            <a href="{{ URL::to('/deleteuser/'.$row->id) }}" id="delete">  Hapus</button>
                            <button type="button" class="btn btn-default">
                            <a href="{{ URL::to('/printpdf/'.$row->id) }}" id="printpdf">Print Data User</button>

                        </div>
                      </td>
                    </tr>
                    @endforeach
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
