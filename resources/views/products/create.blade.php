@extends('layout')

@section('content')
<link rel="icon" type="image/png" href="./img/logo.png">
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

<form action="{{ route('products.store') }}" method="post">
    @csrf
    <input type="text" name="name" class="form-control mb-3" placeholder="Name"/>
    
    <input type="number" name="age" class="form-control mb-3" placeholder="Age"/>

    <input type="text" name="address" class="form-control mb-3" placeholder="Address"/>
    
    <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
</form>

@endsection
