<x-layout>
    <div class="container"  style="padding-top: 12%">
        <div class="card ">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>

    <div class="container" style="padding-top: 2%">
        <form action="{{route('products.update',$product->id)}}" method="POST">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label> Name</label>
                    <input type="text" name="name" value="{{$product->name}}" class="form-control"  placeholder="product name">
                </div>
                <div class="form-group">
                    <label>  Price</label>
                    <input type="text" name="price" value="{{$product->price}}" class="form-control"  placeholder="product price">
                </div>

                <div class="form-group">
                    <label>Details</label>
                    <textarea class="form-control" name="details" rows="3">
                    {{$product->details}}
                    </textarea>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>
        </div>


</x-layout>
