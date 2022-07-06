@extends('layouts.sidebar')
@section('content')
<br>
<div class="container">
 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
 <!-- Theme style -->
 <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
<div class="row">
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
            <a href="{{route('blog.form')}}"> <button  type="submit" class="btn btn-primary">Add Data</button></a>
        </div>
        <!-- /.card-header -->

        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">

            <thead>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Category Name</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @php
                $i = 1;
            @endphp
            @foreach ($form as$f )
            <tr>
                <td>{{$f->id}}</td>
                <td>{{$f->title}}</td>
                <td>{!!Str::limit($f->description, 20)!!}</td>
                <td>{{$f->status== 1 ? 'Active' : 'Inactive'}}</td>
                <td>{{@$f->category->name}}</td>
                <td>
                    @if (empty($f->image))
                    <img src="{{asset('uploads/blog_images/profile.png')}}" width="100px" height="100px">
                 @else
                    <img src="{{asset('uploads/blog_images/'.$f->image)}}" width="50px" height="50px" alt="Image">
                    @endif
                </td>
                <td><a href="{{route('blog.edit',$f->id)}}"><button class="btn btn-success">Edit</button></a>
                <a href="{{route('blog.delete',$f->id)}}"><button class="btn btn-danger">Delete</button></a></td>
            </tr>
            @endforeach
            </tbody>
            </div>
          </table>
          {{$form->links()}}
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <script src="{{asset('../../plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</div>
@endsection
