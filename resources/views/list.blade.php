<html>
<head>
    <body>
<table>
    <tr>
        <tb>Location </tb>
        <tb>Contact</tb>
        <tb>Numberofroom</tb>
        <tb>Image</tb>

    </tr>
    @foreach($house as $house)
        <tr>
            <td>{{$house->Location}}</td>
            <td>{{$house->Contact}}</td>
            <td>{{$house->Numberofroom}}</td>
            <td>{{$house->Image}}</td>
            <td> <img src="{{asset('storage/image/'.$house->image)}}"/> </td>
            <td> <a href ="{{url('image')}}"</td>
        </tr>
        @endforeach
</table>
</body>
</head>
</html>
