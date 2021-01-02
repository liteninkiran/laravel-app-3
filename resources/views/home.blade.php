@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg">

            <h2 class="mb-4">Test Email</h2>

            <form action="{{ route('send-email') }}" method="post" class="">
                @csrf
                <button class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded font-medium mb-4">Send Test Email</button>
            </form>

            <form action="{{ route('view-email') }}" method="post" class="">
                @csrf
                <button class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 rounded font-medium mb-4">View Test Email</button>
            </form>

            @isset($result)
                {{ $result }}
            @endisset

        </div>
    </div>
@endsection
