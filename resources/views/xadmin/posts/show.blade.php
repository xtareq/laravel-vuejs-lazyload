@extends('xadmin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card card-block">
            <div class="card-header">
                <strong class="card-title">
                    Post List
                </strong>
            </div>
            <div class="card-body">
                <h3>{{$post->title}} <span class="badge badge-success">{{$post->category->name}}</span></h3>


                <strong>{{$post->user->name}}</strong>


                <p><strong class="float-right">{{\Carbon\Carbon::parse($post->created_at)->toFormattedDateString()}}</strong>{{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</p>
                <div>
                    {!! $post->content !!}
                </div>


            </div>
        </div>
    </div>



@endsection

@push('scripts')

    <script>
        $(document).ready(function(){
            $("img").addClass('img-fluid')
        })
    </script>

@endpush