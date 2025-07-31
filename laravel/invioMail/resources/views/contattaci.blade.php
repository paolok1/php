<x-layout>

    <div class="container-fluid">
        <div class="row height-custom align-items-center justify-content-center">
            <div class="col-12">
                <h1 class="text-center display-4 title">
                    CONTATTACI!
                </h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 my-2">
                    <form class="py-3 px-5 box-bg shadow rounded text-custom" method="POST" 
                        action="{{ route('contact.submit') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Nome e Cognome</label>
                            <input type="text" class="form-control" id="username" placeholder="Mario Rossi" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="usermail" class="form-label">Indirizzo Email</label>
                            <input type="email" class="form-control" id="usermail" placeholder="name@example.com" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Messaggio</label>
                            <textarea name="message" class="form-control" id="message" rows="3"></textarea>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Invia Messaggio</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layout>