<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <center><h1> SOFTDELETS EXAMPLE</h1></center>
    <div class="container">
        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th> SN </th>
                    <th> NAME </th>
                    <th> EMAIL </th>
                    <th> ACTION </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('user.edit',$user) }}" class="btn btn-info"> EDIT </a>
                            <form action="{{ route('user.destroy', $user) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" value = "submit"> DELETE </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
