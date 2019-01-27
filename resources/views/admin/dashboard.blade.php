@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                Dashboard

                @include('admin.sidebar')
            </div>
        </div>
    </div>
</div>
@endsection
