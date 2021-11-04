@extends('layouts.apps')

@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center">
            <h1>Add Team Member</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('teams.index') }}">Home</a></li>
              <li class="breadcrumb-item active">Add Team Member</li>
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
              <h3 class="card-title">Add Team Member</h3>

              <div class="card-tools">
                <a href="{{route('teams.index') }}" class="btn btn-tool">
                  <i class="fas fa-list"></i></a>
              </div>
              
            </div>
            <div class="card-body">
              <form method="POST" action="{{route('teams.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="inputName">name</label>
                    <input type="text" id="inputName" name="name" value="{{old('name')  }}"" class="form-control @error('name') form-control is-invalid @enderror">
                    @error('name')
                    <small class="text-danger">*{{ $message }}*</small> 
                    @enderror
                       
                  </div>

                  <div class="form-group">
                    <label for="inputName">Occupation</label>
                    <input type="text" id="inputName" name="occupation" value="{{old('occupation')  }}"" class="form-control @error('occupation') form-control is-invalid @enderror">
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
                  
              <div class="form-group text-center">
                <input type="submit" value="Create New" class="btn btn-success ">
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