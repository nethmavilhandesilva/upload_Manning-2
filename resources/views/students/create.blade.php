<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="{{ route('student.store') }}">
    @csrf
    <div>
        <label>Name</label>
        <input type="text" name="Name" placeholder="Name" />
    </div>
    <div>
        <label>Admission Number</label>
        <input type="text" name="Addmission_No" placeholder="Admission Number" />
    </div>
    <div>
        <label>Age</label>
        <input type="text" name="Age" placeholder="Age" />
    </div>
    <div>
        <input type="submit" value="Add Student" />
    </div>
</form>
</body>
</html>
