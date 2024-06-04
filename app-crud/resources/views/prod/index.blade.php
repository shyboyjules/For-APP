<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        /* Optional styling for the button */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            cursor: pointer;
            text-decoration: none;
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        /* Center content */
        .center-content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        /* Center table */
        .center-table {
            margin: 0 auto;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.08);
            border-radius: 4px;
            overflow: hidden;
        }

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        th {
            background-color: #f2f2f2;
        }

        td a {
            text-decoration: none;
            color: blue;
        }

        td a:hover {
            text-decoration: underline;
        }

        form {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="center-content">
        <h1>Product List</h1>

        <div>
            @if (session()->has('success'))
                <div>
                    {{ session('success') }}
                </div>
            @endif
        </div>

        <div class="flex space-x-4 my-4">
            <a href="{{ route('product.create') }}" class="btn">Create a Product</a>
            <a href="{{ url('/dashboard') }}" class="btn">Go to Dashboard</a> <!-- Dashboard button -->
        </div>

        <div class="center-table">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($product as $product)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <a href="{{ route('prod.edit', ['product' => $item]) }}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('product.destroy', ['product' => $item]) }}">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" />
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>
