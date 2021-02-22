@extends('layout.main')
@section('titolo_head')
  prodotti show
@endsection
@section('titolo')
  prodotti show
@endsection
@section('nav')
  @include('layout.nav')
@endsection
@section('main')
  @include('layout.show_product')
@endsection
