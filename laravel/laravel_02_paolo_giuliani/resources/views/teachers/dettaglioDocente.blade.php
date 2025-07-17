<x-layout>

    <div class="container-fluid vh-100 bg-background img-fluid">
        <div class="row h-75 justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="py-5 text-center textColor display-4 title">
                    Dettagli docente:{{$teacher['name']}} {{$teacher['surname']}}
                </h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <img src="https://picsum.photos/200" alt="foto casuali">
            </div>
            <div class="col-12 col-md-6">
                <h2>Professione</h2>
                <p>{{$teacher['subject']}}</p>
            </div>
        </div>
    </div>

</x-layout>