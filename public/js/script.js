$(function () {
  /* ============================ Mahasiswa ============================ */
  $(".tombolTambahData").on("click", function () {
    $("#formModalLabel").html("Tambah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $("#nama").val("");
    $("#nrp").val("");
    $("#email").val("");
    $("#jurusan").val("");
    $("#id").val("");
  });

  $(".tampilModalUbah").on("click", function () {
    $("#formModalLabel").html("Ubah Data Mahasiswa");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr(
      "action",
      "http://localhost/website-pt/public/mahasiswa/ubah"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/website-pt/public/mahasiswa/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama").val(data.nama);
        $("#nrp").val(data.nrp);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
        $("#id").val(data.id);
      },
    });
  });
  /* ============================ End Mahasiswa ============================ */

  /* ============================ Services ============================ */
  $(".tambahDataServices").on("click", function () {
    $("#formModalLabel").html("Tambah Data Services");
    $(".modal-footer button[type=button]").html("Tutup");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $("#icon_services").val("");
    $("#judul_services").val("");
    $("#konten_services").val("");
    $("#id").val("");
  });

  $(".ubahDataServices").on("click", function () {
    $("#formModalLabel").html("Ubah Services");
    $(".modal-footer button[type=button]").html("Tutup");
    $(".modal-footer button[type=submit]").html("Simpan");
    $(".modal-content form").attr(
      "action",
      "http://localhost/website-pt/public/Admin/ubahServices"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/website-pt/public/Admin/getUbahService",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#icon_services").val(data.icon_services);
        $("#judul_services").val(data.judul_services);
        $("#konten_services").val(data.konten_services);
        $("#id").val(data.id);
      },
    });
  });
  /* ============================ End Services ============================ */
  
  /* ============================ Gallery ============================ */
  $(".tambahDataGallery").on("click", function () {
    $("#formModalLabel").html("Tambah Gambar");
    $(".modal-footer button[type=button]").html("Tutup");
    $(".modal-footer button[type=submit]").html("Tambah Gambar");
    $("#judul_gambar").val("");
    $("#konten_gambar").val("");
    $("#gambar_galeri").val("");
    $("#id").val("");
  });

  $(".ubahDataGallery").on("click", function () {
    $("#formModalLabel").html("Ubah Galeri");
    $(".modal-footer button[type=button]").html("Tutup");
    $(".modal-footer button[type=submit]").html("Simpan");
    $(".modal-content form").attr(
      "action",
      "http://localhost/website-pt/public/Admin/ubahGambarGallery"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/website-pt/public/Admin/getUbahGallery",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#judul_gambar").val(data.judul_gambar);
        $("#konten_gambar").val(data.konten_gambar);
        // $("#gambar_galeri").val(data.gambar_galeri);
        $("#id").val(data.id);
      },
    });
  });
  /* ============================ End Gallery ============================ */

  /* ============================ History ============================ */
  $(".tambahDataSejarah").on("click", function () {
    $("#formModalLabel").html("Tambah Gambar");
    $(".modal-footer button[type=button]").html("Tutup");
    $(".modal-footer button[type=submit]").html("Tambah Gambar");
    $("#gambar_sejarah").val("");
    $("#id").val("");
  });
  /* ============================ End History ============================ */

  /* ============================ Portfolio ============================ */
  $(".tambahDataPortofolio").on("click", function () {
    $("#formModalLabel").html("Tambah Data");
    $(".modal-footer button[type=button]").html("Tutup");
    $(".modal-footer button[type=submit]").html("Tambah Data");
    $("#judul_konpor").val("");
    $("#konten_konpor").val("");
    $("#gambar_konpor").val("");
    $("#id").val("");
  });

  $(".ubahDataPortfolio").on("click", function () {
    $("#formModalLabel").html("Ubah Data");
    $(".modal-footer button[type=button]").html("Tutup");
    $(".modal-footer button[type=submit]").html("Simpan");
    $(".modal-content form").attr(
      "action",
      "http://localhost/website-pt/public/Admin/ubahDataPortCon"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/website-pt/public/Admin/getPortConById",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#judul_konpor").val(data.judul_konpor);
        $("#konten_konpor").val(data.konten_konpor);
        // $("#gambar_konpor").val(data.gambar_konpor);
        $("#id").val(data.id);
      },
    });
  });
  /* ============================ End Portfolio ============================ */
});
