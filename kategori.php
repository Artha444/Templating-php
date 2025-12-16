<?php
include('templates/header.php')
?>
<!--begin::App Main-->
      <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-sm-6"><h3 class="mb-0">Halaman Kategori</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Master Data</li>
                  <li class="breadcrumb-item active" aria-current="page">Kategori</li>
                </ol>
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-12">
                <!-- Default box -->
                <div class="card mb-4">
                  <div class="card-header"><h3 class="card-title">Daftar Kategori</h3></div>
                  <!-- /.card-header -->
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 10px; background-color:cadetblue">No</th>
                          <th style="background-color:cadetblue">Kode Kategori</th>
                          <th style="background-color:cadetblue">Nama Barang</th>
                          <th style="width: 40px; background-color:cadetblue">Opsi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="align-middle">
                          <td>1.</td>
                          <td>SKO01</td>
                          <td>Kulkas</div>
                            </div>
                          </td>
                          <td><span class="badge text-bg-danger">Hapus</span></td>
                        </tr>
                        <tr class="align-middle">
                          <td>2.</td>
                          <td>SKO02</td>
                          <td>Buah</td>
                          <td><span class="badge text-bg-danger">Hapus</span></td>
                        </tr>
                      </tbody>
                    </table>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::App Content-->
      </main>
      <!--end::App Main-->
<?php
include('templates/footer.php')
?>