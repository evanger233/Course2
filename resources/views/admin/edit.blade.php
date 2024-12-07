@extends('layouts.admin_app')

@section('content')
<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
        <div class="full graph_head">
            <h2>Edit Admin</h2>
        </div>
        <div class="form_section padding_infor_info">
            <form action="{{ route('admin.admins.update', $admin->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Name Field -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $admin->name) }}" placeholder="Enter Name" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email Field -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $admin->email) }}" placeholder="Enter Email" required>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password Field (Optional) -->
                <div class="form-group">
                    <label for="password">New Password (Optional)</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Enter New Password">
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

              

                <button type="submit" class="btn btn-success">Update Admin</button>
                <a href="{{ route('admin.admins.index') }}" class="btn btn-secondary">Back to List</a>
            </form>
        </div>
    </div>
</div>
@endsection
