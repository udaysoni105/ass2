<table boarder="1">
    @foreach($data as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->address}}</td>
        <td>{{$item->created_at}}</td>
        <td>{{$item->updated_at}}</td>
    </tr>
    @endforeach  
</table>