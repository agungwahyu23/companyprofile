<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="sb-nav-fixed">
    <?php $this->load->view("admin/_partials/topbar.php") ?>

    <div id="layoutSidenav">
        <?php $this->load->view("admin/_partials/sidebar.php") ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Tambah Foto</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin/Dashboard') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tambah Foto</li>
                    </ol>
                    <form action="<?= base_url('admin/Produk/uploadGaleri') ?>" method="post" enctype="multipart/form-data">
                        <?php echo $this->session->flashdata('pesan') ?>
                        <div class="card mb-4">
                            <div class="card-header">Tambah Foto</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-lg-12 col-sm-12">
                                        <label>Nama Produk</label>
                                        <input class="form-control" value="<?= $produk['nama'] ?>" type="text" placeholder="Nama Produk" readonly />
                                        <input class="form-control" name="id" value="<?= $produk['idProduk'] ?>" type="hidden" placeholder="Nama Produk" readonly />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>Gambar Produk</label>
                                        <?= form_error('foto', '<small class="text-danger pl-2">', '</small>'); ?>
                                        <input name="foto" id="banner" type="file" accept="image/*" class="form-control border-dark small mb-3" placeholder="" aria-describedby="basic-addon2" required>
                                    </div>
                                    <div class="col-sm-12 col-lg-6">
                                        <div class="input-group">
                                            <label>Image Preview</label>
                                            <br />
                                        </div>
                                        <img id="preview" src="" alt="" style="width:140px" /> <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2" href="#">
                            Simpan
                        </button>
                        <a class="btn btn-danger" href="javascript:history.go(-1)">
                            Batal
                        </a>
                    </form>

                    <div class="mt-5">
                        <h4>Galeri Produk <?= $produk['nama'] ?> <?= $produk['kapasitas'] ?> Gram</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($galeri as $data) { ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td>
                                            <img style="height: 100px; width: 100px;" src="<?= base_url('img/Produk/') . $data['foto'] ?>" alt="">
                                        </td>
                                        <td>
                                            <a type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-trash" style="color:#444"></i></a>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Peringatan!</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah anda yakin untuk menghapus foto ini ?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                                            <a href="<?= base_url('admin/Produk/hapusGaleri/' . $data['idGaleri']) ?>" class="btn btn-primary">Ya, Hapus.</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                <?php $i++;
                                } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </main>
            <?php $this->load->view("admin/_partials/footer.php") ?>
        </div>
    </div>

    <?php $this->load->view("admin/_partials/js.php") ?>
</body>

<script>
    CKEDITOR.replace('deskripsi');
</script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#banner").change(function() {
        readURL(this);
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</html>