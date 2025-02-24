<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student Index</h1>
    <div>
    <table border='1'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Addmission_No</th>
            <th>Age</th>
            <th>Edit</th>
            <th>Delete</th>
           
        </tr>
        @foreach($students as $student)
       
        <tr>
            <td>{{$student->ID}}</td>
            <td>{{$student->Name}}</td>
            <td>{{$student->Addmission_No}}</td>
            <td>{{$student->Age}}</td>
            <td>
                    <a href="{{ route('student.edit', ['student' => $student]) }}">Edit</a>
                </td>
            <td>
                <form method="post" action="{{ route('student.destroy',$student) }}">
                @csrf
                @method('delete')
                <input type="submit" value="Delete"/>
                </form>
            </td>
      </tr>
      
      @endforeach
    </div>
</body>
</html>

