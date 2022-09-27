<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Striped Rows</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Email</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Image</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($getonlinedata as $getonlinedata)


      <tr>
        <td>{{$loop->index+1}}</td>
        <td>{{$getonlinedata['email']}}</td>
        <td>{{$getonlinedata['first_name']}}</td>
        <td>{{$getonlinedata['last_name']}}</td>
        <td><img width="150px" height="150px" src="{{$getonlinedata['avatar']}}" alt=""></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
