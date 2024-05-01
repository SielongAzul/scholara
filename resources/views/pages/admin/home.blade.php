@extends('back.layout.pages-layout')
@section('pageTitle', isset($pageTitle)? $pageTitle : 'Scholara | Admin Home')
@section('content')


@include('admin-sidebarnav')
    content here...

@endsection