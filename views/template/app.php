<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Bookwise</title>
</head>
<body class="bg-stone-950 text-stone-400">
<header class="bg-stone-900">
    <nav class="mx-auto max-w-screen-lg flex justify-between py-2">
        <div class="font-bold text-xl tracking-wide">
            Book Wise
        </div>
        <ul class="flex space-x-4 font-bold">
            <li><a href="/" class="text-lime-500">Explorar</a></li>
            <li><a href="/meus-livros" class="hover:underline">Meus Livros</a></li>
        </ul>
        <ul>
            <li><a href="/login">Login</a></li>
        </ul>
    </nav>
</header>
<main class="mx-auto max-w-screen-lg space-y-6">
    <?php require "views/$view.view.php"?>
</main>
</body>
</html>