<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AML</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body class="bg-gray-400 font-mono">
    <x-navigation-bar></x-navigation-bar>
    <main class="mt-[5vh] text-white text-center">
        {{ $content }}
    </main>
</body>
</html>