<?php foreach ($data['getDataAbout'] as $data) : ?>
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2><?= $data['judul_section'] ?></h2>
                <h3><?= $data['judul'] ?> <span><?= $data['judul_warna'] ?></span></h3>
                <p><?= $data['desc_judul'] ?></p>
            </div>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="<?= BASEURL ?>/img/about.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <h3><?= $data['judul_konten'] ?></h3>
                    <?= $data['konten_tentang'] ?>
                </div>
            </div>
        </div>
    </section>
<?php endforeach; ?>