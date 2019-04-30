@extends('layouts.main')

@section('content')
    <h2>All Trips</h2>

    <a href="{{ route('trips.create') }}">Add Trip</a>
    <table border="1">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Description</th>
            <th>Detail</th>
            <th>Category</th>
            <th>Submitted At</th>
        </tr>

        @forelse($trips as $trip)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $trip->title }}</td>
                <td>{{ $trip->description }}</td>
                <td>{{ str_limit($trip->details, 20) }}</td>
                <td>{{ $trip->category->title }}</td>
                <td>{{ \Carbon\Carbon::parse($trip->created_at)->format('Y-m-d D') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No Trips Found</td>
            </tr>
        @endforelse

    </table>


@endsection