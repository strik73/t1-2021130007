@extends('layouts.template')

@section('title', 'Book List-')

@section('content')
    <div class="mt-4 p-5 bg-black text-white rounded">
        <h1>All Books Data</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success mt-4">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="container mt-5">
        <div><a href="{{ route('books.create', $books) }}" class="btn btn-outline-success btn-lg">Input Data</a></div><br>
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">ISBN</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Halaman</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($books as $book)
                    <tr>
                        <th scope="row">{{ $book->isbn }}</th>
                        <td><a href="{{ route('books.show', $book) }}">
                                {{ $book->judul }}
                            </a></td>
                        <td>{{ $book->halaman }}</td>
                        <td>{{ $book->kategori }}</td>
                        <td>{{ $book->penerbit }}</td>
                        <td>{{ $book->created_at }}</td>
                        <td>{{ $book->updated_at }}</td>
                        <td>
                            <a href="{{ route('books.edit', $book) }}" class="btn btn-primary btn-sm">
                                Edit
                            </a>
                            <form action="{{ route('books.destroy', $book) }}" method="POST" class="d-inline-block">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure?')">Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No books found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $books->links() !!}
        </div>
    </div>
@endsection
