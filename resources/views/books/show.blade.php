@extends('layouts.template')

@section('title', $book->title)

@section('content')
    <article class="book-show my-4">
        <h1 class="display-5 fw-bold">{{ $book->title }}</h1>
        <p class="book-show-meta">{{ $book->updated_at }}</p>
        <p>Jumlah Halaman :{{ $book->halaman }}</p>
        <p>Kategori Buku  :{{ $book->kategori }}</p>
        <p>Penerbit       :{{ $book->penerbit }}</p>
    </article>
@endsection
