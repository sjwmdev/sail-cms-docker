@extends('layouts.auth')

@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">Team Members</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Team Members</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @if (count($teamMembers) > 0)
                        <h4 class="card-title">Team Members</h4>
                        <table id="team-members-table" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teamMembers as $teamMember)
                                <tr>
                                    <td class="py-1">
                                        <img src="{{ asset($teamMember->photo) }}" style="width: 45px;" alt="Team Member Photo" />
                                    </td>
                                    <td>{{ $teamMember->name }}</td>
                                    <td>{{ $teamMember->position }}</td>
                                    <td>{{ $teamMember->email }}</td>
                                    <td>
                                        <a href="{{ route('teams.edit', ['team' => $teamMember->id]) }}" class="btn btn-sm btn-info"><i class='fas fa-edit'></i></a>
                                        <form action="{{ route('teams.destroy', ['team' => $teamMember->id]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i class='fas fa-trash'></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <h3 class="text-center text-danger">No team members found</h3>
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
        $('#team-members-table').DataTable();
    });
</script>
@endsection
