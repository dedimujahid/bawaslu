@extends('layouts.app')
@section('content')
<div class="content-wrapper">
<div class="content">
<div class="container-fluid">
<section>
    <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Tambahkan Akun</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="{{ URL::to('/updateuser/'.$edit->id) }}" method="POST">
    @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" name="name" value="{{ $edit->name }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" value="{{ $edit->email }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="">Role </label>
            <select placeholder="Pilih Role Akun" name="role" class="custom-select form-control-border border-width-2" >
              <option value="Admin" {{ 'Kecamatan'==$edit->role ? 'selected':'' }}>Kecamatan</option>
              <option value="Admin" {{ 'Kelurahan'==$edit->role ? 'selected':'' }}>Kelurahan</option>
            </select>
         </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        {{-- <div class="form-group">
          <label for="exampleInputFile">File input</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text">Upload</span>
            </div>
          </div>
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> --}}
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>

      </div>
    </form>
  </div>
</div>
</div>
</div>
</section>
  @stop
