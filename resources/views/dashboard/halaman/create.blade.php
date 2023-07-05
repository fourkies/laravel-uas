@extends('dashboard.layout')

@section('konten')
    <div class="pb-3"><a href="{{ route('halaman.index') }}">
            << kembali</a>
    </div>
    <form action="{{ route('halaman.store') }}" method="POST">

    </form>
@endsection
