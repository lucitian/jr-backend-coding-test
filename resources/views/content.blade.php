@extends('layout')

@section('content')
<div id="container">
    <div class="container_options">
        <ul>
            <li><button id="modal_button">Add Product</button></li>
            <li><button onclick="">Remove Product</button></li>
        </ul>
    </div>
    <div class="container_items">
        @if(count($products) > 0)
        <table id="products_table">
            <thead>
                <tr>
                    <td>Actions</td>
                    <td>Product Name</td>
                    <td>Product Description</td>
                    <td>Product Price</td>
                    <td>Created at</td>
                    <td>Updated at</td>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr data-href="{{ route('product.product', [$product->id]) }}">
                        <td><input type="checkbox"></td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>P{{$product->price}}</td>
                        <td>{{$product->created_at}}</td>
                        <td>{{$product->updated_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <p>No products found</p>
        @endif
    </div>
    <div class="container_pagination">
        {{ $products -> links('vendor.pagination.custom') }}
    </div>
</div>

<div id="modal_container">
    <form action="{{ route('modals.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="store_form">
            <div class="store_input">
                <h1>Add a new product</h1><br>
                <label for="product_name">Product Name:</label>
                <input type="text" name="product_name">
                <label for="product_price">Product Price:</label>
                <input type="text" name="product_price">
                <label for="product_description">Product Description:</label>
                <input type="text" name="product_description">
            </div>
            <div class="store_buttons">
                <ul>
                    <li><button id="store_submit" type="submit">Add Product</button></li>
                    <li><button id="store_cancel">Cancel</button></li>
                </ul>
            </div>
        </div>
    </form>
</div>

<script src='js/product.js'></script>
<script src='js/store.js'></script>
@endsection