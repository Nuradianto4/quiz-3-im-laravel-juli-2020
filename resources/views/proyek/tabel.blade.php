@extends('layouts.master')

@section('content')

<div class="mr-3 ml-3">

	<div class="card">
              <div class="card-header">
                <h3 class="card-title">PROYEK</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table table-striped">
                	@if(session('berhasil'))
                	<div class="alert alert-primary" >
                		{{session('berhasil')}}
                	</div>
                	@endif
                	<a class="btn btn-success mb-2 ml-2 mt-3" href="/proyek/create"> Buat Pertanyaan </a>
                  <thead>
                    <tr>
                      <th style="width: 10px">No.</th>
                      <th>Nama Proyek</th>
                      <th>Deskripsi Proyek</th>
                      <th>Tanggal Mulai</th>
                      <th>Tanggal Deadline</th>
                      <th>Status</th>
                      <th style="width: 40px">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                   @forelse($posting as $key => $post)
	                   <tr>
	                   	<td> {{$key+1}} </td>
	                   	<td> {{$post->nama_proyek}} </td>
	                   	<td> {{$post->deskripsi_proyek}} </td>
	                   	<td> {{$post->tanggal_mulai}} </td>
	                   	<td> {{$post->tanggal_deadline}} </td>
                      <td>{{$post->status}}</td>
	                   	<td style="display: flex;"> 
	                   		<a href="/pertanyaan/{{$post->id}}" class="btn btn-info btn-sm">
	                   			<i class="fas fa-eye"></i>
	                   		</a>
	                   		
	                   		<a href="/pertanyaan/{{$post->id}}/edit" class="btn btn-success btn-sm ml-2">
	                   			<i class="fas fa-pencil-alt"></i>
	                   		</a>
	                   		<form action="/pertanyaan/{{$post->id}}" method="post">
	                   			@csrf
	                   			@method('DELETE')
	                   			<input type="submit" value="Delete" class="btn btn-danger btn-sm  ml-2">
	                   			
	                   		</form>
	                   		
	                   	</td>
	                   </tr>
	                @empty
	                <tr>
	                	<td colspan="6" align="center"> Tidak Ada Data</td>
	                </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
	
</div>

@endsection