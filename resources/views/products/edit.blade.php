<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button[type="submit"]:hover {
            background-color: #45a049;
        }
        .back-button {
            display: block;
            margin-top: 20px; /* Adjust as needed */
            text-decoration: none;
            color: #333;
            background-color: #f4f4f4;
            padding: 10px 20px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Product</h1>

        <form method="POST" action="{{ route('product.update', $product->id) }}">
            @csrf
            @method('PUT')

            <!-- Name -->
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ $product->name }}">
            </div>

            <!-- Qty -->
            <div>
                <label for="qty">Qty:</label>
                <input type="text" id="qty" name="qty" value="{{ $product->qty }}">
            </div>

            <!-- Price -->
            <div>
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" value="{{ $product->price }}">
            </div>

            <!-- Description -->
            <div>
                <label for="description">Description:</label>
                <textarea id="description" name="description">{{ $product->description }}</textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit">Update Product</button>
            <!-- Back button -->
        <!-- Back button -->
        <a href="{{ route('product.index') }}" class="back-button">Back to Products</a>
        </form>
    </div>
</body>
</html>
