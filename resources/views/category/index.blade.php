@extends('layouts.sidebar')
@section('content')
<br>
<div class="container">
<div class="row">
     <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            @if (session()->has('message'))
			<div class="container">
				<div class="alert alert-success" id="success-alert">
					<button type="button" class="close" data-dismiss="alert">x</button>
					<strong>{{session()->get('message')}} </strong>
				</div>
			</div>

			@endif
          <h3 class="card-title">Responsive Hover Table</h3>

          {{-- <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div> --}}
          <div class="col-md-12  text-right" align="right" >
            <a href="{{route('category.create')}}"> <button  type="submit" class="btn btn-primary">Add Data</button></a>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">

             </div>
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @php
                $i = 1;
            @endphp
            @foreach ($category as$c )
            <tr>
                <td>{{$c->id}}</td>
                <td>{{$c->name}}</td>
                <td>{{$c->status== 1 ? 'Active' : 'Inactive'}}</td>
                <td><a href="{{route('category.edit',$c->id)}}"><button class="btn btn-success">Edit</button></a>
                <a href="{{route('category.delete',$c->id)}}"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
            @endforeach
            </tbody>
          </table>
          {{$category->links()}}
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
@endsection
