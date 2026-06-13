@extends('layouts.app')

@section('title', 'Access denied | Solutions Delivered')
@section('robots', 'noindex, nofollow')

@section('content')
<x-error-page code="403" title="You don't have access to that">
    You don't have permission to view this page. If you think that's a mistake, let us know.
</x-error-page>
@endsection
