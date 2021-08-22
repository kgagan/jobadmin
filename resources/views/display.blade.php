<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    
    <section>
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="card">
    <div class="card-header">
    job detail
    </div>
    <div class="card-body">
    
   
    <table class="table">
    <thead>
    <tr>
    <th>ID</th>
    <th>title</th>
    <th>description</th>
    <th>qualification</th>
    <th>no of opening</th>
	<th>dept</th>
	<th>salary</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $row)
    <tr>
    <td> {{$row->id}} </td>
    <td> {{$row->title}} </td>
    <td> {{$row->des}} </td>
    <td> {{$row->qual}} </td>
    <td> {{$row->open}} </td>
	<td> {{$row->dept}} </td>
	<td> {{$row->salary}} </td>
    <td><a class="btn btn-success" href="{{'edit-disp/'.$row->id}}"> Edit</a>
    <a class="btn btn-danger" href="{{'delete-data/'.$row->id}}">Delete</a></td>
    </tr>
    @endforeach
    <tr>
    <td colspan="4">{{$data->links('pagi')}}</td>
    </tr>
    </tbody>
    </table>
    <style>
        .pagination{
            list-style: none;
            margin-top: 50px;
        }
        .pagination li{
            display: inline;
            padding: 10px;
            border: solid 1px #000;

        }
     </style>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>