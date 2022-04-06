  @foreach ($values as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->data_birth}}</td>
            <td>{{$value->created_at}}</td>
            <td>{{$value->updated_at}}</td>
        </tr>
    @endforeach
    