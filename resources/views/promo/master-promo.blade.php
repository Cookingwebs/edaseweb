  
@extends('layouts.plantilla-promo', ['chat' => $chat])

@section('title', 'Master')

@section('id-page', 'master')

@section('content')
    @include('components.master')
@endsection