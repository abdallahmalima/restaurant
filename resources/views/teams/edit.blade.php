@extends('layouts.apps')

@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center">
            <h1>Edit Team Member Details</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Team Member Details</li>
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
              <h3 class="card-title">Edit Team Member Details</h3>

              <div class="card-tools">
                <a href="{{route('teams.index') }}" class="btn btn-tool">
                  <i class="fas fa-list"></i></a>
              </div>
            </div>
            <div class="card-body">
        <form method="POST" action="{{route('teams.update',$team) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="inputName">name</label>
                <input type="text" id="inputName" name="name" value="{{ $team->name }}" class="form-control @error('name') is-invalid @enderror">
                @error('name')
                <small class="text-danger">*{{ $message }}*</small> 
                @enderror
              </div>

              <div class="form-group">
                <label for="inputName">occupation</label>
                <input type="numbers" id="inputName" name="occupation" value="{{ $team->occupation }}" class="form-control @error('occupation') is-invalid @enderror">
                @error('occupation')
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
              @if($team->image??false)
              <img src="{{ asset($team->image->url) }}" alt="..." height="250px" weight="100px" class="img-thumbnail">
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