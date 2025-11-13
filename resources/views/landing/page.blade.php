@extends('landing.layouts.master')
@section('title')
    {{ $page->title }}
@endsection
@section('main_content')
    <div class="mt-5">
        hey
    </div>
    <div class="m-auto">
        <div class="container mt-5">
            <div class="page-header my-2">
                <h2>{{ $page->title }}</h2>
            </div>
            <div class="content">
                <div class="card">
                    <div class="card-body">
                        {!! $page->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection