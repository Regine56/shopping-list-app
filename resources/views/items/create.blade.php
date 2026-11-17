<!DOCTYPE html>
<html>
<head>
    <title>New Item</title>
</head>
<body>
    <h1>Add New Item</h1>

    <form action="{{ route('items.store') }}" method="POST">
        @csrf

        <label>Item Name:</label><br>
        <input type="text" name="item_name" required><br><br>

        <label>Quantity:</label><br>
        <input type="number" name="quantity" required><br><br>

        <label>Price:</label><br>
        <input type="number" step="0.01" name="price" required><br><br>

        <label>Status:</label><br>
        <select name="status" required>
            <option value="Pending">Pending</option>
            <option value="Purchased">Purchased</option>
        </select><br><br>

        <button type="submit">Save Item</button>
        <a href="{{ route('items.index') }}">Cancel</a>
    </form>
</body>
</html>