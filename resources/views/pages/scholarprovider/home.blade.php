@extends('layout.app-layout')
@section('pageTitle', isset($pageTitle)? $pageTitle : 'Scholara | Admin Home')
@section('content')


@include('pages.scholarprovider.layout.scholarprovider-sidebarnav')
    Dashboard Menu

@endsection