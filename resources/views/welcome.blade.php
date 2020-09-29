@extends('layouts.master')

@section('header')
    @include('layouts.header')
@endsection

@section('container')
{{--  Landing page  --}}
{{--  Links v1  --}}
@include('layouts.links-1')
{{--  Slide  --}}
@include('layouts.slide')

{{--  Categories  --}}
@include('layouts.categories')

{{--  Popular products  --}}
@include('layouts.pop-products')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
