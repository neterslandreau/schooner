@extends('layouts.diner-layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            @include('partials.admin-types')
                            @include('partials.admin-config')
                        </div>
                        <div class="col-md-8">
                            @include('partials.admin-items')
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
