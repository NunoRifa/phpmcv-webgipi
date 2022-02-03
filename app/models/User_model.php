<?php

class User_model
{
    private $listPage = [
        [
            "nama" => "Home",
            "url" => "/"
        ],
        [
            "nama" => "Sejarah",
            "url" => "/History"
        ],
        [
            "nama" => "Visi & Misi",
            "url" => "/Visi"
        ],
        [
            "nama" => "Portofolio",
            "url" => "/Portfolio"
        ]
    ];

    private $simpleLink = [
        [
            "nama" => "Tentang Kami",
            "url" => "#about"
        ],
        [
            "nama" => "Layanan Kami",
            "url" => "#featured-services"
        ],
        [
            "nama" => "Portofolio",
            "url" => "#team-portfolio"
        ],
        [
            "nama" => "Galeri",
            "url" => "#gallery"
        ]
    ];

    private $nama = 'Doddy Ferdiansyah';

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getLogin()
    {
        if ($_POST['username'] == '' || $_POST['password'] == '') {
            header('Location: ' . BASEURL . 'Admin/login');
        } else {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $this->db->query('SELECT * FROM user');
            $data = $this->db->single();
            if ($username == $data['username'] && $password == $data['password']) {
                $_SESSION['username'] = $_POST['username'];
                return 'login';
            } else {
                return 'invalid';
            }
        }
    }

    public function getUser()
    {
        return $this->nama;
    }

    public function getListNav()
    {
        return $this->listPage;
    }

    public function getSimpleLink()
    {
        return $this->simpleLink;
    }

    /* ============================ Header ============================ */
    public function getAllHeader()
    {
        $this->db->query('SELECT * FROM header');
        return $this->db->resultSet();
    }

    public function ubahDataHeader($data)
    {
        $query = "UPDATE header 
                    SET judul = :judul,
                        judul_warna = :judul_warna,
                        kontent = :kontent
                    WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('judul_warna', $data['judul_warna']);
        $this->db->bind('kontent', $data['kontent']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }
    /* ============================ End Header ============================ */

    /* ============================ About ============================ */
    public function getAllAbout()
    {
        $this->db->query('SELECT * FROM aboutus');
        return $this->db->resultSet();
    }

    public function ubahDataAbout($data)
    {
        if ($_FILES['gambar_tentang']['name'] == '' || $_FILES['gambar_tentang']['name'] == null || $_FILES['gambar_tentang']['name'] == 0) {
            $query = "UPDATE aboutus 
                        SET judul_section = :judul_section,
                            judul = :judul,
                            judul_warna = :judul_warna,
                            desc_judul = :desc_judul,
                            judul_konten = :judul_konten,
                            konten_tentang = :konten_tentang
                        WHERE id = :id";

            $this->db->query($query);
            $this->db->bind('judul_section', $data['judul_section']);
            $this->db->bind('judul', $data['judul']);
            $this->db->bind('judul_warna', $data['judul_warna']);
            $this->db->bind('desc_judul', $data['desc_judul']);
            $this->db->bind('judul_konten', $data['judul_konten']);
            $this->db->bind('konten_tentang', $data['konten_tentang']);
            $this->db->bind('id', $data['id']);

            $this->db->execute();
            return $this->db->rowCount();
        } else {
            $gambar_tentang = $_FILES['gambar_tentang']['name'];
            $ekstensi_diperbolehkan = array('png', 'jpg');
            $x = explode('.', $gambar_tentang);
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['gambar_tentang']['tmp_name'];
            $validasi = 'aboutus_image_';
            $angka_acak = rand(1, 999);
            $nama_gambar_baru = $validasi . $angka_acak;

            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                move_uploaded_file($file_tmp, SITE_ROOT . '/img/aboutus/' . $nama_gambar_baru . '.jpg');
                $query = "UPDATE aboutus 
                            SET judul_section = :judul_section,
                                judul = :judul,
                                judul_warna = :judul_warna,
                                desc_judul = :desc_judul,
                                gambar_tentang = :gambar_tentang,
                                judul_konten = :judul_konten,
                                konten_tentang = :konten_tentang
                            WHERE id = :id";

                $this->db->query($query);
                $this->db->bind('judul_section', $data['judul_section']);
                $this->db->bind('judul', $data['judul']);
                $this->db->bind('judul_warna', $data['judul_warna']);
                $this->db->bind('desc_judul', $data['desc_judul']);
                $this->db->bind('gambar_tentang', $nama_gambar_baru . '.jpg');
                $this->db->bind('judul_konten', $data['judul_konten']);
                $this->db->bind('konten_tentang', $data['konten_tentang']);
                $this->db->bind('id', $data['id']);

                $this->db->execute();
                return $this->db->rowCount();
            } else {
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='" . BASEURL . "/Admin/about';</script>";
            }
        }
    }
    /* ============================ End About ============================ */

    /* ============================ Services ============================ */
    public function getAllServices()
    {
        $this->db->query('SELECT * FROM services');
        return $this->db->resultSet();
    }

    public function getServicesById($id)
    {
        $this->db->query('SELECT * FROM services WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function countServices()
    {
        $this->db->query('SELECT COUNT(*) AS total from services');
        return $this->db->single();
    }

    public function tambahDataServices($data)
    {
        $query = "INSERT INTO services
                    VALUES ('', :icon_services, :judul_services, :konten_services)";

        $this->db->query($query);
        $this->db->bind('icon_services', $data['icon_services']);
        $this->db->bind('judul_services', $data['judul_services']);
        $this->db->bind('konten_services', $data['konten_services']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataServices($data)
    {
        $query = "UPDATE services 
                    SET icon_services = :icon_services,
                        judul_services = :judul_services,
                        konten_services = :konten_services
                    WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('icon_services', $data['icon_services']);
        $this->db->bind('judul_services', $data['judul_services']);
        $this->db->bind('konten_services', $data['konten_services']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataServices($id)
    {
        $query = "DELETE FROM services WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }
    /* ============================ End Services ============================ */

    /* ============================ Portfolio ============================ */
    public function getAllPortfolio()
    {
        $this->db->query('SELECT * FROM portfolio');
        return $this->db->single();
    }

    public function ubahDataPortfolio($data)
    {
        $query = "UPDATE portfolio 
                    SET judul_portofolio = :judul_portofolio,
                        judul_portofolio_warna = :judul_portofolio_warna,
                        konten_portofolio = :konten_portofolio
                    WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('judul_portofolio', $data['judul_portofolio']);
        $this->db->bind('judul_portofolio_warna', $data['judul_portofolio_warna']);
        $this->db->bind('konten_portofolio', $data['konten_portofolio']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }
    /* ============================ End Portfolio ============================ */

    /* ============================ Gallery ============================ */
    public function getSecGallery()
    {
        $this->db->query('SELECT * FROM gallery_sec');
        return $this->db->single();
    }

    public function tambahSecGallery($data)
    {
        $query = "INSERT INTO gallery_sec
                    VALUES ('', :judul_gallery, :judul_gallery_warna, :konten_gallery)";

        $this->db->query($query);
        $this->db->bind('judul_gallery', $data['judul_gallery']);
        $this->db->bind('judul_gallery_warna', $data['judul_gallery_warna']);
        $this->db->bind('konten_gallery', $data['konten_gallery']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahSecGallery($data)
    {
        $query = "UPDATE gallery_sec 
                    SET judul_gallery = :judul_gallery,
                        judul_gallery_warna = :judul_gallery_warna,
                        konten_gallery = :konten_gallery
                    WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('judul_gallery', $data['judul_gallery']);
        $this->db->bind('judul_gallery_warna', $data['judul_gallery_warna']);
        $this->db->bind('konten_gallery', $data['konten_gallery']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getGallery()
    {
        $this->db->query('SELECT * FROM gallery ORDER BY id DESC');
        return $this->db->resultSet();
    }

    public function getGalleryById($id)
    {
        $this->db->query('SELECT * FROM gallery WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahGallery($data)
    {
        if ($_FILES['gambar_galeri']['name'] == '' || $_FILES['gambar_galeri']['name'] == null || $_FILES['gambar_galeri']['name'] == 0) {
            $query = "INSERT INTO gallery
                    VALUES ('', :judul_gambar, :konten_gambar, '')";

            $this->db->query($query);
            $this->db->bind('judul_gambar', $data['judul_gambar']);
            $this->db->bind('konten_gambar', $data['konten_gambar']);

            $this->db->execute();
            return $this->db->rowCount();
        } else {
            $gambar_galeri = $_FILES['gambar_galeri']['name'];
            $ekstensi_diperbolehkan = array('png', 'jpg');
            $x = explode('.', $gambar_galeri);
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['gambar_galeri']['tmp_name'];
            $validasi = 'gallery_image_';
            $angka_acak = rand(1, 999999);
            $nama_gambar_baru = $validasi . $angka_acak;

            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                move_uploaded_file($file_tmp, SITE_ROOT . '/img/gallery/' . $nama_gambar_baru . '.jpg');
                $query = "INSERT INTO gallery
                            VALUES ('', :judul_gambar, :konten_gambar, :gambar_galeri)";

                $this->db->query($query);
                $this->db->bind('judul_gambar', $data['judul_gambar']);
                $this->db->bind('konten_gambar', $data['konten_gambar']);
                $this->db->bind('gambar_galeri', $nama_gambar_baru . '.jpg');

                $this->db->execute();
                return $this->db->rowCount();
            } else {
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='" . BASEURL . "/Admin/gallery';</script>";
            }
        }
    }

    public function ubahGallery($data)
    {
        if ($_FILES['gambar_galeri']['name'] == '' || $_FILES['gambar_galeri']['name'] == null || $_FILES['gambar_galeri']['name'] == 0) {
            $query = "UPDATE gallery 
                        SET judul_gambar = :judul_gambar,
                            konten_gambar = :konten_gambar
                        WHERE id = :id";

            $this->db->query($query);
            $this->db->bind('judul_gambar', $data['judul_gambar']);
            $this->db->bind('konten_gambar', $data['konten_gambar']);
            $this->db->bind('id', $data['id']);

            $this->db->execute();
            return $this->db->rowCount();
        } else {
            $gambar_galeri = $_FILES['gambar_galeri']['name'];
            $ekstensi_diperbolehkan = array('png', 'jpg');
            $x = explode('.', $gambar_galeri);
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['gambar_galeri']['tmp_name'];
            $validasi = 'gallery_image_';
            $angka_acak = rand(1, 999999);
            $nama_gambar_baru = $validasi . $angka_acak;

            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                move_uploaded_file($file_tmp, SITE_ROOT . '/img/gallery/' . $nama_gambar_baru . '.jpg');
                $query = "UPDATE gallery 
                        SET judul_gambar = :judul_gambar,
                            konten_gambar = :konten_gambar,
                            gambar_galeri = :gambar_galeri
                        WHERE id = :id";

                $this->db->query($query);
                $this->db->bind('judul_gambar', $data['judul_gambar']);
                $this->db->bind('konten_gambar', $data['konten_gambar']);
                $this->db->bind('gambar_galeri', $nama_gambar_baru . '.jpg');
                $this->db->bind('id', $data['id']);

                $this->db->execute();
                return $this->db->rowCount();
            } else {
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='" . BASEURL . "/Admin/gallery';</script>";
            }
        }
    }

    public function hapusDataGallery($id)
    {
        $query = "DELETE FROM gallery WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }
    /* ============================ End Gallery ============================ */

    /* ============================ History ============================ */
    public function getGambarHistory()
    {
        $this->db->query('SELECT * FROM history_img ORDER BY id DESC');
        return $this->db->resultSet();
    }

    public function tambahGambarSejarah($data)
    {
        if ($_FILES['gambar_sejarah']['name'] == '' || $_FILES['gambar_sejarah']['name'] == null || $_FILES['gambar_sejarah']['name'] == 0) {
            echo "<script>alert('Harap masukan gambar!');window.location='" . BASEURL . "/Admin/history';</script>";
        } else {
            $gambar_sejarah = $_FILES['gambar_sejarah']['name'];
            $ekstensi_diperbolehkan = array('png', 'jpg');
            $x = explode('.', $gambar_sejarah);
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['gambar_sejarah']['tmp_name'];
            $validasi = 'history_image_';
            $angka_acak = rand(1, 999999);
            $nama_gambar_baru = $validasi . $angka_acak;

            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                move_uploaded_file($file_tmp, SITE_ROOT . '/img/history/' . $nama_gambar_baru . '.jpg');
                $query = "INSERT INTO history_img
                            VALUES ('', :gambar_sejarah)";

                $this->db->query($query);
                $this->db->bind('gambar_sejarah', $nama_gambar_baru . '.jpg');

                $this->db->execute();
                return $this->db->rowCount();
            } else {
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='" . BASEURL . "/Admin/history';</script>";
            }
        }
    }

    public function hapusDataGambarSejarah($id)
    {
        $query = "DELETE FROM history_img WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getHeaderHistory()
    {
        $this->db->query('SELECT * FROM history_header');
        return $this->db->single();
    }

    public function ubahHeaderSejarah($data)
    {
        $query = "UPDATE history_header 
                    SET judul_header = :judul_header,
                        konten_header = :konten_header
                    WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('judul_header', $data['judul_header']);
        $this->db->bind('konten_header', $data['konten_header']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getHistory()
    {
        $this->db->query('SELECT * FROM history');
        return $this->db->single();
    }

    public function ubahSejarah($data)
    {
        $query = "UPDATE history 
                    SET judul_history = :judul_history,
                        konten_history = :konten_history
                    WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('judul_history', $data['judul_history']);
        $this->db->bind('konten_history', $data['konten_history']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }
    /* ============================ End History ============================ */

    /* ============================ Visi ============================ */
    public function getSecVisi()
    {
        $this->db->query('SELECT * FROM visi_sec');
        return $this->db->single();
    }

    public function ubahSecVisi($data)
    {
        $query = "UPDATE visi_sec 
                    SET visi_judul = :visi_judul,
                        visi_konten = :visi_konten
                    WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('visi_judul', $data['visi_judul']);
        $this->db->bind('visi_konten', $data['visi_konten']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getVisi()
    {
        $this->db->query('SELECT * FROM visi');
        return $this->db->single();
    }

    public function tambahDataVisi($data)
    {
        $query = "INSERT INTO visi
                    VALUES ('', :icon_visi, :judul_visi, :konten_visi)";

        $this->db->query($query);
        $this->db->bind('icon_visi', $data['icon_visi']);
        $this->db->bind('judul_visi', $data['judul_visi']);
        $this->db->bind('konten_visi', $data['konten_visi']);

        $this->db->execute();
        return $this->db->rowCount();
    }
    
    public function ubahDataVisi($data)
    {
        $query = "UPDATE visi 
                    SET icon_visi=:icon_visi,
                        judul_visi=:judul_visi,
                        konten_visi=:konten_visi 
                    WHERE id=:id";

        $this->db->query($query);
        $this->db->bind('icon_visi', $data['icon_visi']);
        $this->db->bind('judul_visi', $data['judul_visi']);
        $this->db->bind('konten_visi', $data['konten_visi']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getMisi()
    {
        $this->db->query('SELECT * FROM misi');
        return $this->db->single();
    }

    public function ubahDataMisi($data)
    {
        $query = "INSERT INTO misi
                    VALUES ('', :icon_misi, :judul_misi, :konten_misi)";

        $query = "UPDATE misi 
                    SET icon_misi=:icon_misi,
                        judul_misi=:judul_misi,
                        konten_misi=:konten_misi 
                    WHERE id=:id";

        $this->db->query($query);
        $this->db->bind('icon_misi', $data['icon_misi']);
        $this->db->bind('judul_misi', $data['judul_misi']);
        $this->db->bind('konten_misi', $data['konten_misi']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }
    /* ============================ End Visi ============================ */

    /* ============================ Portfolio Content ============================ */
    public function getPortfolioContent()
    {
        $this->db->query('SELECT * FROM portfolio_content');
        return $this->db->resultSet();
    }

    public function tambahPortfolioContent($data)
    {
        if ($_FILES['gambar_konpor']['name'] == '' || $_FILES['gambar_konpor']['name'] == null || $_FILES['gambar_konpor']['name'] == 0) {
            $query = "INSERT INTO portfolio_content
                    VALUES ('', :judul_konpor, :konten_konpor, '')";

            $this->db->query($query);
            $this->db->bind('judul_konpor', $data['judul_konpor']);
            $this->db->bind('konten_konpor', $data['konten_konpor']);

            $this->db->execute();
            return $this->db->rowCount();
        } else {
            $gambar_konpor = $_FILES['gambar_konpor']['name'];
            $ekstensi_diperbolehkan = array('png', 'jpg');
            $x = explode('.', $gambar_konpor);
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['gambar_konpor']['tmp_name'];
            $validasi = 'clients_image_';
            $angka_acak = rand(1, 999999);
            $nama_gambar_baru = $validasi . $angka_acak;

            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                move_uploaded_file($file_tmp, SITE_ROOT . '/img/clients/' . $nama_gambar_baru . '.jpg');
                $query = "INSERT INTO portfolio_content
                            VALUES ('', :judul_konpor, :konten_konpor, :gambar_konpor)";

                $this->db->query($query);
                $this->db->bind('judul_konpor', $data['judul_konpor']);
                $this->db->bind('konten_konpor', $data['konten_konpor']);
                $this->db->bind('gambar_konpor', $nama_gambar_baru . '.jpg');

                $this->db->execute();
                return $this->db->rowCount();
            } else {
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='" . BASEURL . "/Admin/portfolioContent';</script>";
            }
        }
    }

    public function getPortConById($id)
    {
        $this->db->query('SELECT * FROM portfolio_content WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function ubahPortfolioContent($data)
    {
        if ($_FILES['gambar_konpor']['name'] == '' || $_FILES['gambar_konpor']['name'] == null || $_FILES['gambar_konpor']['name'] == 0) {
            $query = "UPDATE portfolio_content 
                        SET judul_konpor = :judul_konpor,
                            konten_konpor = :konten_konpor
                        WHERE id = :id";

            $this->db->query($query);
            $this->db->bind('judul_konpor', $data['judul_konpor']);
            $this->db->bind('konten_konpor', $data['konten_konpor']);
            $this->db->bind('id', $data['id']);

            $this->db->execute();
            return $this->db->rowCount();
        } else {
            $gambar_konpor = $_FILES['gambar_konpor']['name'];
            $ekstensi_diperbolehkan = array('png', 'jpg');
            $x = explode('.', $gambar_konpor);
            $ekstensi = strtolower(end($x));
            $file_tmp = $_FILES['gambar_konpor']['tmp_name'];
            $validasi = 'clients_image_';
            $angka_acak = rand(1, 999999);
            $nama_gambar_baru = $validasi . $angka_acak;

            if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
                move_uploaded_file($file_tmp, SITE_ROOT . '/img/clients/' . $nama_gambar_baru . '.jpg');
                $query = "UPDATE portfolio_content 
                        SET judul_gambar = :judul_gambar,
                            konten_gambar = :konten_gambar,
                            gambar_konpor = :gambar_konpor
                        WHERE id = :id";

                $this->db->query($query);
                $this->db->bind('judul_gambar', $data['judul_gambar']);
                $this->db->bind('konten_gambar', $data['konten_gambar']);
                $this->db->bind('gambar_konpor', $nama_gambar_baru . '.jpg');
                $this->db->bind('id', $data['id']);

                $this->db->execute();
                return $this->db->rowCount();
            } else {
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='" . BASEURL . "/Admin/portfolioContent';</script>";
            }
        }
    }

    public function hapusPortfolioContent($id)
    {
        $query = "DELETE FROM portfolio_content WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }
    /* ============================ End Portfolio Content ============================ */
}
