<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-5">
    <h2>categories <a class="btn btn-info" href="/input_fild">Add List</a></h2>
    @if (session()->has('success'))
    <div class="alert alert-info" role="alert">
      <strong>{{session()->get('success')}}</strong>
    </div>

    @endif

    @if (session()->has('update'))
    <div class="alert alert-info" role="alert">
      <strong>{{session()->get('update')}}</strong>
    </div>

    @endif

    @if (session()->has('delete'))
    <div class="alert alert-danger" role="alert">
      <strong>{{session()->get('delete')}}</strong>
    </div>

    @endif
  <table class="table table-striped">
    <thead>
      <tr>

        <th>S.N</th>
        <th>Full Name</th>
        <th>Uername</th>
        <th>Email</th>
        <th>Image</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($listdata as $listdata_all)


      <tr>
        <td>{{$loop->index+1}}</td>
        <td>{{$listdata_all->fullname}}</td>
        <td>{{$listdata_all->username}}</td>
        <td>{{$listdata_all->email}}</td>
        <td><img width="100px" height="100px" style="border-radius: 50px" src="image_first/{{$listdata_all->image}}" alt=""></td>
        <td><a href="/listedit/{{$listdata_all->id}}" class="btn btn-primary" >Update</a></td>
        <td><a href="/deletelist/{{$listdata_all->id}}" class="btn btn-danger" >Delete</a></td>


      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
