<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Display</title>
</head>
<body>
    <div class="container">
        <h1>Data List</h1>
        
        @if(isset($data) && count($data) > 0)
            <ul>
            @foreach($data as $item)
                <li>{{ $item->classRoom->numero }}</li>
            @endforeach
            </ul>
        @else
            <p>No data available.</p>
        @endif
    </div>
</body>
</html>