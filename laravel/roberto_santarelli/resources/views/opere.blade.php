<x-layout>
<div id="libroCarousel" class="carousel slide container my-5" data-bs-ride="carousel">
    <div class="carousel-inner">
        
        <div class="carousel-item active">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="card h-100 shadow-sm">
                        <img src="/terrazza.jpg" class="card-img-top object-fit-contain bg-light" style="height: 300px;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Terrazza vista strada</h5>
                            <p class="card-text">“La vista e i pensieri sono confusi...</p>
                            <a href="/libro/1" class="btn btn-outline-secondary btn-sm">Leggi di più</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-none d-md-block">
                    <div class="card h-100 shadow-sm">
                        <img src="/tokio.jpg" class="card-img-top object-fit-contain bg-light" style="height: 300px;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nata a Tokio...</h5>
                            <p class="card-text">Un nuovo caso per il capitano Luigi Simeoni...</p>
                            <a href="/libro/2" class="btn btn-outline-secondary btn-sm">Leggi di più</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div class="card h-100 shadow-sm">
                        <img src="/kill.png" class="card-img-top object-fit-contain bg-light" style="height: 300px;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">E se ti dicessi che...</h5>
                            <p class="card-text">Il ritrovamento di un cadavere...</p>
                            <a href="/libro/3" class="btn btn-outline-secondary btn-sm">Leggi di più</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-none d-md-block">
                    <div class="card h-100 shadow-sm">
                        <img src="/macchia.png" class="card-img-top object-fit-contain bg-light" style="height: 300px;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">La macchia d'inchiostro</h5>
                            <p class="card-text">Tutto nasce da una piccola macchia...</p>
                            <a href="/libro/4" class="btn btn-outline-secondary btn-sm">Leggi di più</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#libroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
        <span class="visually-hidden">Precedente</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#libroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
        <span class="visually-hidden">Successivo</span>
    </button>
</div>
</x-layout>