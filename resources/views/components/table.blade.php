    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Address</td>
        <td>Country</td>
        <td>Data Birth</td>
        <td>Creat</td>
        <td>Update</td>
        <td>Brands</td>
    </tr>
  @foreach ($values as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->address->address}}</td>
            <td>{{$value->address->country->name}}</td>
            {{-- <td>@foreach ($value->address as $item)
                {{$item->id}}
            @endforeach</td> --}}
            <td>{{$value->birth_date}}</td>
            <td>{{$value->created_at}}</td>
            <td>{{$value->updated_at}}</td>
            <td>@foreach ($value->cars as $item)
                {{$item->name}}
            @endforeach</td>
        </tr>
    @endforeach
