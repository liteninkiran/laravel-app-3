@extends('layouts.app')

@section('content')

    <script>

        // DATA TABLE
        $(document).ready( function ()
        {
            var table = $('#agencies-table').DataTable(
                {
                    responsive: true,
                    pageLength: 100
                })
                table.columns.adjust();
        });

    </script>  

    <div class="flex justify-center">

        {{-- PAGE --}}
        <div class="w-8/12 bg-white p-6 rounded-lg">

            {{-- PAGE HEADER --}}
            <div class="bg-blue-100 text-center text-3xl p-3 mb-3 rounded border md:border-gray-400 border-black">Agencies</div>

            {{-- ADD RECORD --}}
            @auth
                <div class="mb-4">
                    <a href="" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded font-medium mt-4 block w-36 text-center">Add Agency</a>
                </div>
            @endauth

            {{-- SHOW RECORDS --}}
            @if($agencies->count())

                    {{-- TABLE DATA --}}
                    <table id="agencies-table" style="width:100%">

                        {{-- HEADER ROW --}}
                        <thead>
                            <tr>
                                <th>Agency Name</th>
{{--
                                <th>Address Line 1</th>
                                <th>Address Line 2</th>
                                <th>Address Line 3</th>
                                <th>Address Line 4</th>
                                <th>Postcode</th>
--}}
                                <th>Telephone</th>

                                {{-- EDIT / DELETE --}}
                                @auth
                                    <th width="40px">Edit</th>
                                    <th width="60px">Delete</th>
                                @endauth
                            </tr>
                        </thead>

                        {{-- DATA ROWS --}}
                        <tbody>

                            @foreach($agencies as $agency)

                                <tr class="hover:bg-blue-100">
                                    <td><a href="{{ $agency->website}}" target="_blank" class="block hover:text-red-500">{{ $agency->agency_name}}</a></td>
{{--
                                    <td>{{ $agency->address_line_1}}</td>
                                    <td>{{ $agency->address_line_2}}</td>
                                    <td>{{ $agency->address_line_3}}</td>
                                    <td>{{ $agency->address_line_4}}</td>
                                    <td>{{ $agency->postcode}}</td>
--}}
                                    <td>{{ $agency->phone}}</td>
                                    @auth
                                        <td class="text-center"><a href="{{ route('agency.show', $agency) }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded font-medium text-center block">Edit</a></td>
                                        <td class="text-center"><a href="#" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded font-medium text-center block">Delete</a></td>
                                    @endauth
                                </tr>
                            @endforeach

                        </tbody>

                    </table>

            @else

                <p>No records to display</p>

            @endif

        </div>
    </div>
@endsection
