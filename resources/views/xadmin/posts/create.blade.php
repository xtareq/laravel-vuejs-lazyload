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
                <form action="{{route('xadmin.posts.store')}}" class="form-horizontal" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category_id" id="" required>
                            @forelse(\App\Category::all() as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @empty
                            <optin value="">--no data--</optin>
                                @endforelse
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Body</label>
                        <textarea name="body" id="content" class="form-control" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Save" class="btn btn-success">
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection

@push('scripts')

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };

        CKEDITOR.replace( 'content', options );
    </script>
@endpush