@extends('layouts.default')

@section('title')
<title>Home</title>
@endsection

@section('header')
  @include('frontEnd.includes.header')
@endsection


@section('main')
  @include('frontEnd.includes.banner')
  @include('frontEnd.includes.destacados')
  @include('frontEnd.includes.masbuscados')
  @include('frontEnd.includes.search')
  @include('frontEnd.includes.bannerbottom')
@endsection


@section('footer')
	@include('frontEnd.includes.footer')
@endsection
