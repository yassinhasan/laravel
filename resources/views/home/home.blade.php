@extends("layout.app")
@section("title","Home Page")
@section('links')
    <link rel="stylesheet" href="{{asset("/css/home/loginForm.css")}}">
@endsection
{{--@section("navbar")--}}
{{--    @include("layout.navbar")--}}
{{--@endsection--}}

@section("content")

@include("home.loginForm")
@endsection
