@extends('layouts.app')

@section ('content')
<div class="container">
    <div class="col-sm-8 blog-main">

    <h1>Create Menu Type</h1>

        <hr>

        @include ('layouts.errors')
        <form method="post" action="/types">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" id="description" name="description" class="form-control">
            </div>

            <div class="form-group">
                <label for="description">Order</label>
                <input type="text" id="order" name="order" class="form-control" value="{{ $type->order }}">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>

    </div>
</div>

@endsection