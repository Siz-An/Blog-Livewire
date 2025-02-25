<!DOCTYPE html>
<html>
<head>
    <title>Contact Email</title>
</head>
<body>
    <h2>You have received a new message!</h2>
    <p><strong>Name:</strong> {{ $mailData['name'] }}</p>
    <p><strong>Email:</strong> {{ $mailData['email'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $mailData['message'] }}</p>
</body>
</html>
