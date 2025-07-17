<x-layout>

  <div class="container-fluid vh-100 bg-background img-fluid">
    <div class="row h-75 justify-content-center align-items-center">
      <div class="col-12">
        <h1 class="py-5 text-center textColor display-4 title">
          Dipendenti
        </h1>
      </div>
    </div>
    <div class="row justify-content-center align-items-center text-warning py-5 ">
      <!-- Non lasciare spazi tra L'ATTRIBUTO, l'= E IL CONTENUTO DELL'ATTRIBUTO -->
      @foreach ($teachers as $teacher)
      <div class="col-12 col-md-3">
        <x-card-teacher
          teacherName="{{$teacher['name']}}"
          teacherSurname="{{$teacher['surname']}}"
          teacherSubject="{{$teacher['subject']}}"
          teacherFoto="{{$teacher['foto']}}"></x-card-teacher>
      </div>
      @endforeach
    </div>
  </div>
</x-layout>