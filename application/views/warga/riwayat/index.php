<style>
    .img-icon {
        max-width: 6%;
    }

    @media screen and (max-width:346px) {
        .img-icon {
            max-width: 3%;
        }
    }
</style>
<div class="main-content container-fluid">
    <div class="page-title">
        <h5><strong>Riwayat Surat</strong></h5>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="row m-3">
                    <div class="col-lg-12 overflow-auto">

                        <a href="<?= base_url('history-surat-keterangan-usaha') ?>" class="mb-3">
                            <div class="unread custom-alert-3 bg-white" role="alert">
                                <div class="alert-text w-75 mt-2 p-4 d-flex flex-row">
                                    <img src="<?= base_url() ?>./assets/icons/envelope.png" class="img-icon">
                                    <h6 class=" font-bold ml-3 my-auto">Surat Keterangan Usaha
                                        <span class="badge badge bg-danger text-white"><?= $sku['jumlah'] ?></span>
                                    </h6>
                                </div>
                            </div>
                        </a>
                        <a href="<?= base_url('history-surat-keterangan-domisili-usaha') ?>" class="mb-3">
                            <div class="unread custom-alert-3 bg-white" role="alert">
                                <div class="alert-text w-75 mt-2 p-4 d-flex flex-row">
                                    <img src="<?= base_url() ?>./assets/icons/envelope.png" class="img-icon">
                                    <h6 class="font-bold ml-3 my-auto">Surat Keterangan Domisili Usaha
                                        <span class="badge badge bg-danger text-white"><?= $skdu['jumlah'] ?></span>
                                    </h6>
                                </div>
                            </div>
                        </a>
                        <a href="<?= base_url('history-surat-keterangan-domisili') ?>" class="mb-3">
                            <div class="unread custom-alert-3 bg-white" role="alert">
                                <div class="alert-text w-75 mt-2 p-4 d-flex flex-row">
                                    <img src="<?= base_url() ?>./assets/icons/envelope.png" class="img-icon">
                                    <h6 class="font-bold ml-3 my-auto">Surat Keterangan Domisili
                                        <span class="badge badge bg-danger text-white"><?= $skd['jumlah'] ?></span>
                                    </h6>
                                </div>
                            </div>
                        </a>
                        <a href="<?= base_url('history-surat-keterangan-beda-nama') ?>" class="mb-3">
                            <div class="unread custom-alert-3 bg-white" role="alert">
                                <div class="alert-text w-75 mt-2 p-4 d-flex flex-row">
                                    <img src="<?= base_url() ?>./assets/icons/envelope.png" class="img-icon">
                                    <h6 class="font-bold ml-3 my-auto">Surat Keterangan Beda Nama
                                        <span class="badge badge bg-danger text-white"><?= $skbn['jumlah'] ?></span>
                                    </h6>
                                </div>
                            </div>
                        </a>
                        <a href="<?= base_url('history-surat-keterangan-pemakaman') ?>" class="mb-3">
                            <div class="unread custom-alert-3 bg-white" role="alert">
                                <div class="alert-text w-75 mt-2 p-4 d-flex flex-row">
                                    <img src="<?= base_url() ?>./assets/icons/envelope.png" class="img-icon">
                                    <h6 class="font-bold ml-3 my-auto">Surat Keterangan Pemakaman
                                        <span class="badge badge bg-danger text-white"><?= $skp['jumlah'] ?></span>
                                    </h6>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>