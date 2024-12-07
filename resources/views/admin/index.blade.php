@extends('layouts.admin_app')

@section('content')
    <!-- table section -->
    <div class="col-md-12">
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <h2>Admins List</h2>
                    <!-- Add Admin Button -->
                    <a href="{{ route('admin.admins.create') }}" class="btn btn-warning btn-sm">Add Admin</a>
                </div>
            </div>
            <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($admins as $admin)
                                <tr>
                                    <td>{{ $admin->id }}</td>
                                    <td>{{ $admin->name }}</td>
                                    <td>{{ $admin->email }}</td>
                                    <td>{{ $admin->created_at->format('Y-m-d H:i') }}</td>
                                    <td>
                                        @if(Auth::guard('admins')->user()->id == 3 || Auth::guard('admins')->user()->id == $admin->id)
                                        <a href="{{ route('admin.admins.edit', $admin->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        @endif
                                        <form action="{{ route('admin.admins.destroy', $admin->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                  
                                           
                                            @if(Auth::guard('admins')->user()->id == 3 )
                                                 <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            @endif
                                        </form>
                                    </td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
