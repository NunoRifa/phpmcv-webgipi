<?php foreach ($data['getDataHeader'] as $data) : ?>
    <section id="hero" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1><?= $data['judul_header'] ?> <span><?= $data['judul_warna_header'] ?></span></h1>
            <h2><?= $data['konten_header'] ?></h2>
        </div>
    </section>
<?php endforeach; ?>