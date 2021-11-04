@extends('layouts.apps')

@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center">
            <h1>Edit Footer Link</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Footer Link</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row justify-content-center">
        <div class="col-md-9">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Footer Link</h3>

              <div class="card-tools">
                <a href="{{route('footer_links.index') }}" class="btn btn-tool">
                  <i class="fas fa-list"></i></a>
              </div>
            </div>
            <div class="card-body">
        <form method="POST" action="{{route('footer_links.update',$footer_link) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="inputName">Link Name</label>
              <input type="text" id="inputName" name="name" value="{{$footer_link->name  }}"" class="form-control @error('name') form-control is-invalid @enderror">
              @error('name')
              <small class="text-danger">*{{ $message }}*</small> 
              @enderror
                 
            </div>
            <div class="form-group">
              <label for="inputName">Link URL</label>
              <input type="text" id="inputName" name="url" value="{{$footer_link->url  }}"" class="form-control @error('url') form-control is-invalid @enderror">
              @error('url')
              <small class="text-danger">*{{ $message }}*</small> 
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