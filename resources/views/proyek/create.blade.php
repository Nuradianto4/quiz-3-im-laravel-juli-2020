@extends('layouts.master')

@section('content')
<div class="ml-2 mr-2">
	<div class="card card-primary">
        <div class="card-header">
           <h3 class="card-title">Create Proyek</h3>
        </div>
              <!-- /.card-header -->
              <!-- form start -->
        <form role="form" action="/proyek" method="POST">
        	@csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Proyek</label>
                    <input type="text" class="form-control" id="nama_proyek" value="{{ old('nama_proyek','')}}"  name="nama_proyek" placeholder="Masukkan Nama proyek">
                    @error('nama_proyek')
                    <div class="alert alert-danger">{{$message}} </div>
                    @enderror
                   </div>
            	   <div class="form-group">
                     <label>Deskripsi Proyek</label>
                     <textarea class="form-control" rows="3" id="deskripsi_proyek"  name="deskripsi_proyek" placeholder="Masukkan Deskripsi">{{ old('deskripsi_proyek','')}}</textarea>
                     @error('deskripsi_proyek')
                    <div class="alert alert-danger">{{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                     <label>Tanggal Mulai</label> <br>
                     <input class="form-control" id="tanggal_mulai" type="date" name="tanggal_mulai" value="{{ old('tanggal_mulai','')}}">
                     
                     @error('tanggal_mulai')
                    <div class="alert alert-danger">{{$message}} </div>
                    @enderror
                </div>
                <div class="form-group">
                     <label>Tanggal Deadline</label> <br>
                     <input class="form-control" type="date" name="tanggal_deadline" value="{{ old('tanggal_deadline','')}}">
                     @error('tanggal_deadline')
                    <div class="alert alert-danger">{{$message}} </div>
                    @enderror
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Create</button>
                </div>
        </form>
    </div>
</div>


@endsection