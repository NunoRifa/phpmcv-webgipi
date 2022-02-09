<section id="featured-services" class="featured-services section-bg">
    <div class="container" data-aos="fade-up">
        <div class="d-lg-flex justify-content-evenly">
            <?php foreach ($data['getDataServices'] as $data) : ?>
                <div class="icon-box w-100 mx-1 my-2" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class='<?= $data['icon_services'] ?>'></i></div>
                    <h4 class="title"><a href="javascript:void(0)"><?= $data['judul_services'] ?></a></h4>
                    <p class="description"><?= $data['konten_services'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>