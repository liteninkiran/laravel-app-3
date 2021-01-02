@extends('layouts.app')

@section('content')

    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <h2 class="mb-4">Test Email</h2>
            <p>{{ $test_message }}</p>
        </div>
    </div>

@endsection
