<!-- Begin Page Content -->
<div class="col-sm-10 container-fluid">
    <?= $this->session->flashdata('message'); ?>
    <form action="<?= base_url('user/daftarles') ?>" method="POST">
        <div class="">
            <br>
            <h2 align="center">Form Pendaftaran Les LBBCI</h2>
            <br>
        </div>
        <div class="form-group row">
            <label for="inputNama" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Umur</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="umur" name="umur" placeholder="Umur">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Bapak</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="bapak" name="bapak" placeholder="Nama Bapak">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Ibu</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="ibu" name="ibu" placeholder="Nama Ibu">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">No HP</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="nohp" name="nohp" placeholder="No HP">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="jk" name="jk" placeholder="Jenis Kelamin">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Jenjang</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="jenjang" name="jenjang" placeholder="Jenjang">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-3 col-form-label">Paket Les</label>
            <div class="col-sm-7">
                <input type="text" class="form-control" id="paket" name="paket" placeholder="Paket Les">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">REGISTRASI</button>
            </div>
        </div>
    </form>
</div>
</div>