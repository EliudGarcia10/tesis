<div>
    <div class="mt-4">
        <?php for($i = 0; $i< 12; $i++){ ?>
            <?php if(is_int($i/3)){ ?>
                <?php $j = $i+2; ?>
                <div class="row">
            <?php } ?>
                <div class="col mb-2">
                    <div class="card card-body p-2">
                        <div class="row row-info">
                            <div class="col-3 p-3 text-center col-pic-channell rounded-circle d-flex align-items-center">
                                <img src="assets/img/profile_photo.jpeg" class="rounded-circle" alt="...">
                            </div>
                            <div class="col-9 ps-4">
                                <div>
                                    Nombre canal <?= $i ?>
                                </div>
                                <div class="text-secondary">
                                    <?= $i ?> videos
                                </div>
                                <hr>
                                <div>
                                    <button type="button" class="btn btn-sm btn-outline-success"><i class="bi bi-person-add"></i> suscribirme</button>
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