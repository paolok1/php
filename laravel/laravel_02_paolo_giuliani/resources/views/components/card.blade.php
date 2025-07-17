<div class="card mx-auto" style="width: 15rem;">
          <img src="{{$sponsorLogo}}" class="logo" class="card-img-top foto" alt="...">
             <div class="card-body">
              <h5 class="card-title">{{$sponsorName}} {{$sponsorCity}}</h5>
              <p class="card-text">{{$sponsorName}} {{$sponsorCity}}</p>
              <a href="{{route('sponsor.detail', ['id'=>$sponsorId]) }}" class="btn btn-primary">Vai al dettaglio</a>
        </div> 
     </div>