@extends('layout')

@section('content')
 <h1>Selamat datang {{ Auth::user()->name }} dihalaman Admin</h1>
@endsection

