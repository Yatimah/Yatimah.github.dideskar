            <div class="main-content container-fluid">
                <div class="page-title">
                    <h6><strong>Surat Keterangan Domisili</strong></h6>
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="btn-group">
                                <a href="<?= base_url('list-surat') ?>" class="btn btn-warning btn-sm mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                    </svg> Kembali</a>
                            </div>
                            <div class="card ml-5 mr-5">
                                <div class="card-body">
                                    <form action="<?= base_url('skd/proses') ?>" method="post" enctype="multipart/form-data">
                                        <?php foreach ($data as $d) { ?>
                                           
                                            <div class="form-group">
                                                <label for="">Nama</label>
                                                 <small class="text-danger">*Wajib !</small>
                                                <input type="text" name="nama" class="form-control" value="<?= $d->nama ?>"
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nik</label>
                                                 <small class="text-danger">*Wajib !</small>
                                                <input type="text" name="nik" class="form-control" value="<?= $d->nik ?>"
                                            </div>
                                             <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Tempat Lahir</label>
                                                    <small class="text-danger">*Wajib !</small>
                                                    <input type="text" name="tempat_lahir" class="form-control" value="<?= set_value('tempat_lahir') ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class=" form-group">
                                                    <label for="">Tanggal Lahir</label>
                                                    <small class="text-danger">*Wajib !</small>
                                                    <input type="date" name="tanggal_lahir" class="form-control"  required>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="form-group">
                                                <label for="">Alamat</label>
                                                <small class="text-danger">*Wajib !</small>
                                                <textarea name="alamat" id="" cols="30" rows="5" class="form-control" required></textarea>
                                            </div>
                                            
                                            </br>
                                            <h7><strong>Alamat Domisili Sebelumnya</strong></h7></br></br>
                                            
                                            
                                            <div class="form-group">
                                                <label for="">Alamat Domisili</label>
                                                <small class="text-danger">*Wajib !</small>
                                                <textarea name="alamat_lama" id="" cols="30" rows="5" class="form-control" required></textarea>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                <label for="">Mulai sejak</label>
                                                 <small class="text-danger">*Wajib !</small>
                                                <input type="date" name="mulai" class="form-control" >
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="">Foto KTP</label>
                                                <small class="text-danger">*Wajib. JPG|PNG</small>
                                                <input type="file" name="file_ktp"  class="form-control" id="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Foto Surat keterangan rt/rw</label>
                                                <small class="text-danger">*Wajib. JPG|PNG</small>
                                                <input type="file" name="file_surat_keterangan_rt_rw"  class="form-control">
                                            </div>
                                        <?php } ?>
                                        <div class="form-group">
                                            <button class="btn btn-block btn-primary btn-sm" type="submit"><b>Kirim Permohonan Surat</b> <i class="bi bi-send-fill"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>