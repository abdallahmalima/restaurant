@extends('layouts.apps')

@section('content')
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Page Titles</h1>
            <a href="{{route('page_titles.create') }}" class="btn btn-tool bg-info float-sm-right">
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
          <h3 class="card-title">Page Titles</h3>

          <div class="card-tools">
            <form class="form-inline ml-3" method="GET" action="{{route('page_titles.search') }}">
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
                          #
                      </th>
                      <th style="width: 20%">
                        Second Section Item  Title
                      </th>
                      <th style="width: 30%">
                        Second Section  Title
                      </th>
                      <th style="width: 20%">
                        Actions
                      </th>
                  </tr>
              </thead>
              <tbody>
                  @forelse ($page_titles as $page_title)
                  <tr>
                      <td>
                          #
                      </td>
                      <td>
                          <a>
                            {{$page_title->title}}
                          </a>
                          <br/>
                          <small>
                              {{$page_title->created_at->diffForHumans()}}
                          </small>
                      </td>
                      <td>
                        {{  Str::limit($page_title->description,45)}}
                      </td>
                      <td class="project-actions text-right">
                          
                          <form method="POST" action="{{route('page_titles.destroy',$page_title) }}">
                            <a class="btn btn-info btn-sm" href="{{route('page_titles.edit',$page_title) }}">
                                <i class="fas fa-pencil-alt"></i> 
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
            {!! $page_titles->links() !!}
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