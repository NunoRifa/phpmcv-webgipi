<section id="visi-misi" class="visi-misi">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2><?= $data['getDataSecVisi']['visi_judul'] ?></h2>
            <p><?= $data['getDataSecVisi']['visi_konten'] ?></p>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="<?= $data['getDataVisi']['icon_visi'] ?>"></i></div>
                    <h4><a href="javascript:void(0)"><?= $data['getDataVisi']['judul_visi'] ?></a></h4>
                    <p><?= $data['getDataVisi']['konten_visi'] ?></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="<?= $data['getDataMisi']['icon_misi'] ?>"></i></div>
                    <h4><a href="javascript:void(0)"><?= $data['getDataMisi']['judul_misi'] ?></a></h4>
                    <p><?= $data['getDataMisi']['konten_misi'] ?></p>
                </div>
            </div>
        </div>
    </div>
</section>