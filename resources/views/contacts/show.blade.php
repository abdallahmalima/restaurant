@extends('layouts.apps')

@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center">
            <h1>View Contact</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">View Contact</li>
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
              <h3 class="card-title">View Contact</h3>

              <div class="card-tools">
                <a href="{{route('contacts.index') }}" class="btn btn-tool">
                  <i class="fas fa-list"></i></a>
              </div>
            </div>
            <div class="card-body">
       
            <div class="form-group">
                <label for="inputName">Contact name</label>
                <input disabled type="text" id="inputName" name="name" value="{{$contact->name }}" class="form-control @error('name') is-invalid @enderror">
                
              </div>
              <div class="form-group">
                <label for="inputName">Contact email</label>
                <input disabled type="text" id="inputName" name="email" value="{{$contact->email }}" class="form-control @error('email') is-invalid @enderror">
               
              </div>
              <div class="form-group">
                <label for="inputDescription">Contact Message</label>
                <textarea disabled id="inputDescription" name="message" class="form-control @error('message') is-invalid @enderror" rows="4">{{$contact->message }}</textarea>
                
              </div>
              
            </div>
        
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