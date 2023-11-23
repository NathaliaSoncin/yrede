<!DOCTYPE html>
<html lang="en" data-theme="pastel">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Postagem</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.4/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

    <div>Nova Postagem</div>

    <form action="/salva-post"method="POST">

    @csrf

    <textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea>

    
<button type="submit" class="btn btn-primary">Postar</button>
    </form>

</body>

</html>



