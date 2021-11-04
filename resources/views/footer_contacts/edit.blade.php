@extends('layouts.apps')

@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center">
            <h1>Edit Footer Contact</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Footer Contact</li>
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
              <h3 class="card-title">Edit Footer Contact</h3>

              <div class="card-tools">
                <a href="#" class="btn btn-tool">
                  <i class="fas fa-list"></i></a>
              </div>
            </div>
            <div class="card-body">
        <form method="POST" action="{{route('footer_contacts.update') }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="inputName">Address</label>
              <input type="text" id="inputName" name="address" value="{{ $footer_contact->address??'' }}" class="form-control @error('address') is-invalid @enderror">
              @error('address')
              <small class="text-danger">*{{ $message }}*</small> 
              @enderror
            </div>
            <div class="form-group">
              <label for="inputName">Phone Number 1</label>
              <input type="text" id="inputName" name="phone1" value="{{ $footer_contact->phone1??'' }}" class="form-control @error('phone1') is-invalid @enderror">
              @error('phone1')
              <small class="text-danger">*{{ $message }}*</small> 
              @enderror
            </div>
            <div class="form-group">
              <label for="inputName">Phone Number 2</label>
              <input type="text" id="inputName" name="phone2" value="{{ $footer_contact->phone2??'' }}" class="form-control @error('phone2') is-invalid @enderror">
              @error('phone12')
              <small class="text-danger">*{{ $message }}*</small> 
              @enderror
            </div>
            <div class="form-group">
              <label for="inputName">Email 1</label>
              <input type="text" id="inputName" name="email1" value="{{ $footer_contact->email1??'' }}" class="form-control @error('email1') is-invalid @enderror">
              @error('email1')
              <small class="text-danger">*{{ $message }}*</small> 
              @enderror
            </div>
            <div class="form-group">
              <label for="inputName">Email 2</label>
              <input type="text" id="inputName" name="email2" value="{{ $footer_contact->email2??'' }}" class="form-control @error('email2') is-invalid @enderror">
              @error('email2')
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