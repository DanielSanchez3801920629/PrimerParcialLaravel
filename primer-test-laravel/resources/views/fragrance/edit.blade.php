@extends('layouts.base')
@section('title', 'Edit a fragrance')
@section('container')
<main class="container">
    <h1 class="alert alert-dark text-center">Edit a fragrance</h1>
    <form method="POST" action="{{route('fragrances.update', $fragrance)}}">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="name" value="{{old('name',$fragrance->name)}}">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="ranking" class="form-label">Ranking</label>
                    <input type="text" class="form-control" name="ranking" id="ranking" aria-describedby="ranking" value="{{old('ranking',$fragrance->ranking)}}">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="brand_name" class="form-label">Brand Name</label>
                    <input type="text" class="form-control" name="brand_name" id="brand_name" aria-describedby="brand_name" value="{{old('brand_name',$fragrance->brand_name)}}">
                </div>
            </div>

            <div class="col-6">
                <div class="mb-3">
                    <label for="is_original" class="form-label">Original?</label>
                    <input type="text" class="form-control" name="is_original" id="is_original" aria-describedby="is_original" value="{{old('is_original', $fragrance->is_original)}}">
                </div>
            </div>

            <div class="col-6">
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <input type="text" class="form-control" name="status" id="status" aria-describedby="status" value="{{old('status', $fragrance->status)}}">
                </div>
            </div>

            <div class="col-6">
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" name="price" id="price" aria-describedby="price" value="{{old('price', $fragrance->price)}}">
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="discount" class="form-label">Discount</label>
                    <input type="text" class="form-control" name="discount" id="discount" aria-describedby="discount" value="{{old('discount', $fragrance->discount)}}">
                </div>
            </div>

            <div class="col-6">
                <div class="mb-3">
                    <label for="saleend" class="form-label">Status</label>
                    <input type="date" class="form-control" name="saleend" id="saleend" aria-describedby="saleend" value="{{old('saleend', $fragrance->saleend)}}">
                </div>
            </div>

            <div class="col-6">
                <div class="mb-3">
                    <label for="img_url" class="form-label">Image URL</label>
                    <input type="text" class="form-control" name="img_url" id="img_url" aria-describedby="img_url" value="{{old('img_url', $fragrance->img_url)}}">
                </div>
            </div>
        </div>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="col-12">
            <button class="btn btn-secondary" type="submit">Save</button>
        </div>
    </form>
</main>
@endsection