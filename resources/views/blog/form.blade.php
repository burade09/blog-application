{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
 <div class="py-12">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
                <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Horizontal form</h2>
  <form action="{{route('form.store')}}" Method="post">
    @csrf
    <div class="form-group">
      <label class="control-label col-sm-2" for="title">Title:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="description">Description:</label>
      <div class="col-sm-10">
        <input type="description" class="form-control" id="description" placeholder="Enter description" name="description">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
    </div>
</x-app-layout>

 --}}

 @extends('layouts.sidebar')
 @section('content')
 <br><br>
 <div class="container">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
 <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Quick Example</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('blog.store')}}" Method="post" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control"  placeholder="Enter title" name="title">
          <span style="color: red">@error('title'){{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label><strong>Description :</strong></label>
            <textarea class="ckeditor form-control" placeholder="Description" name="description" value="{{old('description')}}"></textarea>
            <span style="color: red">@error('description'){{$message}}@enderror</span>
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <label for="Status">Status:</label>
                  <select type="text" class="form-control" placeholder="Enter status" name="status" value="{{old('status')}}">
                    <span style="color: red">@error('status'){{$message}}@enderror</span>
                    <option disabled="disabled">Choose Status</option>
                    <option id="active" for="active" value="1" >Active</option>
                    <option id="inactive" for="inactive" value="0" >Inactive</option>
                  </select>
              </div>
            </div>

            <div class="form-group">
                <label for="Category_id">Category_name</label>
                <select type="text" class="form-control"  placeholder="Enter Category" name="category_id" >
                    <option value="{{old('category_id')}}" class="option_color">Select Category</option>
                    @foreach ($category as$cat )
                     <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
                <span style="color: red">@error('category_id'){{$message}}@enderror</span>
             </div>
            <div class="form-group">
                <label for="imagr">Image</label>
                <input type="file" class="form-control" id="myFile" name="image">
                <span style="color: red">@error('image'){{$message}}@enderror</span>
              </div>
              {{-- <div>
                <input type="file" id="myFile" name="image">
              </div> --}}

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
 <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
           $('.ckeditor').ckeditor();
        });
    </script>
@endsection
