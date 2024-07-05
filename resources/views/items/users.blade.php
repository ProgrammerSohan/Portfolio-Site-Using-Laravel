<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <style>
table, th, td {
  border: 1px solid;
}
</style>
</head>
<body>
    <h3>All Users</h3>
    <div>
            <form action="{{route('logout')}}" method="POST">
             @csrf
             @method('DELETE')
                <button style="background:red;">Logout</button>
            </form>
        </div>
    <div>
    <table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
  </tr>
  @foreach($users as $user)
  <tr>
  <td>{{ $loop->iteration }}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->addresses->address}}</td>
  </tr>
  @endforeach
  
</table>
    </div>
    
</body>
</html>