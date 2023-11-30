<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.4/dist/full.min.css" rel="stylesheet" type="text/css" />

<script src="https://cdn.tailwindcss.com"></script>

    <title>Inicial</title>

</head>

<body>
  
<div class="bg-pink-100">

  <div class="p-10 flex justify-around">

    <img src="https://th.bing.com/th/id/OIP.0-YUS2TvE_0P8fchTcJq4AHaEK?rs=1&pid=ImgDetMain" 

    class="max-w-sm rounded-lg shadow-1x9 " />

  <h7 class="font-bold flex items-center">É muito bom ter você aqui seja bem-vindo</h7><div>

  <a class="btn" href="/cadastrausuarios">Criar Conta</a>

  <a class="btn" href="/login">Login</a>

  <a class="btn" href="/post">Nova Postagem</a> </div>
  

  </div>
  <p class="text-purple-400 whitespace-ligth text-purple-400 ">Sempre é uma alergia imensa ter você por perto! Seja muito bem-vindo.<p>

</div>

@foreach ($posts as $post)


<div>

    <div>

        Postagem - {{$post->id}}

    </div>

    {{$post->mensagem}}


  </div>

<hr>

@endforeach

</body>
</html>
