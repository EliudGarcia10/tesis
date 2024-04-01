<?php ?>
<div class="row">
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
                            <div class="col-2 col-pic-channel rounded-circle">
                                <img src="assets/img/profile_photo.jpeg" class="rounded-circle" alt="...">
                            </div>
                            <div class="col-10 ps-4">
                                <div>
                                    Titulo <?= $i ?>
                                </div>
                                <div class="text-secondary">
                                    Nombre canal <?= $i ?>
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