@extends('layouts.apps')

@section('content')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center">
            <h1>Add New Price</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('prices.index') }}">Home</a></li>
              <li class="breadcrumb-item active">Add New Price</li>
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
              <h3 class="card-title">Add New Price</h3>

              <div class="card-tools">
                <a href="{{route('prices.index') }}" class="btn btn-tool">
                  <i class="fas fa-list"></i></a>
              </div>
              
            </div>
            <div class="card-body">
              <form method="POST" action="{{route('prices.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="inputName">Name</label>
                    <input type="text" id="inputName" name="name" value="{{old('name')  }}" class="form-control @error('name') form-control is-invalid @enderror">
                    @error('name')
                    <small class="text-danger">*{{ $message }}*</small> 
                    @enderror
                       
                  </div>
                  <div class="form-group">
                    <label for="inputName">Figure</label>
                    <input type="number" id="inputName" name="number" value="{{old('number')  }}" class="form-control @error('number') form-control is-invalid @enderror">
                    @error('number')
                    <small class="text-danger">*{{ $message }}*</small> 
                    @enderror
                       
                  </div>
                  <div class="form-group">
                    <label for="inputName">Storage Space</label>
                    <input type="text" id="inputName" name="disk" value="{{old('disk')  }}" class="form-control @error('disk') form-control is-invalid @enderror">
                    @error('disk')
                    <small class="text-danger">*{{ $message }}*</small> 
                    @enderror
                       
                  </div>
                  <div class="form-group">
                    <label for="inputName">Number of Emails</label>
                    <input type="text" id="inputName" name="emails" value="{{old('emails')  }}" class="form-control @error('emails') form-control is-invalid @enderror">
                    @error('emails')
                    <small class="text-danger">*{{ $message }}*</small> 
                    @enderror
                       
                  </div>

                  <div class="form-group">
                    <label for="inputName">bandwith</label>
                    <input type="text" id="inputName" name="bandwith" value="{{old('bandwith')  }}" class="form-control @error('bandwith') form-control is-invalid @enderror">
                    @error('bandwith')
                    <small class="text-danger">*{{ $message }}*</small> 
                    @enderror
                       
                  </div>
                  <div class="form-group">
                    <label for="inputName">Domains</label>
                    <input type="text" id="inputName" name="domains" value="{{old('domains')  }}" class="form-control @error('domains') form-control is-invalid @enderror">
                    @error('domains')
                    <small class="text-danger">*{{ $message }}*</small> 
                    @enderror
                       
                  </div>

                  <div class="form-group">
                    <label for="inputName">sub_domains</label>
                    <input type="text" id="inputName" name="sub_domains" value="{{old('sub_domains')  }}" class="form-control @error('sub_domains') form-control is-invalid @enderror">
                    @error('sub_domains')
                    <small class="text-danger">*{{ $message }}*</small> 
                    @enderror
                       
                  </div>
                  
                  <div class="form-group col-6">
                    <label for="exampleFormControlFile1">File input</label>
                    <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
                    @error('image')
                    <small class="text-danger">*{{ $message }}}*</small> 
                    @enderror
                  </div>
                 
                  
               <div class="form-group text-center">
                <input type="submit" value="Create New" class="btn btn-success ">
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