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
                            <form method="post" action="{{url('usereditform/'.$findrec[0]->id)}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="title">name</label>
                                    <input type="text" name="name" value="{{isset($findrec[0]->name) ? $findrec[0]->name:""}}" class="form-control" placeholder="" />
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="title">email</label>
                                    <input type="text" name="email" value="{{isset($findrec[0]->email) ? $findrec[0]->email:""}}" class="form-control" placeholder="" />
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="title">password</label>
                                    <input type="text" name="password" value="{{isset($findrec[0]->password) ? $findrec[0]->password:""}}" class="form-control" placeholder="" />
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="title">mobile number</label>
                                    <input type="text" name="mobile" value="{{isset($findrec[0]->mobile) ? $findrec[0]->mobile:""}}" class="form-control" placeholder="" />
                                </div>
								<div class="form-group">
                                    <label for="title">address</label>
                                    <input type="text" name="address" value="{{isset($findrec[0]->address) ? $findrec[0]->address:""}}" class="form-control" placeholder="" />
                                </div>
								<div class="form-group">
                                    <label for="title">city</label>
                                    <input type="text" name="city" value="{{isset($findrec[0]->city) ? $findrec[0]->city:""}}" class="form-control" placeholder="" />
                                </div>
								<div class="form-group">
                                    <label for="title">state</label>
                                    <input type="text" name="state" value="{{isset($findrec[0]->state) ? $findrec[0]->state:""}}" class="form-control" placeholder="" />
                                </div>
								<div class="form-group">
                                    <label for="title">country</label>
                                    <input type="text" name="country" value="{{isset($findrec[0]->country) ? $findrec[0]->country:""}}" class="form-control" placeholder="" />
                                </div>
								<div class="form-group">
                                    <label for="title">postcode</label>
                                    <input type="text" name="postcode" value="{{isset($findrec[0]->postcode) ? $findrec[0]->postcode:""}}" class="form-control" placeholder="" />
                                </div>
								<div class="form-group">
                                    <label for="title">dob</label>
                                    <input type="text" name="dob" value="{{isset($findrec[0]->dob) ? $findrec[0]->dob:""}}" class="form-control" placeholder="" />
                                </div>
								<div class="form-group">
                                    <label for="title">qualification</label>
                                    <input type="text" name="qualification" value="{{isset($findrec[0]->qualification) ? $findrec[0]->qualification:""}}" class="form-control" placeholder="" />
                                </div>
								
                    
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