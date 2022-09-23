
@extends('layouts.app')

@section('content')
<link href="/login.css" rel="stylesheet">
<link rel="icon" type="image/png" href="../assets/images/logos.jpg">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card forms">
                <div class="card-header head">{{ __('Edit Book Information') }}</div>

                <div class="card-body">
                <form action="{{ route('products.update', $product->id) }}" method="post" >
                    @csrf
                    @method('put')
                    <label for="">Book Title :</label>
                    <input type="text" name="name" class="form-control mb-3" value="{{ $product->name }}"/>

                    <label for="">Publisher :</label>
                    <input type="text" name="publisher" class="form-control mb-3" value="{{ $product->publisher }}"/>

                    <label for="">Author/s :</label>
                    <input type="text" name="author" class="form-control mb-3" value="{{ $product->author }}"/>

                    <label for="">Year Published :</label>
                    <input type="text" name="year" class="form-control mb-3" value="{{ $product->year }}"/>
                    
                    <label for="">Volume :</label>
                    <input type="text" name="volume" class="form-control mb-3" value="{{ $product->volume }}"/>

                    <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

