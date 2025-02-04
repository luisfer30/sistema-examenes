<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Formulario <?= $judul ?></h3>
        <div class="box-tools pull-right">
            <a href="<?= base_url('mahasiswa') ?>" class="btn btn-sm btn-flat btn-primary">
                <i class="fa fa-arrow-left"></i> Cancelar
            </a>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <?= form_open('mahasiswa/save', array('id' => 'mahasiswa'), array('method' => 'edit', 'id_mahasiswa' => $mahasiswa->id_mahasiswa)) ?>
                <div class="form-group">
                    <label for="nim">Cédula</label>
                    <input value="<?= $mahasiswa->nim ?>" autofocus="autofocus" onfocus="this.select()" placeholder="NIM" type="text" name="nim" class="form-control">
                    <small class="help-block"></small>
                </div>
                <div class="form-group">
                    <label for="nama">Nombre</label>
                    <input value="<?= $mahasiswa->nama ?>" placeholder="Nombre" type="text" name="nama" class="form-control">
                    <small class="help-block"></small>
                </div>
                <div class="form-group">
                    <label for="email">Correo</label>
                    <input value="<?= $mahasiswa->email ?>" placeholder="Correo" type="email" name="email" class="form-control">
                    <small class="help-block"></small>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Género</label>
                    <select name="jenis_kelamin" class="form-control select2">
                        <option value="">-- Seleccionar --</option>
                        <option <?= $mahasiswa->jenis_kelamin === "M" ? "selected" : "" ?> value="M">Male</option>
                        <option <?= $mahasiswa->jenis_kelamin === "F" ? "selected" : "" ?> value="F">Female</option>
                    </select>
                    <small class="help-block"></small>
                </div>
                <div class="form-group">
                    <label for="jurusan">Departmento</label>
                    <select id="jurusan" name="jurusan" class="form-control select2">
                        <option value="" disabled selected>-- Seleccionar --</option>
                        <?php foreach ($jurusan as $j) : ?>
                            <option <?= $mahasiswa->id_jurusan === $j->id_jurusan ? "selected" : "" ?> value="<?= $j->id_jurusan ?>">
                                <?= $j->nama_jurusan ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                    <small class="help-block"></small>
                </div>
                <div class="form-group">
                    <label for="kelas">Clase</label>
                    <select id="kelas" name="kelas" class="form-control select2">
                        <option value="" disabled selected>-- Seleccionar --</option>
                        <?php foreach ($kelas as $k) : ?>
                            <option <?= $mahasiswa->id_kelas === $k->id_kelas ? "selected" : "" ?> value="<?= $k->id_kelas ?>">
                                <?= $k->nama_kelas ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                    <small class="help-block"></small>
                </div>
                <div class="form-group pull-right">
                    <button type="reset" class="btn btn-flat btn-danger"><i class="fa fa-rotate-left"></i> Resetear</button>
                    <button type="submit" id="submit" class="btn btn-flat bg-green"><i class="fa fa-save"></i> Guardar</button>
                </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url() ?>assets/dist/js/app/master/mahasiswa/edit.js"></script>