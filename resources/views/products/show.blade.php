@extends('layout')
<link rel="icon" type="image/png" href="../assets/images/logos.jpg">
@section('content')
    <h1>View Book Information</h1>
    <hr/>

    <div class="bg-dark text-white rounded p-3">
        <h5 class="text-warning">Book Title</h5>
        <p class="fw-bold">{{ $product->name }}</p>

        <h5 class="text-warning">Publisher</h5>
        <p class="fw-bold">{{ $product->publisher }}</p>

        <h5 class="text-warning">Year Published</h5>
        <p class="fw-bold">{{ $product->year }}</p>

        <h5 class="text-warning">Author/s</h5>
        <p class="fw-bold">{{ $product->author }}</p>


        <h5 class="text-warning">Volume</h5>
        <p class="fw-bold">{{ $product->volume }}</p>

    </div>

@endsection


@section('content')

<h1>Products Create</h1>
<hr/>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@endsection
