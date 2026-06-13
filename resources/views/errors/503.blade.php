@extends('layouts.app')

@section('title', 'Back shortly | Solutions Delivered')
@section('robots', 'noindex, nofollow')

@section('content')
<x-error-page code="503" title="We're down for a moment">
    We're doing a quick bit of maintenance and will be back shortly. Thanks for your patience.
</x-error-page>
@endsection
