            <div class="main-content container-fluid">
                <div class="page-title">
                    <h6><strong>Surat Keterangan Pemakaman</strong></h6>
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
                                    <form action="<?= base_url('skp/proses') ?>" method="post" enctype="multipart/form-data">
                                        <p class="text-center">Hubungan dengan yang meninggal</p>
                                        <div class="form-group">
                                            <label for="">Hubungan dengan yang meninggal <small class="text-danger">(*Harus dengan ahli waris.)</small></label>
                                            <input type="text" name="hubungan" class="form-control" value="<?= set_value('hubungan') ?>" >
                                        </div>
                                        <p class="text-center">Biodata yang meninggal</p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Nama Almarhum / Almarhumah</label>
                                                    <small class="text-danger">*Wajib !</small>
                                                    <input type="text" name="nama_alm" class="form-control"  >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Bin / Binti</label>
                                                    <small class="text-danger">*Wajib !</small>
                                                    <input type="text" name="bin" class="form-control"  >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Nik</label>
                                                    <small class="text-danger">*Wajib !</small>
                                                    <input type="number" name="nik" class="form-control"  >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Jenis Kelamin</label>
                                                    <small class="text-danger">*Wajib !</small>
                                                    <select name="kelamin" id="" class="form-control" >
                                                        <option selected disabled>Pilih Jenis Kelamin</option>
                                                        <option value="Laki-Laki">Laki - Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Tempat Lahir</label>
                                                    <small class="text-danger">*Wajib !</small>
                                                    <input type="text" name="tempat_lahir" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class=" form-group">
                                                    <label for="">Tanggal Lahir</label>
                                                    <small class="text-danger">*Wajib !</small>
                                                    <input type="date" name="tanggal_lahir" class="form-control" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class=" form-group">
                                                    <label for="">Kewarganegaraan</label>
                                                    <small class="text-danger">*Wajib !</small>
                                                    <select name="kewarganegaraan" class="form-control" id="" >
                                                        <option selected disabled>Pilih Kewarganegaraan</option>
                                                        <option value="WNI">WNI</option>
                                                        <option value="WNA">WNA</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Status Perkawinan</label>
                                                    <small class="text-danger">*Wajib !</small>
                                                    <select name="status_perkawinan" id="" class="form-control" >
                                                        <option selected disabled>Pilih Status Perkawinan</option>
                                                        <option value="Kawin">Kawin</option>
                                                        <option value="Belum Kawin">Belum Kawin</option>
                                                        <option value="Janda">Janda</option>
                                                        <option value="Duda">Duda</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="">Agama</label>
                                            <small class="text-danger">*Wajib !</small>
                                             <select name="agama" id="" class="form-control" >
                                                        <option selected disabled>Pilih Agama</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen Kawin">Kristen</option>
                                                        <option value="Katolik">Katolik</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Budha">Budha</option>
                                                    </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="">Pekerjaan</label>
                                            <small class="text-danger">*Wajib !</small>
                                            <input type="text" name="pekerjaan"  class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label for="">Alamat</label>
                                            <small class="text-danger">*Wajib !</small>
                                            <textarea name="alamat" id="" cols="30" rows="5" class="form-control" ></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Foto KTP</label>
                                            <small class="text-danger">*Wajib !</small>
                                            <input type="file" name="file_ktp" class="form-control" id="" >
                                        </div>
                                        <div class="form-group">
                                            <label for="">Foto Surat Keterangan RT/RW</label>
                                             <small class="text-danger">*Wajib !</small>
                                            <input type="file" name="file_surat_keterangan_rt_rw"  class="form-control" >
                                        </div>
                                        <p class="text-center">Telah Meninggal Dunia Pada :</p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Hari Meninggal</label>
                                                     <small class="text-danger">*Wajib !</small>
                                                    <select name="hari_meninggal" class="form-control" id="">
                                                        <option selected disabled>Pilih Hari</option>
                                                        <option value="Senin">Senin</option>
                                                        <option value="Selasa">Selasa</option>
                                                        <option value="Rabu">Rabu</option>
                                                        <option value="Kamis">Kamis</option>
                                                        <option value="Jumat">Jumat</option>
                                                        <option value="Sabtu">Sabtu</option>
                                                        <option value="Minggu">Minggu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Hari Pemakaman</label>
                                                     <small class="text-danger">*Wajib !</small>
                                                    <select name="hari_makam" class="form-control" id="">
                                                        <option selected disabled>Pilih Hari</option>
                                                        <option value="Senin">Senin</option>
                                                        <option value="Selasa">Selasa</option>
                                                        <option value="Rabu">Rabu</option>
                                                        <option value="Kamis">Kamis</option>
                                                        <option value="Jumat">Jumat</option>
                                                        <option value="Sabtu">Sabtu</option>
                                                        <option value="Minggu">Minggu</option>
                                                    </select>
                                                </div>
                                            </div>
                                           
                                          <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Tanggal Meninggal</label>
                                                     <small class="text-danger">*Wajib !</small>
                                                    <input type="date" name="tanggal_meninggal" class="form-control" value="<?= set_value('tanggal_meninggal') ?>" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Tanggal Pemakaman</label>
                                                     <small class="text-danger">*Wajib !</small>
                                                    <input type="date" name="tanggal_makam" class="form-control" value="<?= set_value('tanggal_makam') ?>" >
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Jam Meninggal</label>
                                                     <small class="text-danger">*Wajib !</small>
                                                    <input type="time" name="jam_meninggal" class="form-control" value="<?= set_value('jam_meninggal') ?>" >
                                                </div>
                                            </div>
                                             
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Jam Pemakaman</label>
                                                     <small class="text-danger">*Wajib !</small>
                                                    <input type="time" name="jam_makam" class="form-control" value="<?= set_value('jam_makam') ?>" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Tempat Meninggal</label>
                                                     <small class="text-danger">*Wajib !</small>
                                                    <input type="text" name="tempat_meninggal" placeholder="Contoh : RSUD Cilacap" class="form-control" value="<?= set_value('tempat_meninggal') ?>" >
                                                </div>
                                            </div>
                                             <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Tempat Pemakaman</label>
                                                     <small class="text-danger">*Wajib !</small>
                                                    <input type="text" name="tempat_pemakaman" placeholder="Contoh : TPU Karangduren Desa Karang" class="form-control" value="<?= set_value('tempat_pemakaman') ?>" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-20">
                                                <div class="form-group">
                                                    <label for="">Sebab Meninggal</label>
                                                     <small class="text-danger">*Wajib !</small>
                                                    <input type="text" name="sebab_meninggal" placeholder="Contoh : Sakit" class="form-control" value="<?= set_value('sebab_meninggal') ?>" >
                                                </div>
                                            </div>
                                        <div class="form-group">
                                            <label for="">Keperluan Surat</label>
                                             <small class="text-danger">*Wajib !</small>
                                            <textarea name="keperluan" class="form-control" id="" cols="30" rows="5" placeholder="Masukkan keperluan permintaan surat" ><?= set_value('keperluan') ?></textarea>
                                        </div>
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