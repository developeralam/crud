<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Student Create</title>
</head>

<body>

    <div class="container">
        <div class="card">
            <div class="card-header py-3">
                <span class="text-center h2">Student Create</span>
                <a href="{{route('student.index')}}" class="btn btn-primary float-end">Student List</a>
            </div>
            <div class="card-body">
                <form action="{{route('student.store')}}" method="post" class="w-75 m-auto border p-4">
                    @csrf
                    <div class="form-group">
                        <label for="name"><strong>Name <sup class="text-danger">*</sup></strong></label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="email"><strong>Email <sup class="text-danger">*</sup></strong></label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="phone"><strong>Phone <sup class="text-danger">*</sup></strong></label>
                        <input type="number" id="phone" name="phone" placeholder="Enter your phone number" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-info mt-2">
                </form>
            </div>
        </div>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>