
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>user</title>
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
        <th>email</th>

    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)

        <tr>
            <td><strong>{{$user->id}}</strong></td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>

        </tr>
    @endforeach

    </tbody>
</table>
<!-- partial -->
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


</body>
</html>

