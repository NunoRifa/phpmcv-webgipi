<section id="portfolio-details" class="portfolio-details">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-8" data-aos="fade-up">
                <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <?php foreach ($data['getDataGambarHistory'] as $data_img) : ?>
                            <div class="swiper-slide">
                                <img src="<?= BASEURL ?>/img/history/<?= $data_img['gambar_sejarah'] ?>" alt="Component">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="portfolio-info">
                    <h3><?= $data['getDataHeaderHistory']['judul_header'] ?></h3>
                    <p>
                        <?= $data['getDataHeaderHistory']['konten_header'] ?>
                    </p>
                </div>
            </div>
            <div class="portfolio-description" data-aos="fade-up">
                <h2><?= $data['getDataHistory']['judul_history'] ?></h2>
                <p>
                    <?= $data['getDataHistory']['konten_history'] ?>
                </p>
            </div>
        </div>
    </div>
</section>