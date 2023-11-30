<!DOCTYPE html>
<html lang="en" data-theme="pastel">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name viewport >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Postagem </title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.4/dist/full.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

<!DOCTYPE html>

<html lang="en">

<head>
  
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.4/dist/full.min.css" rel="stylesheet" type="text/css"/>

    <script src="https://cdn.tailwindcss.com"></script>

    <title>Postagem</title>

</head>

<body>

    <div class="hero min-h-screen bg-black-600 p-7">

    <form action="/salva-post" method="post">

 @csrf
    
      <h7 class="text-5xl font-bold text-center justify-center flex p-5">Se você deseja o bem seja bem-vindo.</h7> <br>

  <div class="p-11 flex justify-around ">
    <img  src="https://th.bing.com/th/id/R.3a372dcde7b56309e2b61e69753798a9?rik=2JdEMxFUALZELg&riu=http%3a%2f%2f4.bp.blogspot.com%2f-PqjlmXB2KzU%2fUAeju20SzjI%2fAAAAAAAAEYo%2ftjpgdUrsAb8%2fs1600%2fPurple%2bDaisy%2bTumblr%2bBackgrounds%2b%2525282%252529.jpg&ehk=mOteXiQhC%2fFQ2K%2faljlrSK3SZe5eJRm2owMmSBe%2bwLo%3d&risl=&pid=ImgRaw&r=0" class="max-m-sm rounded-lg shadow-2xl border-b-3 border-teal-300" />

    <p class="p-6 "></p>

    <textarea placeholder="Bio" name="mensagem" class="shadow-lg rounded-lg textarea textarea-bordered textarea-lg w-full max-w-xs" ></textarea>

    <button class="flex items-center justify-center p-3 shadow-lg rounded-r-3xl border border-teal-300 bg-teal-600" type="submit"> postar</button>
  
  </div>
          
         
</div>
</body>
</html>



