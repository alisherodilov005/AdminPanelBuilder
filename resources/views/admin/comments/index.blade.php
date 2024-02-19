@extends('admin.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h2>{{__('backend.comment')}}</h2>
            <a href="{{ route('admin.comment.create') }}" class="btn btn-success">Create Comment</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>
                        id
                    </th>
                    <th>
                        name
                    </th>
                    <th>
                        title
                    </th>
                    <th>
                        Description
                    </th>
                    <th>
                        Action
                    </th>
                </thead>
                <tbody>
                   @foreach($comments as $comment)
                   <tr>
                    <td>
                        {{$comment->id}}
                    </td>
                    <td>
                        {{$comment->name}}
                    </td>
                    <td>
                        {{$comment->title}}
                    </td>
                    <td>
                        {{$comment->description}}
                    </td>
                    <td>
                        <form action="{{ route('admin.comment.destroy', $comment->id) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                   </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection