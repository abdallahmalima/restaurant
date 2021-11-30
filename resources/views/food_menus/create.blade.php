@extends('layouts.apps')

@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center">
            <h1>Add Food Menu</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('food_menus.index') }}">Home</a></li>
              <li class="breadcrumb-item active">Add Food Menu</li>
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
              <h3 class="card-title">Add Food Menu</h3>

              <div class="card-tools">
                <a href="{{route('food_menus.index') }}" class="btn btn-tool">
                  <i class="fas fa-list"></i></a>
              </div>
              
            </div>
            <div class="card-body">
              <form method="POST" action="{{route('food_menus.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="inputName">name</label>
                    <input type="text" id="inputName" name="name" value="{{old('name')  }}"" class="form-control @error('name') form-control is-invalid @enderror">
                    @error('name')
                    <small class="text-danger">*{{ $message }}*</small> 
                    @enderror
                       
                  </div>
                  <div class="form-group">
                    <label for="inputDescription">Blog Description</label>
                    <textarea id="inputDescription"  name="description" class="form-control @error('description')  is-invalid @enderror" rows="4">{{old('description')  }}</textarea>
                    @error('description')
                    <small class="text-danger">*{{ $message }}*</small> 
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="inputName">price</label>
                    <input type="number" id="inputName" name="price" value="{{old('price')  }}"" class="form-control @error('price') form-control is-invalid @enderror">
                    @error('price')
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
                <input type="submit" value="Create Food Menu" class="btn btn-success ">
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