<!DOCTYPE html>
<html>
<head>
    <title>Contact Us Email</title>
</head>
<body>
    <h1>Contact Us</h1>
    <p><strong>Name:</strong> {{ $request->name }}</p>
    <p><strong>Email:</strong> {{ $request->email }}</p>
    <p><strong>Subject:</strong> {{ $request->subject }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $request->message }}</p>
</body>
</html>
