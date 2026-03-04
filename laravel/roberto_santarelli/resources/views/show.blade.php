<x-layout>

        <div class="container mt-5">
            <div class="row align-items-center justify-content-center">
                
                <div class="col-md-4 text-center"> <img src="{{ asset($libro['immagine']) }}" class="img-fluid shadow-lg rounded" alt="Copertina">
                </div>
                
                <div class="col-md-7 mt-4 mt-md-0"> <h1 class="display-5"><?php echo $libro['titolo']; ?></h1>
                    <hr>
                    <p class="lead text-secondary">
                        <?php echo $libro['descrizione']; ?>
                    </p>
                    <a href="/opere" class="btn btn-outline-dark mt-4 mb-4">Torna indietro</a>
                </div>
                
            </div>
        </div>


</x-layout>