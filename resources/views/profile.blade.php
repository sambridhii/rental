<html>
<head>
    <title> Create</title>
</head>
<body>
<form method="post" action="{{action([\App\Http\Controllers\PagesController::class,'store'])}}">
    @csrf
    <label>location:</label>
    <input type="text" name="location" required>
    <label>Contact </label>
    <input type="text" name="Contact" required>
    <label>Number of room:</label>
    <input type="number" name="Number of room" required>
    <input type="submit">
</form>
</body>
</html>
