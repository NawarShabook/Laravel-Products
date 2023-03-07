<x-layout>

    <div class="alert alert-primary" role="alert">
        <p>trashed products</p>
        @if ($message = Session::get('success'))

            trashed products
            {{$message}}
            </div>
        @endif
    </div>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Details</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=0;
            @endphp
            @foreach ($products as $item)
                <tr>
                    <th scope="row">{{++ $i}}</th>
                    <td>{{$item->name}}</td>
                    <td>{{$item->details}}</td>
                    <td>{{$item->price}} $</td>
                    <td>
                    <div class="row">
                        <div class="col-3">
                        <a class="btn btn-info" href="{{route('products.show' ,$item->id)}}">show</a></div>
                        <div class="col-3">
                        <a class="btn btn-success" href="{{route('products.restore' ,$item->id)}}">restore</a></div>
                        <div class="col-3">
                        <a class="btn btn-danger" href="{{route('products.forceDelete' ,$item->id)}}">permanently delete</a></div>
                    </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{-- the pagintaion --}}
    {{-- The links method will render the links
        to the rest of the pages in the result set.
        Each of these links will already contain
        the proper page query string variable --}}
        {{ $products->links() }}
    </div>
</x-layout>
