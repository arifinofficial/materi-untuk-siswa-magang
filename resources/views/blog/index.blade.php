@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <a class="btn btn-primary" href="{{ route('blog-create') }}">
            Tambah Blog
        </a>
    </div>
</div>
@endsection
