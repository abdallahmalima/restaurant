@extends('layouts.apps')

@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center">
            <h1> Edit Second Section Item</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Edit Second Section Item</li>
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
              <h3 class="card-title"> Edit Second Section Item</h3>

              <div class="card-tools">
                <a href="{{route('ssection_items.index') }}" class="btn btn-tool">
                  <i class="fas fa-list"></i></a>
              </div>
            </div>
            <div class="card-body">
        <form method="POST" action="{{route('ssection_items.update',$ssection_item) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="inputName">Second Section Item title</label>
                <input type="text" id="inputName" name="title" value="{{ $ssection_item->title }}" class="form-control @error('title') is-invalid @enderror">
                @error('title')
                <small class="text-danger">*{{ $message }}*</small> 
                @enderror
              </div>
              <div class="form-group">
                <label for="inputStatus">Second Section</label>
                <select name="ssection_id" class="form-control custom-select">
                  
                  @foreach ($ssections as $ssection)
                    <option value="{{ $ssection->id }}" @if($ssection->id==$ssection_item->ssection_id) selected @endif>{{ $ssection->title }}</option>
                  @endforeach
                  
                </select>
                @error('ssection_id')
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