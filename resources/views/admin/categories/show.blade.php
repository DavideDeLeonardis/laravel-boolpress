@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            @if (session('status'))
                <div class="alert alert-danger">
                    {{ session('status') }}
                </div>
            @endif
        </div>

        <div class="row">
            <div class="col">
                <h1>All posts of Category: {{ $category->name }}</h1>
            </div>
        </div>

        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Editor Name</th>
                        <th scope="col">Post Name</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                        <th colspan="1" scope="col"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($category->posts()->get() as $post)
                        <tr>
                            <td>{{ $post->user()->first()->name }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>{{ $post->updated_at }}</td>
                            <td><a class="btn btn-primary" href="{{ route('admin.posts.show', $post->slug) }}">View</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
