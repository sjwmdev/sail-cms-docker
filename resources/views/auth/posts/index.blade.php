@extends('layouts.auth')
@section('styles')
<!-- <script src='https://kit.fontawesome.com/a076d05399.js';></script> -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"  rel="stylesheet">
<!-- <link rel="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/css/jquery.dataTables.css"> -->
<link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Posts Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Posts tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
             
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    @if (count($posts) > 0)
                    <h4 class="card-title">Posts</h4>
                    <!-- <p class="card-description"> Add class <code>.table-striped</code>? -->
                    </p>
                    
                    <table id="posts-table" class="table table-striped">
                      <thead>
                        <tr>
                          <th> Image</th>
                          <th> Title</th>
                          <th> Description</th>
                          <th> Status</th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td class="py-1">
                              <img src="{{ $post->gallery->image }}" style="width: 70px;" alt="image" />
                            </td>
                            <td> {{$post->title}}</td>
                            <td>
                              {!! Str::limit($post->description , 15) !!}
                              
                            </td>

                            <td>{{$post->published == 1 ? 'published' : 'Draft'}}</td>
                            <td>
                              <a href= ""  class="btn btn-sm btn-success"><i class='fas fa-eye'></i></a>
                              <a href= ""  class="btn btn-sm btn-info"><i class='fas fa-edit'></i></a>
                              <a href= ""  class="btn btn-sm btn-danger"><i class='fas fa-trash'></i></a>
                            </td>
                          </tr>
                          @endforeach
                         
                      </tbody>
                    </table>
                    @else
                    <h3  class="text-center text-danger" >No posts Found</h3>

                      
                    @endif

                  </div>
                </div>
              </div>
              
              
            </div>
          </div>

@endsection
@section('scripts')
<!-- <script  charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.js"></script> -->
<script src="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.js"></script>

<script>
  $(document).ready( function () {
    $('#posts-table').DataTable();
} );
</script>  
@endsection