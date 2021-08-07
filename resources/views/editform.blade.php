<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Page</title>

    <!-- Bootstrap
    ======================== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- fontawsome
    ======================== -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

</head>
<body>
    <!-- Nav
    ================= -->
    <nav class="navbar navbar-light bg-primary shadow">
        <div class="container">
            <span class="navbar-brand mb-0 ms-auto me-auto fs-2 text-light"><i class="fab fs-1 fa-laravel mx-3"></i> Laravel Crud</span>
        </div>
    </nav>

    <div class="container my-5    px-5">
        <div class="container px-5">
            <div class="mx-5">
                <a href="{{ url('/') }}" class="btn btn-outline-primary my-3 fs-6" ><i class="fas fa-arrow-circle-left"></i> Back</a>
                <!-- form
                ================== -->
                @if(session()->has('editstatus'))
                    <div class="alert text-center fs-3 fw-bold shadow alert-success" role="alert">
                        {{session('editstatus')}}
                    </div>
                @else
                    <div class="text-primary   fw-bold text-center   fs-3" role="alert">
                        Edit Data
                    </div>
                @endif

                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input value="{{$edata->name}}" class="form-control" type="text" name="name" id="name" placeholder="Enter Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="city">City</label>
                        <input value="{{$edata->city}}" class="form-control" type="text" name="city" id="city" placeholder="Enter City">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="number">Number</label>
                        <input value="{{$edata->number}}" class="form-control" type="text" name="number" id="number" placeholder="Enter Number">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input value="{{$edata->email}}" type="text" class="form-control" name="email" id="email" placeholder="Enter Email" >
                    </div>
                    <div class="text-end">
                        <button class="btn btn-primary w-50  shadow" type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
