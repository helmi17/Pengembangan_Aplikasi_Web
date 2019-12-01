<head!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->


    <h1 class="h3 mb-2 text-gray-800">Data Siswa Les</h1>
    <p class="mb-4"></p>


    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"></h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No.Pendaftaran</th>
                <th>Jenis kelamin</th>
                <th>Paket les</th>
                <th>Jenjang</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Umur</th>
                <th>N.Bapak</th>
                <th>N.Ibu</th>
                <th>No.Hp</th>
                <th colspan="2">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($siswa->num_rows() > 0) : ?>
                <?php foreach ($siswa->result() as $p) : ?>
                  <tr>
                    <td><?php echo $p->ID_DAFTAR ?></td>
                    <td><?php echo $p->ID_JK ?></td>
                    <td><?php echo $p->ID_PAKET ?></td>
                    <td><?php echo $p->ID_JENJANG ?></td>
                    <td><?php echo $p->NAMA ?></td>
                    <td><?php echo $p->ALAMAT ?></td>
                    <td><?php echo $p->UMUR ?></td>
                    <td><?php echo $p->NAMA_BAPAK ?></td>
                    <td><?php echo $p->NAMA_IBU ?></td>
                    <td><?php echo $p->NO_HP ?></td>
                    <td> <a class="btn btn-primary" href="<?= base_url('Menu/edit/?id=' . $p->ID_DAFTAR . '&ID_JK=' . $p->ID_JK . '&ID_PAKET=' . $p->ID_PAKET . '&ID_JENJANG=' . $p->ID_JENJANG . '&NAMA=' . $p->NAMA . '&ALAMAT=' . $p->ALAMAT . '&UMUR=' . $p->UMUR .
                                                                '&NAMA_BAPAK=' . $p->NAMA_BAPAK . '&NAMA_IBU=' . $p->NAMA_IBU . '&NO_HP=' . $p->NO_HP); ?>">Edit</a>
                    </td>
                    <td><a class="btn btn-danger" href="<?= base_url('Menu/delete/' . $p->ID_DAFTAR); ?>">Delete</a></td>
                  </tr>
                <?php endforeach; ?>

              <?php endif; ?>

              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->


  <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

  </div>

  </div>
  <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->