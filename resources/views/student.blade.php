<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Student Management System</title>
</head>

<body>
    @include('navbar')
    <div class="row container offset-3">
        <div class="header col-6 text-center">
            <h1>Student Management System</h1>
        </div>
    </div>
    @if ($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="container-fluid mt-4">
                <div class="row justify-content-center">
                    <section class="col-md-7">
                        @include('students-list')
                    </section>
                </div>
            </div>
        </div>
    @elseif($layout == 'create')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('students-list')
                </section>
                <section class="col-md-5">

                    <div class="card mb-3">
                        <img src="https://www.osce.org/files/imagecache/10_large_gallery/f/images/web/2/f/84308.jpg?1517403671"
                            class="card-img-top" alt="new student">
                        <div class="card-body">
                            <h5 class="card-title">Enter informations of the new student</h5>

                            <form action="{{ route('store') }}" method="POST">

                                @csrf

                                <div class="form-group">
                                    <label class="form-label">CNE</label>
                                    <input name="cne" type="text" class="form-control" placeholder="Enter cne">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">First Name</label>
                                    <input name="firstname" type="text" class="form-control"
                                        placeholder="Enter your first name">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Last Name</label>
                                    <input name="lastname" type="text" class="form-control"
                                        placeholder="Enter your last name">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Age</label>
                                    <input name="age" type="text" class="form-control" placeholder="Enter your age">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Speaciality</label>
                                    <input name="speciality" type="text" class="form-control"
                                        placeholder="Enter your speaciality">
                                </div>

                                <input type="submit" class="btn btn-info " value="Save">
                                <input type="reset" class="btn btn-warning" value="Reset">


                            </form>
                        </div>
                    </div>


                </section>
            </div>
        </div>
    @elseif($layout == 'show')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col">
                    @include('students-list')
                </section>
                <section class="col">

                </section>
            </div>
        </div>
    @elseif($layout == 'edit')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include('students-list')
                </section>
                <section class="col-md-5">


                    <div class="card mb-3">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Update informations of the student</h5>

                            <form action="{{ route('update', $student->id) }}" method="POST">

                                @csrf

                                <div class="form-group">
                                    <label class="form-label">CNE</label>
                                    <input value="{{ $student->cne }}" name="cne" type="text" class="form-control"
                                        placeholder="Enter cne">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">First Name</label>
                                    <input value="{{ $student->firstname }}" name="firstname" type="text"
                                        class="form-control" placeholder="Enter your first name">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Last Name</label>
                                    <input value="{{ $student->lastname }}" name="lastname" type="text"
                                        class="form-control" placeholder="Enter your last name">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Age</label>
                                    <input value="{{ $student->age }}" name="age" type="text" class="form-control"
                                        placeholder="Enter your age">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Speaciality</label>
                                    <input value="{{ $student->speciality }}" name="speciality" type="text"
                                        class="form-control" placeholder="Enter your speaciality">
                                </div>

                                <input type="submit" class="btn btn-info " value="Update">
                                <input type="reset" class="btn btn-warning" value="Reset">


                            </form>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    @endif

    <footer>

    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">


    </script>



    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
