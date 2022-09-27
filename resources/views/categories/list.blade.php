<!DOCTYPE html>
<html lang="en">
<head>
  <title>Categories</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

<div class="container pt-5">
  <h2>categories <a class="btn btn-info" href="/category-create">Add Category</a>
    <a class="btn btn-info" href="/list">Crud 2</a> </h2>


  @if (session()->has('success'))
  <div class="alert alert-info" role="alert">
    <strong>{{session()->get('success')}}</strong>
  </div>

  @endif

  @if (session()->has('delete'))
  <div class="alert alert-danger" role="alert">
    <strong>{{session()->get('delete')}}</strong>
  </div>

  @endif


  @if (session()->has('update'))
  <div class="alert alert-success" role="alert">
    <strong>{{session()->get('update')}}</strong>
  </div>
  @endif

  <table class="table table-striped">
    <thead>
      <tr>
        <th>S.N</th>
        <th>Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $item)


      <tr>
        <td>{{$loop->index+1}}</td>
        <td>{{$item->title}}</td>
        <td>
            <a href="/category-edit/{{$item->id}}" class="btn btn-sm btn-info">Edit</a>

            <a href="/category-delete/{{$item->id}}" class="btn btn-sm btn-danger">Delete</a>

        </td>

      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
