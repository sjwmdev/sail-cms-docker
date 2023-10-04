 @extends('layouts.auth')

 @section('title' , 'Create Post')

 @section('styles')

 {{-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"> --}}
 {{-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> --}}

 @endsection

@section('content')

<div class="container-fluid page-body-wrapper">
        
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Features Section </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="">Features section</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Create post</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              
            
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Features</h4>

                    @if ($errors->any())
                     <div class="alert alert-danger">
                       <ul>
                      @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                      @endforeach
                       </ul>
                     </div>
                    @endif
                    <!-- <p class="card-description"> Horizontal form layout </p> -->
                    <form class="forms-sample"  method="post"  action="{{ route('store') }}"  enctype="multipart/form-data">
                    @csrf
                      
                      

                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Title</label>
                        <div class="col-sm-9">
                          <input type="text"  name="title" class="form-control" id="exampleInputUsername2" placeholder="Title"  value="{{old('title')}}">
                        </div>
                      </div>
                        
                      <label class="col-sm-3 col-form-label">Description</label>
                      <textarea name="description"  class="form-control" id="" cols="20"  rows="7"  required></textarea>

                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      
                    </form>
                  </div>
                </div>
              </div>
              
            </div>
          </div>

@endsection

@section('scripts')

{{-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> --}}

<script>
//     $(document).ready(function() {
//   $('#summernote').summernote();
// });

</script>

@endsection