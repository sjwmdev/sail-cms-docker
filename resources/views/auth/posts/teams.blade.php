@extends('layouts.auth')

@section('title' , 'Create Post')

@section('styles')

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

@endsection


@section('content')

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Techburg Team Form </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Techburg Members</a></li>
          <li class="breadcrumb-item active" aria-current="page">Techburg</li>
        </ol>
      </nav>
    </div>


      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Add techburg members</h4>
            {{-- <p class="card-description"> Basic form elements </p> --}}
            <form class="forms-sample"  method="post" action="{{ route('teams.store') }}"  enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="exampleInputName1">Name</label>
                <input name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Name" value="{{old('name')}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Title/Position</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail3" placeholder="Title/Position" value="{{old('title')}}">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword4">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputPassword4" placeholder="email" value="{{old('email')}}">
              </div>

              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Image Upload</label>
                <div class="col-sm-9">
                  <input type="file"  name="file" class="form-control" required>
                </div>
              </div>

              <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>

            </form>
          </div>
        </div>
      </div>



    </div>
  </div>

@endsection

@yield('scripts')
