<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <style>
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            border: 2px solid #ddd;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            padding: 10px 0;
            border-bottom: 1px solid #ccc;
        }
        li:last-child {
            border-bottom: none;
        }
        .category-name {
            font-weight: bold;
        }
        .category-description {
            color: #666;
        }
        h2 {
            margin-top: 40px;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #45a049;
        }
        .back-button {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}

.back-button:hover {
    background-color: #45a049;
}

    </style>
  
</head>
<body>
    <div class="container">
        <h1>Categories</h1>
        <ul>
            @foreach ($categories as $category)
            <li>
                <span class="category-name">{{ $category->name }}</span><br>
                <span class="category-description">{{ $category->description }}</span>
            </li>
            @endforeach
        </ul>
        
        <!-- Form for creating a new category -->
        <h2>Create New Category</h2>
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div>
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="description">Description:</label><br>
                <textarea id="description" name="description"></textarea>
            </div>
            <button type="submit">Create</button>
        </form>
        <!-- Back button -->
        <a href="{{ route('dashboard') }}" class="back-button">Back to Dashboard</a>
    </div>
</body>
</html>
