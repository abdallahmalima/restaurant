@extends('layouts.apps')

@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center">
            <h1>Add New First Section Item</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('fsections.index') }}">Home</a></li>
              <li class="breadcrumb-item active">Add New First Section Item</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row justify-content-md-center ">
        <div class="col-md-9">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add New First Section Item</h3>

              <div class="card-tools">
                <a href="{{route('fsections.index') }}" class="btn btn-tool">
                  <i class="fas fa-list"></i></a>
              </div>
              
            </div>
            <div class="card-body">
              <form method="POST" action="{{route('fsections.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="inputName">Fisrt Section title</label>
                    <input type="text" id="inputName" name="title" value="{{old('title')  }}"" class="form-control @error('title') form-control is-invalid @enderror">
                    @error('title')
                    <small class="text-danger">*{{ $message }}*</small> 
                    @enderror
                       
                  </div>
                  <div class="form-group">
                    <label for="inputDescription">Fisrt Section Number</label>
                    <input type="text"  name="number" value="{{old('number')  }}" class="form-control @error('number') form-control is-invalid @enderror" rows="4">
                    @error('number')
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
                  
              <div class="form-group text-center">
                <input type="submit" value="Create new Porject" class="btn btn-success ">
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