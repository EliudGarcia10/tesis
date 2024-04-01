<div>
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
            <img src="assets/img/uv-carousel.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Noticia 1</h5>
                <p>Descripción 1.</p>
            </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
            <img src="assets/img/uv-carousel.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Noticia 2</h5>
                <p>Descripción 2.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="assets/img/uv-carousel.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Noticia 3</h5>
                <p>Descripción 3.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="d-flex justify-content-center">
        <hr class="col-2">
    </div>
    <div class="mt-4">
        <?php for($i = 0; $i< 12; $i++){ ?>
            <?php if(is_int($i/3)){ ?>
                <?php $j = $i+2; ?>
                <div class="row">
            <?php } ?>
                <div class="col mb-2">
                    <div class="card card-body">
                        <img src="assets/img/uv-back.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="row row-info">
                                <div class="col-12 text-center">
                                    <div>
                                        Titulo noticia <?= $i ?>
                                    </div>
                                    <div class="text-secondary">
                                        Descripción <?= $i ?>
                                    </div>
                                    <div class="">
                                        <a href="">Ver más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php if($j == $i){ ?>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</div>