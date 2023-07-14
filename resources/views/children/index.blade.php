@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="/">
        @csrf
        <button id="addRow" type="button" class="btn btn-primary">Add New</button>
        <button type="submit" class="btn btn-success">Save</button>
        <table id="childrenTable" class="table">
            <thead>
                <tr>
                    <th>Action</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Different Address?</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Zip Code</th>
                </tr>
            </thead>
            <tbody>
                @foreach($children as $child)
                    @include('children.row', ['child' => $child])
                @endforeach
            </tbody>
        </table>
    </form>
</div>
@endsection
