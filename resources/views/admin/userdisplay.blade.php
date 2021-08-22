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
    <th>name</th>
    <th>email</th>
    <th>mobile no</th>
	<th>address</th>
	<th>city</th>
	<th>state</th>
	<th>country</th>
	<th>postcode</th>
	<th>dob</th>
	<th>qualification</th>
	<th>status</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $row)
    <tr>
    <td> {{$row->id}} </td>
    <td> {{$row->name}} </td>
    <td> {{$row->email}} </td>
    <td> {{$row->mobile}} </td>
	<td> {{$row->address}} </td>
	<td> {{$row->city}} </td>
	<td> {{$row->state}} </td>
	<td> {{$row->country}} </td>
	<td> {{$row->postcode}} </td>
	<td> {{$row->dob}} </td>
	<td> {{$row->qualification}} </td>
	<td> {{$row->status}} </td>
    <td><a class="btn btn-success" href="{{'useredit/'.$row->id}}"> Edit</a>
    <a class="btn btn-danger" href="{{'userdelete/'.$row->id}}">Delete</a></td>
    </tr>
    @endforeach
    
    </tbody>
    </table>
    
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