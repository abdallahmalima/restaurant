@extends('layouts.apps')

@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center">
            <h1>Edit Gallery</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Gallery</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row justify-content-md-center">
        <div class="col-md-9">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Gallery</h3>

              <div class="card-tools">
                <a href="{{route('galleries.index') }}" class="btn btn-tool">
                  <i class="fas fa-list"></i></a>
              </div>
            </div>
            <div class="card-body">
        <form method="POST" action="{{route('galleries.update',$gallery) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="inputName">Gallery Name</label>
                <input type="text" id="inputName" name="name" value="{{ $gallery->name }}" class="form-control @error('name') is-invalid @enderror">
                @error('name')
                <small class="text-danger">*{{ $message }}*</small> 
                @enderror
              </div>
              <div class="form-group">
                <label for="inputStatus">Gallery's Category</label>
                <select name="category_id" class="form-control custom-select">
                  
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if($category->id==$gallery->category_id) selected @endif>{{ $category->name }}</option>
                  @endforeach
                  
                </select>
                @error('category_id')
                <small class="text-danger">*{{ $message }}*</small> 
                @enderror
              </div>
              <div class="form-group col-6">
                <label for="exampleFormControlFile1">Upload Image</label>
                <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
                @error('image')
                <small class="text-danger">*{{ $message }}*</small> 
                @enderror
              </div>
              @if($gallery->image??false)
              <img src="{{ asset($gallery->image->url) }}" alt="..." height="250px" weight="100px" class="img-thumbnail">
             @endif
              <div class="form-group text-center">
                <input type="submit" value="Update" class="btn btn-success ">
               </div>
            </div>
        </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection