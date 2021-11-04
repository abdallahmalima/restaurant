@extends('layouts.apps')

@section('content')
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Prices</h1>
            <a href="{{route('prices.create') }}" class="btn btn-tool bg-info float-sm-right ">
                <i class="fas fa-plus"></i></a>
                <a href="{{route('price_pdf') }}" class="btn btn-tool bg-success float-sm-right mr-3">
                  <i class="fas fa-download"> Generate PDF</i></a>
                  <a href="{{route('price_export_excel') }}" class="btn btn-tool bg-success float-sm-right mr-3">
                    <i class="fas fa-download"> Export Excel</i></a>
                    <a href="{{route('price_export_csv') }}" class="btn btn-tool bg-success float-sm-right mr-3">
                      <i class="fas fa-download"> Export CSV</i></a>
                    <a href="{{route('prices.excel.create') }}" class="btn btn-tool bg-success float-sm-right mr-3">
                      <i class="fas fa-download"> Import Excel</i></a>
          </div>
         
        </div> 
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Headers</h3>

          <div class="card-tools">
            <form class="form-inline ml-3" method="GET" action="{{route('prices.search') }}">
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
                          Priced Item Name
                      </th>
                      <th style="width: 30%">
                          Figure
                      </th>
                      <th style="width: 20%">
                        Actions
                      </th>
                  </tr>
              </thead>
              <tbody>
                  @forelse ($prices as $price)
                  <tr>
                      <td>
                          #
                      </td>
                      <td>
                          <a>
                            {{$price->name}}
                          </a>
                          <br/>
                          <small>
                              {{$price->created_at->diffForHumans()}}
                          </small>
                      </td>
                      <td>
                        {{$price->number}}
                      </td>
                      <td class="project-actions text-right">
                          
                          <form method="POST" action="{{route('prices.destroy',$price) }}">
                            <a class="btn btn-info btn-sm" href="{{route('prices.edit',$price) }}">
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
          <div class="d-flex justify-content-center pt-3">
            {!! $prices->links() !!}
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