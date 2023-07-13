<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <style></style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th style="vertical-align: middle;"><p>No.</p></th>
                <th style="text-align:center; vertical-align: middle;">Name</th>
                <th style="text-align:center; vertical-align: middle;">Email</th>
                <th style="text-align:center; vertical-align: middle;">Department</th>
                <th style="text-align:center; vertical-align: middle;">Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $key => $user)
            
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->department_name}}</td>
                    <td>{{$user->roles->pluck('name')->join(',')}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>