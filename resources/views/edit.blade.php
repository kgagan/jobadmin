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
                            edit job
                        </div>
                        <div class="card-body">
                            <!-- @if(Session::has('post_created'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('post_created')}}
                            </div>
                            @endif -->
                            <form method="post" action="{{url('edit-form/'.$findrec[0]->id)}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="title">title</label>
                                    <input type="text" name="title" value="{{isset($findrec[0]->title) ? $findrec[0]->title:""}}" class="form-control" placeholder="" />
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="title">description</label>
                                    <input type="text" name="des" value="{{isset($findrec[0]->des) ? $findrec[0]->des:""}}" class="form-control" placeholder="" />
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="title">qualification</label>
                                    <input type="text" name="qual" value="{{isset($findrec[0]->qual) ? $findrec[0]->qual:""}}" class="form-control" placeholder="" />
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="title">no of opening</label>
                                    <input type="text" name="open" value="{{isset($findrec[0]->open) ? $findrec[0]->open:""}}" class="form-control" placeholder="" />
                                </div>
								<div class="form-group">
                                    <label for="title">dept</label>
                                    <input type="text" name="dept" value="{{isset($findrec[0]->dept) ? $findrec[0]->dept:""}}" class="form-control" placeholder="" />
                                </div>
								<div class="form-group">
                                    <label for="title">salary</label>
                                    <input type="text" name="salary" value="{{isset($findrec[0]->salary) ? $findrec[0]->salary:""}}" class="form-control" placeholder="" />
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