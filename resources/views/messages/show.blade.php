@extends('layouts.apps')

@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center">
            <h1>Add New Message</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('messages.index') }}">Home</a></li>
              <li class="breadcrumb-item active">Add New Message</li>
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
              <h3 class="card-title">Add New Message</h3>

              <div class="card-tools">
                <a href="{{route('messages.index') }}" class="btn btn-tool">
                  <i class="fas fa-list"></i></a>
              </div>
              
            </div>
            <div class="card-body">
             
                <div class="form-group">
                    <label for="inputName">Messanger's Name</label>
                    <input type="text" id="inputName" name="name" value="{{$message->name  }}" class="form-control"  disabled>
                   
                       
                  </div>
                  <div class="form-group">
                    <label for="inputName">Messanger's Email</label>
                    <input type="text" id="inputName" name="email" value="{{$message->email  }}" class="form-control"  disabled>
                   
                  </div>

                  <div class="form-group">
                    <label for="inputDescription">Message Body</label>
                    <textarea id="inputDescription"  name="body" class="form-control" rows="4"  disabled>{{ $message->body  }}</textarea>
                   
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