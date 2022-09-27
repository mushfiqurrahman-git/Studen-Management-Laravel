<!doctype html>
<html lang="en">
  <head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Management System</title>
  </head>
  <body>
    <h1>Student Management System</h1>
  </body>

@include("navbar")
@if($layout == 'index')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("studentlist")
            </section>
            <section class="col-md-5"></section>
        </div>
    </div>
@elseif($layout == 'create')
    <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include("studentlist")
            </section>
            <section class="col">
                <form action ="{{url('/store')}}" method="get">
                    @csrf
                    
                    <div class="form-group">
                        <label>CNE</label>
                        <input name="cne" type="text" class="form-control" placeholder="Enter CNE">
                    </div>
                    <div class="form-group">
                        <label>First Name</label>
                        <input name="firstName" type="text" class="form-control" placeholder="Enter First Name">
                    </div>
                    <div class="form-group">
                        <label>Second Name</label>
                        <input name="secondName" type="text" class="form-control" placeholder="Enter Second Name">
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input name="age" type="text" class="form-control" placeholder="Enter Age">
                    </div>
                    <div class="form-group">
                        <label>Speciality</label>
                        <input name="speciality" type="text" class="form-control" placeholder="Enter Speciality">
                    </div>
                    <input type="submit" class="btn btn-info" value="Save">
                    <input type="reset" class="btn btn-warning" value="Reset">
                </form>
            </section>
        </div>
    </div>
@elseif($layout == 'show')
<div class="container-fluid mt-4">
    <div class="row">
            <section class="col">
                @include("studentlist")
            </section>
            <section class="col"></section>
        </div>
    </div>
@elseif($layout == 'edit')
<div class="container-fluid mt-4">
    <div class="row">
            <section class="col-md-7">
                @include("studentlist")
            </section>
            <section class="col">
            <form action ="{{url('/update/'.$student->id)}}" method="get">
                    @csrf
                    
                    <div class="form-group">
                        <label>CNE</label>
                        <input value="{{$student->cne}}" name="cne" type="text" class="form-control" placeholder="Enter CNE">
                    </div>
                    <div class="form-group">
                        <label>First Name</label>
                        <input value="{{$student->firstName}}" name="firstName" type="text" class="form-control" placeholder="Enter First Name">
                    </div>
                    <div class="form-group">
                        <label>Second Name</label>
                        <input value="{{$student->secondName}}" name="secondName" type="text" class="form-control" placeholder="Enter Second Name">
                    </div>
                    <div class="form-group">
                        <label>Age</label>
                        <input value="{{$student->age}}" name="age" type="text" class="form-control" placeholder="Enter Age">
                    </div>
                    <div class="form-group">
                        <label>Speciality</label>
                        <input value="{{$student->speciality}}" name="speciality" type="text" class="form-control" placeholder="Enter Speciality">
                    </div>
                    <input type="submit" class="btn btn-info" value="Update">
                    <input type="reset" class="btn btn-warning" value="Reset">
                </form>
            </section>
        </div>
    </div>
@endif
</html>