<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title>
</head>
<body>
    <h1>Edit Item</h1>

    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Item Name:</label><br>
        <input type="text" name="item_name" value="{{ $item->item_name }}" required><br><br>

        <label>Quantity:</label><br>
        <input type="number" name="quantity" value="{{ $item->quantity }}" required><br><br>

        <label>Price:</label><br>
        <input type="number" step="0.01" name="price" value="{{ $item->price }}" required><br><br>

        <label>Status:</label><br>
        <select name="status" required>
            <option value="Pending" {{ $item->status == 'Pending' ? 'selected' : '' }}>Pending</option>
            <option value="Purchased" {{ $item->status == 'Purchased' ? 'selected' : '' }}>Purchased</option>
        </select><br><br>

        <button type="submit">Update Item</button>
        <a href="{{ route('items.index') }}">Cancel</a>
    </form>
</body>
</html>