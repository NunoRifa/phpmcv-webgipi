<section id="featured-services" class="featured-services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <?php foreach ($data['getDataServices'] as $data) : ?>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box w-100" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class='<?= $data['icon_services'] ?>'></i></div>
                        <h4 class="title"><a href="javascript:void(0)"><?= $data['judul_services'] ?></a></h4>
                        <p class="description"><?= $data['konten_services'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>