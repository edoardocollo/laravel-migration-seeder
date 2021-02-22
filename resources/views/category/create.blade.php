@extends('layout.main')
@section('titolo_head')
  categorie create
@endsection
@section('titolo')
  categorie create
@endsection
@section('nav')
  @include('layout.nav')
@endsection
@section('main')
  @include('layout.create_category')
@endsection
