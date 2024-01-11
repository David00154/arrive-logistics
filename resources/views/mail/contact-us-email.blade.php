{{-- <div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    A message was sent from {{ $name }} with email {{ $email }}
</div> --}}


@extends('layouts.mail')

@section('title', $subject)

@section('slot')
    <h1 style="font-weight: 800;color: #000000;font-size: 20px;">
        A message was sent from {{ $name }} with email {{ $email }}</h1>
    <div></div>
    {!! $body !!}
@stop
