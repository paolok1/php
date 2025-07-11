<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chi Siamo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">Viaggi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('chi.siamo')}}">Chi Siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('teachers')}}">Dettagli</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid vh-100 bg-background img-fluid">
    <div class="row h-75 justify-content-center align-items-center">
        <div class="col-12">
            <h1 class="py-5 text-center textColor display-4 title">
              I nostri Sponsor
            </h1>
        </div>
    </div>
    <div class="row justify-content-center align-items-center text-warning py-5 ">
        @foreach ($sponsor as $sponsor) 
     <div class="col-12 col-md-3">
        <div class="card mx-auto" style="width: 15rem;">
          <img src="{{$sponsor['logo']}}" class="logo" class="card-img-top foto" alt="...">
             <div class="card-body">
              <h5 class="card-title">{{$sponsor['name']}} {{$sponsor['city']}}</h5>
              <p class="card-text">{{$sponsor['name']}} {{$sponsor['city']}}</p>
              <a href="{{route('sponsor.detail', ['id'=>$sponsor['id']])}}" class="btn btn-primary">Vai al dettaglio</a>
        </div> 
     </div>
    </div>
      @endforeach
    </div>
</div>
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>