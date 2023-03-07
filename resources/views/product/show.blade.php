<x-layout>


    </div>

    <table class="table table-bordered w-auto">
        <tbody>

            <tr>
                <th>Name</th>
                <td>{{$product->name}}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{$product->price}}$</td>
            </tr>
            <tr>
                <th>Details</th>
                <td>{{$product->details}}</td>
            </tr>
        </tbody>
    </table>
</x-layout>
