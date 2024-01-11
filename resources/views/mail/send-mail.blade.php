{{-- <x-mail-layout>
    <x-slot:title>
        {{ $subject }}
    </x-slot:title>
    <x-slot:title>
        {!! $body !!}
    </x-slot:title>
</x-mail-layout> --}}
{{-- hello test again

herer... --}}
@extends('layouts.mail')

@section('title', $subject)

@section('slot')
    {!! $body !!}
@stop
