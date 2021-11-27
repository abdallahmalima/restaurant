@extends('layouts.apps')

@section('content')
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Messages</h1>
            <a href="{{route('messages.create') }}" class="btn btn-tool bg-info float-sm-right">
                <i class="fas fa-plus"></i></a>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Messages</h3>

          <div class="card-tools">
            <form class="form-inline ml-3" method="GET" action="{{route('messages.search') }}">
                <div class="input-group input-group-sm bg-info">
                  <input class="form-control form-control-navbar" name="keyword" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
                
              </form>

              
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          Sender's Name
                      </th>
                      <th style="width: 20%">
                          Sender's email
                      </th>
                      <th style="width: 30%">
                          Message Body
                      </th>
                      <th style="width: 20%">
                        Actions
                      </th>
                  </tr>
              </thead>
              <tbody>
                  @forelse ($messages as $message)
                  <tr>
                      <td>
                        {{$message->name}}
                      </td>
                      <td>
                          <a>
                            {{$message->email}}
                          </a>
                          <br/>
                          <small>
                              {{$message->created_at->diffForHumans()}}
                          </small>
                      </td>
                      <td>
                        {{Str::limit($message->body,19)}}
                      </td>
                      <td class="project-actions text-right">
                          
                          <form method="POST" action="{{route('messages.destroy',$message) }}">
                            <a class="btn btn-info btn-sm" href="{{route('messages.show',$message) }}">
                              <i class="fas fa-eye"></i> 
                          </a>
                            @csrf
                            @method('DELETE')
                          <button onclick="return confirm('Are you Sure you to delete this ?')" class="btn btn-danger btn-sm" type="submit">
                              <i class="fas fa-trash"></i>
                          </button>
                        </form>
                      </td>
                  </tr>
                  @empty
                  <tr><td colspan="4" class="text-center">Records Not Found</td></tr>
                    
                  @endforelse
                  
              </tbody>
          </table>
          <div class="d-flex justify-content-center pt-3 ">
            {!! $messages->links() !!}
         </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->  
@endsection