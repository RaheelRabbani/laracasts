@extends('layouts.app')

@section('content')
    <form method="POST" action="/payments">
        @csrf
        <button type="submit">Make Payment</button>
    </form>
@endsection