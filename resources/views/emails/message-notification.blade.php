<!DOCTYPE html>
<html>

<head>
    <title>New Message Notification</title>
</head>

<body>
    <h1>New Message Received</h1>
    <p><strong>Name:</strong> {{ $messageData['name'] }}</p>
    <p><strong>Email:</strong> {{ $messageData['email'] }}</p>
    <p><strong>Subject:</strong> {{ $messageData['subject'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $messageData['message'] }}</p>
</body>

</html>
