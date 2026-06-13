@extends('layouts.app')

@section('title', 'Page expired | Solutions Delivered')
@section('robots', 'noindex, nofollow')

@section('content')
<x-error-page code="419" title="Your session expired">
    The page sat open a little too long. Refresh and try again, and you'll be fine.
</x-error-page>
@endsection
