<!DOCTYPE html>
<html lang="en">
<head>



    <meta charset="UTF-8">


    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.4/dist/full.min.css" rel="stylesheet" type="text/css" />

<script src="https://cdn.tailwindcss.com"></script>

    <title>Inicial</title>

</head>
  

  <div class="p-10 flex justify-around">

  <h7 class="card-title text-center text-5x1 font-bold text-center italic font-serif text-lg decoration-dashed decoration-auto rounded-r-3xl shadow-xl  flex p-6 text-purple-400 underline font-mono bg-fuchsia-100 border-">É muito bom ter você aqui seja bem-vindo</h7><div>

    <img src="https://th.bing.com/th/id/OIP.1rABdySOeT1XZPzyhkTPxwHaHa?rs=1&pid=ImgDetMain" 
    
  
    class="max-w-sm rounded-lg shadow-1x9 " />


  <a class="btn card-title text-center text-5x1 font-bold text-center italic font-serif text-lg decoration-dashed decoration-auto rounded-r-3xl shadow-xl  flex p-6 text-purple-400  font-mono bg-fuchsia-100 border-" href="/cadastrausuarios">Criar Conta</a>

  <a class="btn card-title text-center text-5x1 font-bold text-center italic font-serif text-lg decoration-dashed decoration-auto rounded-r-3xl shadow-xl  flex p-6 text-purple-400  font-mono bg-fuchsia-100 border-" href="/login">Login</a>

  <a class="btn card-title text-center text-5x1 font-bold text-center italic font-serif text-lg decoration-dashed decoration-auto rounded-r-3xl shadow-xl  flex p-6 text-purple-400 font-mono bg-fuchsia-100 border-" href="/post">Nova Postagem</a> </div>

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
