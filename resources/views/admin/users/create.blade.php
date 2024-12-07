@extends('layouts.admin_app')

@section('content')
    <!-- Add User Form Section -->
    <div class="col-md-12">
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
                <h2>Add New User</h2>
            </div>
            <div class="table_section padding_infor_info">
                <form action="{{ route('admin.users.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>

                   
                    <button type="submit" class="btn btn-success btn-sm">Add User</button>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary btn-sm">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
