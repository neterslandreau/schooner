@extends('layouts.app')

@section ('content')
<div class="container">
    <div class="col-sm-8 blog-main">

    <h1>Create Menu Item</h1>

        <hr>

        @include ('layouts.errors')
        <form method="post" action="/items" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="types">Menu Type</label>
                <select name="type_id" class="form-control">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control rounded-0" id="item-description" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" id="image" name="image" class="form-control">
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" id="price" name="price" class="form-control">
            </div>

            <div class="form-group">
                <label for="featured">Featured</label>
                <select name="featured" class="form-control">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
        </form>

    </div>
</div>

@endsection