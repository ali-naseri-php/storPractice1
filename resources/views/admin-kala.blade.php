<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>kala</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <link rel="stylesheet" href="{{url('css/admin.css')}}">

</head>
<body>

<table>
    <thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>price</th>
        <th>grouping</th>
        <th>delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($kalas as $kala)

    <tr>
        <td><strong>{{$kala->id}}</strong></td>
        <td>{{$kala->name}}</td>
        <td>{{$kala->price}}</td>
        <td>{{$kala->grouping}}</td>
        <td><a href="{{url('kala/del/'.$kala->id)}}">del</a></td>
    </tr>
    @endforeach

    </tbody>
</table>
<!-- partial -->
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="./script.js"></script>

</body>
</html>

