<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header class="header">
        <h1 class="title">Edit Member</h1>
        <nav>
            <ul class="nav-links">
                <li><a href="{{ route('landing') }}">Home</a></li>
                <li><a href="{{ route('members.index') }}">Members List</a></li>
            </ul>
        </nav>
    </header>

    <main class="main-content">
        <form action="{{ route('members.update', $member->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="{{ $member->name }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="{{ $member->email }}" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" name="phone" id="phone" value="{{ $member->phone }}" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea name="address" id="address" required>{{ $member->address }}</textarea>
            </div>
            <button type="submit">Update Member</button>
        </form>
    </main>

    <footer class="footer">
        <p>&copy; 2024 SACCOS Management System. All rights reserved.</p>
    </footer>

</body>
</html>
