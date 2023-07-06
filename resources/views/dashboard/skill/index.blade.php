@extends('dashboard.layout')

@section('konten')
    <form action="{{ route('skill.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">PROGRAMMING LANGUAGES & TOOLS</label>
            <input type="text" class="form-control form-control-sm" name="_language" id="judul" aria-describedby="helpId"
                placeholder="Programming Language & Tools" value="">
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">WORKFLOW</label>
            <textarea class="form-control summernote" rows="5" name="_workflow"></textarea>
        </div>
        <button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>

    </form>
@endsection
