@extends('layouts.app')

@section('content')
    <iframe
    src="https://www.google.com/maps?q={{ $response->lat }}, {{ $response->lng }}&output=embed&t=m&z=12&hl=ja" 
    width="800"
    height="600"
    frameborder="0"
    style="border:0"
    allowfullscreen
>
</iframe>
@endsection