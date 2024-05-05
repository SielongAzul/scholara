@extends('layout.app-layout')
@section('pageTitle', isset($pageTitle)? $pageTitle : 'Scholara | Admin Home')
@section('content')


@include('pages.admin.layout.admin-sidebarnav')
    Dashboard Menu

@endsection