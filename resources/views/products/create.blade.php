<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-top: 20px;
        }
        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
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
        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Create a Product</h1>
    <form method="POST" action="{{ route('product.store') }}">
        @csrf 
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name">
            <br><br>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty">
            <br><br>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price">
            <br><br>
            <label>Description</label>
            <textarea name="description" placeholder="Description"></textarea>
            <br><br>
            <!-- Submit button -->
            <input type="submit" value="Save a New Product">
        </div>
    </form>
</body>
</html>
