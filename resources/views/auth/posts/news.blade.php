@extends('layouts.auth')

@section('title' , 'Create Post')

@section('styles')


@endsection

@section('content')

<div class="container-fluid page-body-wrapper">
       
       <!-- partial -->
       <div class="main-panel">
         <div class="content-wrapper">
           <div class="page-header">
             <h3 class="page-title"> Post </h3>
             <nav aria-label="breadcrumb">
               <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="">Post</a></li>
                 <li class="breadcrumb-item active" aria-current="page">Create post</li>
               </ol>
             </nav>
           </div>
           <div class="row">
             
           
             <div class="col-md-12 grid-margin stretch-card">
               <div class="card">
                 <div class="card-body">
                   <h4 class="card-title">Latest News</h4>

                   @if ($errors->any())
                    <div class="alert alert-danger">
                      <ul>
                     
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

                     <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Image Upload</label>
                        <div class="col-sm-9">
                          <input type="file"  name="image" class="form-control" required>
                        </div>
                      </div>
              
                       
                     <label class="col-sm-3 col-form-label">Content</label>
                     <textarea name="content"  class="form-control" id="" cols="5"  rows="7"  required></textarea>

                     <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                     
                   </form>
                 </div>
               </div>
             </div>
             
           </div>
         </div>

@endsection

@section('scripts')


<script>


</script>

@endsection