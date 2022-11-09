@extends('layouts.front')
@section('temp')

    <style>
        .blog-container {
            margin-top: 100px;
        }
    </style>

    <div class="container blog-container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    @foreach($blogData as $blog)
                        <div class="col-md-4 card" style="width: 18rem;">
                            <img src="{{url('images/'.$blog->image)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$blog->title}}</h5>
                                <p class="card-text">
                                    {{$blog->getLimitBlogData()}}
                                </p>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
