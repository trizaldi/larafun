<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voters</title>
</head>
<body>
    <table border="1">
                 
        
        @php
            $no = 1
        @endphp
        @foreach ($voter as $vote)
        <tr>
            {{--@foreach ($voter as $vote)--}}
            <td>{{$no++}}</td>
            <td>{{$vote->name}}</td>
            <td>{{$vote->email}}</td>
            <td>{{$vote->address}}</td>
            {{--@endforeach--}}
        </tr>
        @endforeach
        
    </table>
    
</body>
</html>