<!DOCTYPE html>
<html>
<head>
    <title>Shopping List</title>
</head>
<body>
    <h1>Shopping List</h1>

    <!-- CREATE: Link para pumunta sa create form -->
    <a href="{{ route('items.create') }}">+ Add New Item</a>
    <br><br>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr>
                <td>{{ $item->item_name }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->status }}</td>
                <td>
                    <!-- UPDATE: Edit button -->
                    <a href="{{ route('items.edit', $item->id) }}">Edit</a>

                    <!-- DELETE: Delete button na may confirmation -->
                    <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Delete this item?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>