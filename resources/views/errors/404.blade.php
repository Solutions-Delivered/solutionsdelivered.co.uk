@extends('layouts.app')

@section('title', 'Page not found | Solutions Delivered')
@section('robots', 'noindex, nofollow')

@section('content')
<x-error-page code="404" title="We can't find that page">
    The page you were after has moved or never existed. Head back to the home page, or get in touch and we'll point you the right way.
</x-error-page>
@endsection
