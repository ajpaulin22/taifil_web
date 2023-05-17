

@extends('layout.layout')
@section('content')
    @include('_partials.banner_partial')
    @include('_partials.departure_partial')
    @include('_partials.about_partial')
    @include('_partials.ttip_partial')
    @include('_partials.ssw_partial')
    @include('_partials.gallery_partial')
    @include('pages.inquiry')
@endsection

@push('script')
    <script src="{{asset('js/onepage.js')}}"></script>
@endpush