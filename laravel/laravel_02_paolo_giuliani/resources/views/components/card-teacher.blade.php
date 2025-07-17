        <div class="card mx-auto" style="width: 15rem;">
           <img src="{{$teacherFoto}}" class="card-img-top foto" alt="...">
           <div class="card-body">
              <h5 class="card-title">{{$teacherName}} {{$teacherSurname}}</h5>
              <p class="card-text">{{$teacherSubject}}</p>
              <a href="{{route('teacher.detail', ['surname'=>$teacherSurname]) }} " class="btn btn-primary">Vai al dettaglio</a>
           </div>
        </div>