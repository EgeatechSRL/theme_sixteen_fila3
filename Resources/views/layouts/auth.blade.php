@extends('pub_theme::layouts.base')

@section('body')
    <div style="background-color:#18181B;" class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
        @yield('content')

        @isset($slot)
            {{ $slot }}
        @endisset
    </div>
@endsection
