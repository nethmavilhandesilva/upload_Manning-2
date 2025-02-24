<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Registration</title>
</head>
<body>
    <h1>Customer Registration</h1>
    <form method="post" action="{{ route('customer.update', ['customer' => $customer]) }}">
        @csrf
        @method('PUT')
        
        <div>
            <label>Name</label>
            <input type="text" name="Name" placeholder="Name" value="{{ $customer->Name }}" />
        </div>
        
        <div>
            <label>Emp_ID</label>
            <input type="text" name="Emp_ID" placeholder="Emp_ID" value="{{ $customer->Emp_ID }}" />
        </div>
        
        <div>
            <label>Address</label>
            <input type="text" name="Address" placeholder="Address" value="{{ $customer->Address }}" />
        </div>
        
        <div>
            <label>Phone_No</label>
            <input type="text" name="Phone_No" placeholder="Phone_No" value="{{ $customer->Phone_No }}" />
        </div>
        
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>
