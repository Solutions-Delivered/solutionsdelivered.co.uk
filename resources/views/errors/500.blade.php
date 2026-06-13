@extends('layouts.app')

@section('title', 'Something went wrong | Solutions Delivered')
@section('robots', 'noindex, nofollow')

@section('content')
<x-error-page code="500" title="Something went wrong our end">
    That's on us, not you. We've logged it. Please try again shortly, or get in touch if it keeps happening.
</x-error-page>
@endsection
