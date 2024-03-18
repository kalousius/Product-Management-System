<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        /* Menu styles */
        .menu {
            list-style-type: none;
            padding: 0;
            margin: 0;
            background-color: #333;
            overflow: hidden;
        }

        .menu li {
            float: left;
        }

        .menu li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .menu li a:hover {
            background-color: #111;
        }

        /* Dashboard styles */
        .dashboard {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); /* Responsive layout */
            gap: 20px; /* Gap between sections */
            padding: 20px;
        }

        .dashboard-section {
            padding: 20px;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .dashboard-section h2 {
            margin-top: 0;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .dashboard-section table {
            width: 100%;
            border-collapse: collapse;
        }

        .dashboard-section th, .dashboard-section td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        .dashboard-section th {
            background-color: #f2f2f2;
        }

        .dashboard-section .action-buttons {
            display: flex;
            gap: 5px;
        }

        /* Form styles */
        .dashboard-section form {
            margin-top: 20px;
        }

        .dashboard-section label {
            display: block;
            margin-bottom: 5px;
        }

        .dashboard-section input[type="text"],
        .dashboard-section textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .dashboard-section input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .dashboard-section input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <ul class="menu">
    <li><a href="{{ route('product.create') }}">Create Product</a></li>
    <li><a href="{{ route('product.index') }}">View Products</a></li>
    <li>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </li>
</ul>


    <div class="dashboard">
        <!-- Display list of products -->
        <div class="dashboard-section">
            <h2>Products</h2>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->qty }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td class="action-buttons">  
                        <a href="{{ route('product.edit', $product->id) }}">Edit</a>
                        <form method="POST" action="{{ route('product.destroy', $product->id) }}" onsubmit="return confirm('Are you sure you want to delete this product?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        
        <!-- Create product section -->
        <div class="dashboard-section">
            <h2>Create a Product</h2>
            <form method="POST" action="{{ route('product.store') }}">
                @csrf 
                <div>
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Name" required>
                </div>
                <div>
                    <label>Qty</label>
                    <input type="text" name="qty" placeholder="Qty" required>
                </div>
                <div>
                    <label>Price</label>
                    <input type="text" name="price" placeholder="Price" required>
                </div>
                <div>
                    <label>Description</label>
                    <textarea name="description" placeholder="Description" required></textarea>
                </div>
                <div>
                    <!-- Submit button -->
                    <input type="submit" value="Save a New Product">
                </div>
            </form>
        </div>
    </div>
</body>
</html>
