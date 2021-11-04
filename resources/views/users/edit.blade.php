@extends('layouts.apps')

@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit User</h3>

              <div class="card-tools">
                <a href="{{route('users.index') }}" class="btn btn-tool">
                  <i class="fas fa-list"></i></a>
              </div>
            </div>
            <div class="card-body">
        <form method="POST" action="{{route('users.update',$user) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @if($user->image)
              <img src="{{ asset($user->image->url) }}" alt="..." height="250px" weight="100px" class="rounded-circle">
             @endif
            <div class="form-group col-lg-6">
              <label for="exampleInputFile">File input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Upload Image</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text" id="">Upload</span>
                </div>
              </div>
            </div>

            <div class="form-group col-lg-6">
              <label for="inputName">Name</label>
              <input type="text" id="inputName" name="name" value="{{$user->name  }}" class="form-control @error('name')  is-invalid @enderror"">
              @error('name')
              <small class="text-danger">*{{  $message  }}*</small> 
              @enderror
              </div>       
              <div class="form-group col-lg-6">
                  <label for="inputName">Email</label>
                  <input type="text" id="inputName" name="email" value="{{$user->email}}" class="form-control @error('email')  is-invalid @enderror"">
                  @error('email')
                  <small class="text-danger">*{{  $message  }}*</small> 
                  @enderror
                     
                </div>

                
            

            <div class="form-group col-lg-6">
              <label for="inputName">Password</label>
              <input type="text" id="inputName" name="password"  class="form-control @error('password')  is-invalid @enderror">
              @error('password')
              <small class="text-danger">*{{  $message  }}*</small> 
              @enderror
                 
            </div>
            <div class="form-group col-lg-6">
              <label for="inputName">Confirm Password</label>
              <input type="text" id="inputName" name="password_confirmation"  class="form-control ">
              @error('password_confirmation')
              <small class="text-danger">*{{  $message  }}*</small> 
              @enderror
                 
            </div>
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