@extends('header')

@section('content')
<div class="navigation-bar">
    <a href="{{ route('pemohon.baru', ['step' => 1]) }}" class="tab {{ request('step', 1) == 1 ? 'active' : '' }}">Step 1: Pemohon</a>
    <a href="{{ route('pemohon.baru', ['step' => 2]) }}" class="tab {{ request('step') == 2 ? 'active' : '' }}">Step 2: Pasangan</a>
    <a href="{{ route('pemohon.baru', ['step' => 3]) }}" class="tab {{ request('step') == 3 ? 'active' : '' }}">Step 3: Pendapatan</a>
</div>
<div class="form-container">
    @yield('form-content')
</div>

@endsection