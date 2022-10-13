@extends('layouts.base')
@section('title', 'List of Fragrances')
@section('container')
<main class="container">
    <h1 class="alert alert-dark text-center">List of fragrances</h1>
    <table class="table table-bordered table-stripped">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Ranking</th>
            <th>Brand Name</th>
            <th>Original?</th>
            <th>Status</th>
            <th>Price</th>
            <th>Base Discount</th>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @foreach($fragrances as $fragrance)
            <tr>
                <td>{{$fragrance->id}}</td>
                <td>{{$fragrance->name}}</td>
                <td>{{$fragrance->ranking}}</td>
                <td>{{$fragrance->brand_name}}</td>
                <td>{{$fragrance->is_original}}</td>
                <td>{{$fragrance->status}}</td>
                <td>{{$fragrance->price}}</td>
                <td>{{$fragrance->discount}}</td>
                <td>{{$fragrance->img_url}}</td>
                <td><a href="{{route('fragrances.edit', $fragrance)}}" class="btn btn-success">Edit</a></td>
                <td>
                    <form action="{{route('fragrances.destroy', $fragrance)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Delete {{$fragrance->name}}')">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class="col d-grid">
            <a href="/fragrances/create" class="btn btn-dark">Create new fragrance</a>
        </div>
</main>
@endsection