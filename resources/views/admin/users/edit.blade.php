@extends('layouts.admin_app')

@section('content')
    <!-- Edit User Form Section -->
    <div class="col-md-12">
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
                <h2>Edit User: {{ $user->name }}</h2>
            </div>
            <div class="table_section padding_infor_info">
                <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password (Leave blank to keep unchanged)</label>
                        <input type="password" id="password" name="password" class="form-control">
                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>

                   
                    <button type="submit" class="btn btn-warning btn-sm">Update User</button>
                    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary btn-sm">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
