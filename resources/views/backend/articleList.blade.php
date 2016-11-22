@extends('layouts.admin')
@section('content')
    <table class="table table-hover table-bordered">
        <tr class="text-center">
            <th>ID</th>
            <th>Title</th>
            <th>Category</th>
            <th>Written</th>
            <th>Published</th>
            <th>Edited</th>
            <th>Comments</th>
            <th>Hits</th>
            <th>Operations</th>
        </tr>
        @foreach($articles as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td>{{$article->heading}}</td>
                <td>{{$article->category->name}}</td>
                <td class="text-center">{{$article->createdAtHuman}}</td>
                <td class="text-center">{{$article->publishedAtHuman}}</td>
                <td class="text-center">{{$article->updatedAtHuman}}</td>
                <td class="text-center">{{$article->comment_count}}</td>
                <td class="text-center">{{$article->hit_count}}</td>
                <td>Edit | Delete</td>
            </tr>
        @endforeach
    </table>
@endsection