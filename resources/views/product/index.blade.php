<x-layout>

    <div class="container">
        @if ($message = Session::get('success'))
        <div class="alert alert-primary" role="alert">
            {{$message}}
            </div>
        @endif
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
                            <a class="btn btn-success" href="{{route('products.edit', $item->id)}}">edit</a> </div>
                        <div class="col-3">
                            <a class="btn btn-success" href="{{route('products.show' ,$item->id)}}">show</a></div>
                        <div class="col-3">
                            <form action="{{route('products.destroy',$item->id)}}" method="POST">
                            @csrf {{-- for security and coding the data--}}
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"> Delete</button>
                        </form></div>
                    </div>
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
</x-layout>
