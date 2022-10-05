<main id="container">
    <div class="container_options">
        <ul>
            <li><a>Add Product</a></li>
            <li><a>Remove Product</a></li>
        </ul>
    </div>
    <div class="container_items">
        @unless(count($products) === 0)
        <table id="products_table">
            <thead>
                <tr>
                    <td>Product Name</td>
                    <td>Product Description</td>
                    <td>Product Price</td>
                    <td>Created at</td>
                    <td>Updated at</td>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->name}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->created_at}}</td>
                        <td>{{$product->updated_at}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <p>No products found</p>
        @endunless
    </div>
</main>