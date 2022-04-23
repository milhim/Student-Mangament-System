@extends('layouts.app')
    @section('content')

    {{-- @include('navbar') --}}
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
    @endsection

