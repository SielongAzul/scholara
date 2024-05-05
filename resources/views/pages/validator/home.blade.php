@extends('layout.app-layout')
@section('pageTitle', isset($pageTitle)? $pageTitle : 'Scholara | Validator home Home')
@section('content')


@include('pages.validator.layout.validator-sidebarnav')
    Dashboard Menu

@endsection