<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <!--fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@400;700&family=Unna:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cherish&family=Tangerine:wght@400;700&family=Unna:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
     @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title></title>

</head>

    <body class="sfondo mb-5">
      <x-navbar/>
      <main class="grow">
        {{$slot}}
      </main>
  <nav class="fontSize mb-5 navbar navbar-expand-lg bg-secondary cherish-regular fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/biografia">Biografia</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/opere">Opere</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contatti</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container text-center">
  <div class="row">
    <div class="col-8 vh-100">
    </div>
    <div class="nomeAutore col-4">
      <h1 class="cherish-regular mt-5 text-dark">Roberto Santarelli</h1>
    </div>
  </div>
</div>
<x-footer/>
</body>
</html>