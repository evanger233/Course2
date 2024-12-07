<!-- resources/views/admin/articles/index.blade.php -->
@extends('layouts.admin_app')

@section('content')
    <!-- table section -->
    <div class="col-md-12">
        <div class="white_shd full margin_bottom_30">
            <div class="full graph_head">
            <div  style="display: flex; justify-content: space-between; align-items: center;">
                <h2>Articles List</h2>
                <!-- Add Article Button -->
                <a href="{{ route('admin.articles.create') }}" class="btn btn-warning btn-sm">Add Article</a>
            </div>

            </div>
            <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $article)
                                <tr>
                                    <td>{{ $article->id }}</td>
                                    <td>{{ $article->title }}</td>
                                    <td>{{ $article->created_at->format('Y-m-d H:i') }}</td>
                                    <td>
                                        <!-- Example: View, Edit, Delete actions -->
                                        <a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
