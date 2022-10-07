@extends('layout')

@section('product')
<div class="product_container">
    <div class="product_info_container">
        <div class="product_info">
            <div class="product_image">
                <div>
                    <p>image_placeholder</p>
                </div>
            </div>
            <div>
                <p>ID: {{$product->id}}</p>
                <p>Product name: {{$product->name}}</p><br>
                <h2>Desciption:</h2>
                <p>{{$product->description}}</p>
            </div>
        </div>
        <div class="product_description">
            <p>Created at: {{$product->created_at}}</p>
            <p>Updated at: {{$product->updated_at}}</p>
        </div>
    </div>
    <div class="product_buttons">
        <ul>
            <li><a>Edit Product</a></li>
            <li><a>Remove Product</a></li>
        </ul>
    </div>
</div>
@endsection