@extends('layouts.app')
@section('content')
<link href="./home.css" rel="stylesheet">
<link rel="icon" type="image/png" href="../assets/images/logos.jpg">

{{-- Display message --}}
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<th scope="col"><a class="download-btn register" style="background-color: blue; color: white; margin-left: 200px; padding: 15px 10px; border-radius: 5px" href="{{ route('products.index') }}">Add Book</a></th>
  <!-- Table for the list of registered user -->
<table class="table table-striped table-hover" style="width: 75%; margin-left: 200px; font-size: 15px; margin-top: 40px;">
    <thead>
        <tr>
            <center><th scope="col">ID</th></center>
            <th scope="col"><center>Book Title</center></th>
            <th scope="col"><center>Publisher</center></th>
            <th scope="col"><center>Author/s</center></th>
            <th scope="col"><center>Year Published</center></th>
            <th scope="col"><center>Volume</center></th>

        </tr>
    </thead>
    <tbody>

        @foreach ($products as $product) {{-- Loop products --}}
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td><center>{{ $product->name }}</center></td>
            <td><center>{{ $product->publisher }}</center></td>
            <td><center>{{ $product->author }}</center></td>
            <td><center>{{ $product->year }}</center></td>
            <td><center>{{ $product->volume }}</center></td>

            <td>
                <!-- Dropdown list of actions -->
                <div class="dropdown"> {{-- Dropdown --}}
                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="actionDropdown"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Actions
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                        <li><a class="dropdown-item" href="{{ route('products.show', $product->id) }}">View</a></li> {{-- View --}}
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('products.destroy', $product->id) }}" method="post"> {{-- Delete --}}
                                @csrf
                                @method('delete')
                                <button type="submit" class="dropdown-item">Delete</button>
                            </form>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('products.edit', $product->id) }}">Edit</a></li> {{-- View --}}
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>


@endsection

