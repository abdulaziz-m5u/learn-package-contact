<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact Us</h1>

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf 

        <input type="text" name="name" placeholder="Your name">
        <input type="email" name="email" placeholder="Your email">
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        <button type="submit">Send</button>
    </form>
</body>
</html>