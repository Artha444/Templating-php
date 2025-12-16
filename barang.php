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
              <div class="col-sm-6"><h3 class="mb-0">Halaman Barang</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Master Data</li>
                  <li class="breadcrumb-item active" aria-current="page">Barang</li>
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
                  <div class="card-header"><h3 class="card-title">Daftar Barang</h3></div>
                  <!-- /.card-header -->
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 10px; background-color:#679">No</th>
                          <th style="background-color:#679">Kode Barang</th>
                          <th style="background-color:#679">Nama Barang</th>
                          <th style="width: 40px; background-color:#679">Opsi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="align-middle">
                          <td>1.</td>
                          <td>KAT01</td>
                          <td>Pc</div>
                            </div>
                          </td>
                          <td><span class="badge text-bg-danger">Hapus</span></td>
                        </tr>
                        <tr class="align-middle">
                          <td>2.</td>
                          <td>KAT02</td>
                          <td>Tv</td>
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