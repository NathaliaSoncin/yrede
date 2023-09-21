<!DOCTYPE html>
<html lang="PT-BR">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Lista de usuários</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.7/dist/full.css" rel="stylesheet" type="text/css"/>
<script src="https://cdn.tailwindcss.com"></script>

<script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

    <h1 class="w-full text-center text-x1 font-bold"> Lista de Usuários</h1>

    <div class="overflow-x-auto p-20">
  <table class="table table-zebra">
    <!-- head -->
    <thead>
      <tr>
        <th>Usuário</th>
        <th>Nome</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>

    @foreach ($usuarios as $usuarios)
      <!-- row 1 -->
      <tr>
        <th>{{$usuarios->usuario}}</th>
        <td>{{$usuarios->nome}}</td>
        <td>{{$usuarios->email}}</td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>

</body>
</html>