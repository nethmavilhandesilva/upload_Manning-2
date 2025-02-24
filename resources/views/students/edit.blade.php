<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>
    <form method="post" action="{{ route('student.update', ['student' => $student]) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Name</label>
            <input type="text" name="Name" placeholder="Name" value="{{ $student->Name }}" />
        </div>
        <div>
            <label>Admission Number</label>
            <input type="text" name="Addmission_No" placeholder="Admission Number" value="{{ $student->Addmission_No }}" />
        </div>
        <div>
            <label>Age</label>
            <input type="text" name="Age" placeholder="Age" value="{{ $student->Age }}" />
        </div>
        <div>
            <input type="submit" value="Update Student" />
        </div>
    </form>
</body>
</html>
