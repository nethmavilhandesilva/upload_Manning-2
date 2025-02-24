<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>
</head>
<body>
    <h1>Hello Customers</h1>
    <div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Emp_ID</th>
            <th>Address</th>
            <th>Phone_No</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        
        @foreach($customers as $customer)
        <tr>
            <td>{{ $customer->ID }}</td>
            <td>{{ $customer->Name }}</td>
            <td>{{ $customer->Emp_ID }}</td>
            <td>{{ $customer->Address }}</td>
            <td>{{ $customer->Phone_No }}</td>
            <td>
                <a href="{{ route('customer.edit', ['customer' => $customer]) }}">Edit</a>
            </td>
            <td>
                <form method="post" action="{{ route('customer.destroy', $customer) }}" onsubmit="return confirm('Are you sure you want to delete this customer?');">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete"/>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
</body>
</html>
