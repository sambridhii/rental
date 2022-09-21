<html>
<head>
    <title> Create</title>
</head>
<body>
<form method="post" action="{{action([\App\Http\Controllers\PagesController::class,'store'])}}" enctype="multipart/form-data">
    @csrf
    <label>location:</label>
    <input type="text" name="location" required>
    <label>Contact </label>
    <input type="text" name="Contact" required>
    <label>Number of room:</label>
    <input type="number" name="Numberofroom" required>
    <label>image</label>
    <input type="file" name="image" required>
    <input type="submit">
</form>
</body>
</html>
