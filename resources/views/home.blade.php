@extends('layouts.diner-layout')

@section('content')
<div class="container-fluid">
    <div class="col-xs-12 col-md-12">
        <button type="button" class="btn btn-primary" id="toggle-panels">Menu Items</button>
        <button type="button" class="btn btn-primary" id="toggle-panels">Menu Types</button>
        <button type="button" class="btn btn-primary" id="toggle-panels">Site Configuration</button>
    </div>

        <div id="site-configuration" style="display:none;">
            <div class="col-xs-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Menu Types</div>
                    <div class="panel-body" style="overflow: scroll;">
                        @include('partials.admin-types')
                    </div>
                </div>
            </div>
        </div>

        <div id="site-projects" style="display:block;">
            <div class="col-xs-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Menu Items</div>

                    <div class="panel-body" style="overflow: scroll;">
                        @include('partials.admin-items')
                    </div>
                </div>
            </div>
        </div>

        <div id="site-projects" style="display:block;">
            <div class="col-xs-12 col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Menu Items</div>
                    <div class="panel-body" style="overflow: scroll;">
                        @include('partials.admin-config')
                    </div>
                </div>
            </div>
        </div>

</div>
@endsection
