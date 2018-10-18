@extends('xadmin.layouts.app')

@section('content')
<div class="container">
    <div class="card card-block">
        <div class="card-header">
            <strong class="card-title">
                Post List
            </strong>
        </div>
        <div class="card-body">
            <a href="{{route('xadmin.posts.create')}}" class="btn btn-success float-right">+ New Post</a>
            <table class="table table-hover">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
                @forelse($posts as $post)
                <tr>
                    <td>{{++$loop->index}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category->name}}</td>
                    <td>
                        <a href="{{route('xadmin.posts.show',$post->id)}}" class="btn btn-info">View</a>
                        <a href="{{route('xadmin.posts.edit',$post->id)}}" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                    @empty
                <tr>
                    <strong>No Data Found!</strong>
                </tr>
                    @endforelse
            </table>
        </div>
    </div>
</div>


@endsection

@push('scripts')


@endpush