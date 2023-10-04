@extends('layouts.auth')
@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">
@endsection
{{-- hh --}}

@section('content')
<div class="main-panel"> 
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> About Us </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">About Us</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us Page</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @if (count($aboutUsData) > 0)
                        <h4 class="card-title">About Us</h4>
                        <table id="about-us-table" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Description</th>        
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($aboutUsData as $about)
                                <tr>
                                    <td class="py-1">
                                        <img src="{{ asset('storage/images/' . $about->image) }}" style="width: 70px;" alt="image" />
                                    </td>
                                    <td> {{ $about->title }}</td>
                                    <td>{{ $about->description }}</td>
                                    <td>
                                        <a href= "#"  class="btn btn-sm btn-success"><i class='fas fa-eye'></i></a>
                                        <a href= "#"  class="btn btn-sm btn-info"><i class='fas fa-edit'></i></a>
                                        <a href= "#"  class="btn btn-sm btn-danger"><i class='fas fa-trash'></i></a>
                                      </td>

                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <h3 class="text-center text-danger">No About Us data Found</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#about-us-table').DataTable();
    });
</script>
@endsection
{{-- <script>
    $(document).ready(function () {
        $('#about-us-table').on('click', '.btn-success', function (e) {
            e.preventDefault();
            
            // Find the closest <tr> element to the clicked icon
            var $row = $(this).closest('tr');
            
            // Retrieve the data-id attribute value from the closest <tr> element
            var postId = $row.data('id');
            var token = "{{ csrf_token() }}";

            $.ajax({
                type: 'POST',
                url: "{{ route('publish', ['id' => '']) }}/" + postId,
                data: {
                    _token: token
                },
                success: function (data) {
                    // Handle success (e.g., show a success message or update the view)
                    alert('Content published successfully');
                },
                error: function (error) {
                    // Handle errors (e.g., show an error message)
                    alert('Error publishing content');
                }
            });
        });

        $('#about-us-table').DataTable();
    });
</script> --}}

