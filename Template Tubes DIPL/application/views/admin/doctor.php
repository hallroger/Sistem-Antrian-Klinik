<br>
<div class="pull-right">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit1">Add Doctor</button>
</div>
<h2 style="margin-top: 0;margin-bottom: 0; text-align: center;">Doctor</h2>
<div class="clearfix"></div>
<br>

<table class="table table-bordered" id="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Id Doctor</th>
            <th>Name</th>
            <th>Address</th>
            <th>Specialist</th>
            <th>Photo</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach ($data as $d ) {?>
            <tr>
                <form action="">
                    <td>
                        <?php echo $no++ ?>
                    </td>
                    <td>
                        <?php echo $d->nid ?>
                    </td>
                    <td>
                        <?php echo $d->nama ?>
                    </td>
                    <td>
                        <?php echo $d->alamat ?>
                    </td>
                    <td>
                        <?php echo $d->nama_spesialis ?>
                    </td>
                    <td>
                        <img src="<?=base_url()?>assets/ava/<?=$d->foto?>" style="width:150px; height:150px;" alt="foto">
                    </td>
                    <td>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $d->nid ?>">Edit
                        </button>
                    </td>
                    <td><a type="button" class="btn btn-danger" href="<?php echo base_url('web/hapusdokter/'.$d->nid); ?>" onClick="return confirm('Are you sure to delete this?')">Delete</a></td>
                </form>
            </tr>
            <?php } ?>
    </tbody>
</table>
</div>
</div>


<?php $no=1; foreach ($data as $d ) {?>
    <div class="modal fade" id="edit<?php echo $d->nid ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <center>
                        <h2>Edit Doctor Data</h2></center>
                </div>
                <div class="modal-body">
                    
                    <form method="post" action="<?php echo base_url('web/editdokter/'); ?>" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" id="formGroupExampleInput" placeholder="Nid" name="nid" value="<?php echo $d->nid ?>" required>
                        <div class="form-group">
                            <label for="formGroupExampleInput">Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" name="nama" value="<?php echo $d->nama ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Address</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Alamat" name="alamat" value="<?php echo $d->alamat ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2">Specialist</label>
                            <select class="form-control" id="formGroupExampleInput2" name="id_spesialis" required>
                                <?php foreach ($dataJ as $c ): ?>
                                    <option value="<?php echo $c->id_spesialis; ?>">
                                        <?php echo $c->nama_spesialis;  ?>
                                    </option>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><b>Profile Picture<b></span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="foto" name="foto" accept='image/*' required>
                                <label class="custom-file-label text-left" for="foto">Choose file</label>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <input type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
                </div>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>

        
        <div class="modal fade" id="edit1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <center>
                            <h2>Add Doctor Data</h2></center>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?php echo base_url('web/tambahdokter/'); ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="formGroupExampleInput">NID</label>
                                <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Nid" name="nid" required>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Name</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Address</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Address" name="alamat" required>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Specialist</label>
                                <select class="form-control" id="formGroupExampleInput2" name="id_spesialis" required>
                                    <?php foreach ($dataJ as $c ): ?>
                                        <option value="<?php echo $c->id_spesialis; ?>">
                                            <?php echo $c->nama_spesialis;  ?>
                                        </option>
                                        <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Profile Picture</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto" name="foto" accept='image/*' required>
                                    <label class="custom-file-label text-left" for="foto">Choose file</label>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <input type="submit" class="btn btn-primary" id="hapus" value="Submit" placeholder="Simpan">
                        </form>
                    </div>
                </div>
                </form>
            </div>
        </div>
        </div>
        </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#table').DataTable();
            });
        </script>
        <br><br>
        <br><br>
        <br><br>