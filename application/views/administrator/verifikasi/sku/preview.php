            <div class="main-content container-fluid">
                <div class="page-title">
                    <h4>Preview Surat Keterangan Usaha</h4>
                </div>
                <a href="<?= base_url('verifikasi-surat-keterangan-usaha') ?>" class="btn btn-primary btn-sm mb-2"><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive overflow-auto">
                                        <table class="table" style="width:100%">
                                            <?php foreach ($datas as $data) { ?>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td>:</td>
                                                    <td><?= $data->nama ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Nik</td>
                                                    <td>:</td>
                                                    <td><?= $data->nik ?></td>
                                                </tr>
                                                <tr>
            										<td>TTL</td>
            										<td>:</td>
            										<td><?= $data->tempat_lahir ?>, <?= $data->tanggal_lahir ?></td>
            									</tr>
                                                <tr>
                                                    <td>Jenis Kelamin</td>
                                                    <td>:</td>
                                                    <td><?= $data->jekel ?></td>
                                                </tr>
                                                 <tr>
                                                    <td>Alamat</td>
                                                    <td>:</td>
                                                    <td><?= $data->alamat?></td>
                                                </tr>
                                                <tr>
            										<td>Kewarganegaraan</td>
            										<td>:</td>
            										<td><?= $data->kewarganegaraan ?></td>
            									</tr>
            									<tr>
            										<td>Pekerjaan</td>
            										<td>:</td>
            										<td><?= $data->pekerjaan ?></td>
            									</tr>
                                                <tr>
                                                    <td>Nama Usaha</td>
                                                    <td>:</td>
                                                    <td><?= $data->nama_usaha ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat Usaha</td>
                                                    <td>:</td>
                                                    <td><?= $data->alamat_usaha?></td>
                                                </tr>
                                                <p>Surat</p>
                                                <tr>
                                                    <td>Keperluan</td>
                                                    <td>:</td>
                                                    <td><?= $data->keperluan ?></td>
                                                </tr>
                                                    <tr>
                                                    <td>File KTP</td>
                                                    <td>:</td>
                                                    <td>
                                                        <img src="<?= base_url('./assets/file_ktp/') . $data->file_ktp ?>" class="img-thumbnail">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>File Surat Keterangan RT RW</td>
                                                    <td>:</td>
                                                    <td>
                                                        <img src="<?= base_url('./assets/file_surat_keterangan_rt_rw/').$data->file_surat_keterangan_rt_rw ?>" class="img-thumbnail">
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>