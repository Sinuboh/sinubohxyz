@extends('sinubohxyz.app')

@section('content')
    <div class="m-5">
        @foreach ($socials as $social)
            @include('sinubohxyz.card', ['social' => $social])
        @endforeach
    </div>
@endsection