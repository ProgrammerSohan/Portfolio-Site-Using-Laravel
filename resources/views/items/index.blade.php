<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add More Items</title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="container">
        <h1>Add More Items</h1>
        <div>
            <form action="{{route('logout')}}" method="POST">
             @csrf
             @method('DELETE')
                <button style="background:red;">Logout</button>
            </form>
        </div>
        @if(session('success'))
            <p styles="background:orange;">{{ session('success') }}</p>
        @endif
        <form id="items-form" action="/items" method="POST">
            @csrf
            <div id="items-container">
                <div class="item">
                    <label for="item-name-0">Item Name:</label>
                    <input type="text" id="item-name-0" name="items[0][name]" required>
                    
                    <label for="item-price-0">Item Price:</label>
                    <input type="number" id="item-price-0" name="items[0][price]" required>
                </div>
            </div>
            <button type="button" id="add-more">Add More</button>
            <button type="submit">Submit</button>
        </form>
        <h2>Item List</h2>
       <ul>
       @foreach($items as $item)
            <li>{{ $item->name}} - ${{ $item->price }}</li>
        @endforeach
       </ul>
       {{ $items->links()}}
    </div>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
