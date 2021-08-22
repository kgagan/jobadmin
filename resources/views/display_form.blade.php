<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            job information
                        </div>
                        <div class="card-body">
                            <!-- @if(Session::has('post_created'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('post_created')}}
                            </div>
                            @endif -->   
                            <form method="POST" action="{{url('form-submit')}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="" />
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="title">Description</label>
                                    <input type="text" name="des" class="form-control" placeholder="" />
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="title">qualification</label>
                                    <input type="text" name="qual" class="form-control" placeholder="" />
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="title">no of opening</label>
                                    <input type="text" name="open" class="form-control" placeholder="" />
                                </div>
								<div class="form-group">
                                    <label for="title">dept</label>
                                    <input type="text" name="dept" class="form-control" placeholder="" />
                                </div>
								<div class="form-group">
                                    <label for="title">salary</label>
                                    <input type="text" name="salary" class="form-control" placeholder="" />
                                </div>
                                <br>
                                <input type="submit" class="btn btn-success" value="submit" />
                            </form>
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