<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>LOGO PT</h3>
                    <p>
                        <?= $data['getDataGeneral']['alamat'] ?>
                        <br><br>
                        <strong>E-mail:</strong> <?= $data['getDataGeneral']['email'] ?><br>
                        <strong>Telepon:</strong> <?= $data['getDataGeneral']['phone'] ?><br>
                    </p>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Menu Halaman</h4>
                    <ul>
                        <?php foreach ($data['listPage'] as $listPage) : ?>
                            <li style="color: #106eea;"><i class="bx bx-chevron-right"></i> <a href="<?= BASEURL . $listPage['url'] ?>"><?= $listPage['nama'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Simpel Link</h4>
                    <ul>
                        <?php foreach ($data['simpleLink'] as $simpleLink) : ?>
                            <li style="color: #106eea;"><i class="bx bx-chevron-right"></i> <a href="<?= BASEURL . $simpleLink['url'] ?>"><?= $simpleLink['nama'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Sosial Media Kami</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem, hic.</p>
                    <div class="social-links mt-3">
                        <a href="<?= $data['getDataGeneral']['facebook'] ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="<?= $data['getDataGeneral']['instagram'] ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="<?= $data['getDataGeneral']['whatsapp'] ?>" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-4">
        <div class="copyright">
            &copy; Copyright <strong><span>PT. Giri Permata Indo</span></strong>.
        </div>
    </div>
</footer>

<!-- Vendor -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="<?= BASEURL; ?>/js/bootstrap.bundle.min.js"></script>
<script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
<script src="<?= BASEURL; ?>/vendor/aos/aos.js"></script>
<script src="<?= BASEURL; ?>/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= BASEURL; ?>/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= BASEURL; ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<!-- <script src="<?= BASEURL; ?>/vendor/purecounter/purecounter.js"></script> -->
<!-- <script src="<?= BASEURL; ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<!-- <script src="<?= BASEURL; ?>/vendor/waypoints/noframework.waypoints.js"></script> -->

<!-- Custom JS -->
<script src="<?= BASEURL; ?>/js/main.js"></script>
</body>

</html>