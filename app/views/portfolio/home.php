<section id="team-portfolio" class="team-portfolio">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h3><?= $data['getDataPortfolio']['judul_portofolio'] ?> <span><?= $data['getDataPortfolio']['judul_portofolio_warna'] ?></span></h3>
            <p><?= $data['getDataPortfolio']['konten_portofolio'] ?></p>
        </div>
        <div class="row">
            <?php foreach ($data['getDataPortfolioLimit'] as $data) : ?>
                <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="product">
                        <div class="product-img">
                            <img src="<?= BASEURL ?>/img/clients/<?= $data['gambar_konpor'] ?>" class="img-fluid" alt="">
                        </div>
                        <div class="product-info">
                            <h4><?= $data['judul_konpor'] ?></h4>
                            <span><?= $data['konten_konpor'] ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>