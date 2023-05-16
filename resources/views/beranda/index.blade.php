@extends('layout.master')
@section('title','Dashboard')

@section('content')
    <div class="card">
        <div class="card">
            <div class="card-header" >
                <h3 class="card-title">@yield('title')</h3>
            </div>
            <div class="card-body" >
                <div class="text-center">
                    <img src="../../image/AlurLoker.png" class="rounded" alt="Alur Loker">
                </div>
            </div>
            <div class="card-footer">
                {{--Footer--}}
            </div>
        </div>
    </div>
@endsection