        <h1 class="page-header"><?=$title?></h1>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                        <h4 class="panel-title"><?=$title?></h4>
                    </div>
                    <div class="panel-body">
                        <div class="col-sm-12 col-lg-12 col-md-12">
                            <div class="row-fluid">
                                <div class="col-sm-12">
                                    <a class="btn btn-default" href="<?=admin_url('blogs')?>"><i class="fa fa-arrow-left"></i> Kembali</a>
                                </div>
                            </div>
                            <div class="clearfix">&nbsp;</div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <tbody>
                                        <tr>
                                            <th class="text">Nama Lab</th>
                                            <th class="text"><?=$lab->lab_id?><span></span></th>
                                        </tr>
                                        <tr>
                                            <th class="text">Deskripsi Lab</th>
                                            <th class="text"><?=$lab->isi_id?><span></span></th>
                                        </tr>
                                        <tr>
                                            <th class="text">Gambar</th>
                                            <th class="text"><img src="<?=upload_url('lab/thumbs').(empty($lab->foto_lab) ? 'no_image.png' : $lab->foto_lab)?>" height="70" /><span></span></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-12 col-md-12">
                            <div class="row-fluid">
                                <div class="col-sm-12">
                                    <a class="btn btn-primary insert" href="<?=admin_url('laboratorium/tambah_gambar/'.$lab->id_lab)?>"><i class="fa fa-plus"></i> Tambah Gambar</a>
                                </div>
                            </div>
                            <div class="clearfix">&nbsp;</div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No.</th>
                                            <th class="text-center">Gambar <span></span></th>
                                            <th class="text-center">Keterangan<span></span></th>
                                            <!-- <th class="text-center">Tindakan</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; foreach ($gambar as $data): ?>
                                        <tr>
                                            <td class="text-center"><?=$i?></td>
                                            <td class="text-center"><img src="<?=upload_url('blogs/thumbs').(empty($data->file) ? 'no_image.png' : $data->file)?>" height="70" /></td>
                                            <td class="text-center"><?=$data->keterangan?></td>
                                            <!-- <?php if ($this->session->akses_level != 'Blocked') { ?>
                                            <td class="text-center">
                                                <a href="javascript:;" onclick="hapus_data('blogs', '<?=$data->id_gambar?>')" class="btn btn-danger btn-xs" title="Hapus"><i class="fa fa-trash-o"></i> Hapus</a>
                                            </td>
                                            <?php } else { ?>
                                            <td class="text-center"><i style="color: red;">N/A</i></td>
                                            <?php } ?> -->
                                        </tr>
                                        <?php $i++; endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-12 col-md-12">
                            <div class="row-fluid">
                                <div class="col-sm-12">
                                    <a class="btn btn-primary insert" href="<?=admin_url('laboratorium/tambah_alat/'.$lab->id_lab)?>"><i class="fa fa-plus"></i> Tambah Alat</a>
                                </div>
                            </div>
                            <div class="clearfix">&nbsp;</div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No.</th>
                                            <th class="text-center">Nama Alat <span></span></th>
                                            <th class="text-center">Jumlah<span></span></th>
                                            <th class="text-center">Spesifikasi<span></span></th>
                                            <th class="text-center">Keterangan<span></span></th>
                                            <!-- <th class="text-center">Tindakan</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; foreach ($alat as $data): ?>
                                        <tr>
                                            <td class="text-center"><?=$i?></td>
                                            <td class="text-center"><?=$data->nama_alat?></td>
                                            <td class="text-center"><?=$data->jumlah.' '.$data->satuan?></td>
                                            <td class="text-center"><?=$data->spesifikasi?></td>
                                            <td class="text-center"><?=$data->keterangan?></td>
                                            <!-- <?php if ($this->session->akses_level != 'Blocked') { ?>
                                            <td class="text-center">
                                                <a href="javascript:;" onclick="hapus_data('blogs', '<?=$data->id_gambar?>')" class="btn btn-danger btn-xs" title="Hapus"><i class="fa fa-trash-o"></i> Hapus</a>
                                            </td>
                                            <?php } else { ?>
                                            <td class="text-center"><i style="color: red;">N/A</i></td>
                                            <?php } ?> -->
                                        </tr>
                                        <?php $i++; endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
