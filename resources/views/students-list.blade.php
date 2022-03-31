<div class="card mb-3">
    <img src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/201810/online-3412473_1920.jpeg?meGHIUut1mybIL3pem8eWqk34osmW3Zi&size=770:433"
        class="card-img-top" alt="Education photo">
    <div class="card-body">
        <h5 class="card-title">List of students</h5>
        <p class="card-text">You can find here all the informations about students in the system</p>
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">CNE</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Speciality</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->cne }}</td>
                        <td>{{ $student->firstname }}</td>
                        <td>{{ $student->lastname }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->speciality }}</td>
                        <td>

                            <a href="{{ route('edit', $student->id) }}" class="btn btn-sm btn-warning">Edit</a>



                            <form action="{{ route('delete', $student->id) }}" method="POST" class="d-inline">

                                @csrf
                                @method('DELETE')

                                <input type="submit" value="Delete" class="btn btn-sm btn-danger">
                            </form>

                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</div>
