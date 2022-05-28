@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">會員管理</div>

                @include('auth.edit')
            </div>
        </div>
    </div>
</div>
@endsection
