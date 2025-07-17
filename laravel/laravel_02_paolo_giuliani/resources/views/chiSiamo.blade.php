<x-layout>

  <body>

    <div class="container-fluid vh-100 bg-background img-fluid">
      <div class="row h-75 justify-content-center align-items-center">
        <div class="col-12">
          <h1 class="py-5 text-center textColor display-4 title">
            I nostri Sponsor
          </h1>
        </div>
      </div>
      <div class="row justify-content-center align-items-center text-warning">
        @foreach ($sponsor as $sponsor)
        <div class="col-12 col-md-3 py-5">

          <x-card

            sponsorName="{{ $sponsor['name'] }}"
            sponsorCity="{{ $sponsor['city'] }}"
            sponsorId="{{ $sponsor['id'] }}"
            sponsorLogo="{{ $sponsor['logo'] }}">
          </x-card>


        </div>
        @endforeach
      </div>
    </div>

</x-layout>