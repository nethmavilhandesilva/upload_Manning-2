<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Registraton</title>
</head>
<body>
    <form method='post' action="{{ route('customer.store') }}">
        @csrf
    <div>
        <label>Name</label>
        <input type='text' name='Name' placeholder='Name'/>
    </div>
    <div>
        <label>Emp_ID</label>
        <input type='text' name='Emp_ID' placeholder='Emp_ID'/>
    </div>
    <div>
        <label>Address</label>
        <input type='text' name='Address' placeholder='Address'/>
    </div>
    <div>
        <label>Phone_No</label>
        <input type='text' name='Phone_No' placeholder='Phone_No'/>
    </div>
    <div>
        <input type='submit' value='Signup'/>
    </div>
</form>
</body>
</html>