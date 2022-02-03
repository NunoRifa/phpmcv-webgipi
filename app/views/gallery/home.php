<section id="gallery" class="gallery section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h3><?= $data['getDataSecGallery']['judul_gallery'] ?> <span><?= $data['getDataSecGallery']['judul_gallery_warna'] ?></span></h3>
            <p><?= $data['getDataSecGallery']['konten_gallery'] ?></p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="gallery-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>
            </div>
        </div>
        <div class="row gallery-container" data-aos="fade-up" data-aos-delay="200">
            <?php foreach ($data['getDataGallery'] as $data) : ?>
                <div class="col-lg-4 col-md-6 gallery-item <?= $data['konten_gambar'] ?>">
                    <img src="<?= BASEURL ?>/img/gallery/<?= $data['gambar_galeri'] ?>" class="img-fluid" alt="">
                    <div class="gallery-info">
                        <h4><?= $data['judul_gambar'] ?></h4>
                        <p><?= $data['konten_gambar'] ?></p>
                        <a href="<?= BASEURL ?>/img/gallery/<?= $data['gambar_galeri'] ?>" data-gallery="galleryGallery" class="gallery-lightbox preview-link" title="App 1" target="_blank"><i class="bx bx-fullscreen"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>