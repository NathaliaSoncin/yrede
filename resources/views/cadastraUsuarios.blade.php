<!DOCTYPE html>
<html lang="PT-BR">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>cadastro de usuários</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.7/dist/full.css" rel="stylesheet" type="text/css"/>
<script src="https://cdn.tailwindcss.com"></script>

<script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

    <h1 class="w-full text-center text-x1 font-bold">Cadastro de Usuários</h1>

    <form class="card-body max-w-md m-auto m-a" action="{{route('salva-usuario')}}" method="post">

    @csrf 

    <div class="form-control">
      <label class="label">
      <span class="label-text font-bold"> Nome</span>
      </label>
      <input name=nome type="text" placeholder="nome" class="input input-bordered" required/>

</div>

     <div class="form-control">
      <label class="label">
      <span class="label-text font-bold"> Usuário</span>
      </label>
      <input name=usuario type="text" placeholder="usuario" class="input input-bordered" required/>

</div>

<div class="form-control">
      <label class="label">
      <span class="label-text font-bold">Bio</span>
      </label>
      <input name=bio type="text" placeholder="usuario" class="input input-bordered" required/>

</div>


<div class="form-control">
      <label class="label">
      <span class="label-text font-bold"> Email</span>
      </label>
      <input name=email type="email" placeholder="usuario" class="input input-bordered" required/>

</div>

<div class="form-control">
      <label class="label">
      <span class="label-text font-bold">Senha</span>
      </label>
      <input name=senha type="password" placeholder="usuario" class="input input-bordered" required/>

</div>

<button class="btn btn-success">salvar </button>
    </form>




</body>
</html>