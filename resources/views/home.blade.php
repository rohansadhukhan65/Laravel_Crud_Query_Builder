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

    <div class="container my-5 py-5">
        <div class="row">
            <!-- form
            ================== -->
            <div class="col-4">

                @if(session()->has('status'))
                    <div class="alert text-center fw-bold shadow alert-success" role="alert">
                        {{session('status')}}
                    </div>
                @else
                    <div class="alert alert-primary fw-bold text-center shadow" role="alert">
                        Add Data
                    </div>
                @endif
                <form action="/" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control" type="text" name="name" id="name" placeholder="Enter Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="city">City</label>
                        <input class="form-control" type="text" name="city" id="city" placeholder="Enter City">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="number">Number</label>
                        <input class="form-control" type="text" name="number" id="number" placeholder="Enter Number">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" >
                    </div>
                    <button class="btn btn-primary w-100 d-block shadow" type="submit">Submit</button>
                </form>
            </div>
            <!-- data
            ================== -->
            <div class="col-8">
                <table class="table">
                    <thead style="background-color: dodgerblue; color: aliceblue;" class="shadow">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">City</th>
                            <th scope="col">Number</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $d)
                        <tr>
                            <th scope="row">{{ $d->id }}</th>
                            <td>{{ $d->name }}</td>
                            <td>{{ $d->city }}</td>
                            <td>{{ $d->number }}</td>
                            <td>{{ $d->email }}</td>
                            <td>
                                <a href="{{ url('/edit/'.$d->id) }}" class="btn btn-sm p-1 btn-outline-info">Edit</a>
                                <a href="{{ url('/delete/'.$d->id) }}" class="btn btn-sm p-1 btn-outline-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
