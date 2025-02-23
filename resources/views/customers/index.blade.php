<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Customers</h1>
    <div>
    <table border='1'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Emp_ID</th>
            <th>Address</th>
            <th>Phone_No</th>
            <th>Phone_No</th>
        </tr>
        @foreach($customers as $customer)
       
        <tr>
            <td>{{$customer->ID}}</td>
            <td>{{$customer->Name}}</td>
            <td>{{$customer->Emp_ID}}</td>
            <td>{{$customer->Address}}</td>
            <td>{{$customer->Phone_No}}</td>
        </tr>
      @endforeach
    </div>
</body>
</html>