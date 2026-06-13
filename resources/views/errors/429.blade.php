@extends('layouts.app')

@section('title', 'Too many requests | Solutions Delivered')
@section('robots', 'noindex, nofollow')

@section('content')
<x-error-page code="429" title="That's a few too many requests">
    You've made a lot of requests in a short space of time. Give it a moment, then try again.
</x-error-page>
@endsection
