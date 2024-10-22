<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VAPID Keys</title>
</head>
<body>
    <h1>VAPID Keys</h1>
    @if(isset($vapidPublicKey) && isset($vapidPrivateKey))
        <p><strong>VAPID_PUBLIC_KEY:</strong> {{ $vapidPublicKey }}</p>
        <p><strong>VAPID_PRIVATE_KEY:</strong> {{ $vapidPrivateKey }}</p>
    @else
        <p>No keys generated yet.</p>
    @endif
</body>
</html>
