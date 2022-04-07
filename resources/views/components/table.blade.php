    <table class="table">
        <thead>
          <tr>
            @foreach ($title as $item)
                <th scope="col">{{$item}}</th>
            @endforeach
          </tr>
        </thead>
        <tbody>
            @foreach ($values as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->birth_date}}</td>
                    <td>{{$value->created_at}}</td>
                    <td>{{$value->updated_at}}</td>
                </tr>
            @endforeach
        </tbody>
      </table> 