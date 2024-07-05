<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add More Items</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="container">
        <h1>Add More Items</h1>
        @if(session('success'))
            <p>{{ session('success') }}</p>
        @endif
        <form id="item-form" action="/items" method="POST">
            @csrf
            <label for="item-name">Item Name:</label>
            <input type="text" id="item-name" name="name" required>
            
            <label for="item-price">Item Price:</label>
            <input type="number" id="item-price" name="price" required>
            
            <button type="submit">Add More</button>
        </form>
        
        <h2>Item List</h2>
        <ul id="item-list">
            <!-- Items will be dynamically added here -->
        </ul>
    </div>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
