<x-layout>
    <div class="container-fluid vh-100 bg-background img-fluid">
        <div class="row h-75 justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="py-5 text-center textColor display-4 title">
                    Dettagli dello Sponsor: {{$marchio['name']}}
                </h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <img class="logo2" src="{{$marchio['logo']}}" alt="foto logo">
            </div>
            <div class="col-12 col-md-6">
                <h2>{{$marchio['city']}}</h2>
                <p></p>
            </div>
        </div>
    </div>

</x-layout>