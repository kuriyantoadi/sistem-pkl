<?php
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "login-gagal") {
        echo "
        <div class='alert alert-danger alert-dismissible' role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'></button>
          <div class='alert-message'>
            Username dan Password Salah
          </div>
        </div>

        ";
    }elseif ($_GET['pesan'] == "belum_login") {
        echo "
        <div class='alert alert-warning alert-dismissible' role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'></button>
          <div class='alert-message'>
            Anda belum login
          </div>
        </div>

        ";
    }

    elseif ($_GET['pesan'] == "tambah-berhasil") {
       echo "
       <div class='alert alert-success alert-dismissible' role='alert'>
         <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
         <i class='fa fa-check-circle'></i>
         Tambah Data Berhasil
       </div>
       ";
    }

    elseif ($_GET['pesan'] == "edit-berhasil") {
       echo "
       <div class='alert alert-success alert-dismissible' role='alert'>
         <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
         <i class='fa fa-check-circle'></i>
         Edit Data Berhasil
       </div>
       ";
    }

    elseif ($_GET['pesan'] == "hapus-berhasil") {
       echo "
       <div class='alert alert-success alert-dismissible' role='alert'>
         <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
         <i class='fa fa-check-circle'></i>
         Hapus Data Berhasil
       </div>
       ";
    }

    elseif ($_GET['pesan'] == "industri_dibuka") {
       echo "
       <div class='alert alert-success alert-dismissible' role='alert'>
         <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
         <i class='fa fa-check-circle'></i>
        Pengajuan Prakerin Berhasil dibuka
       </div>
       ";
    }

    elseif ($_GET['pesan'] == "industri_ditutup") {
       echo "
       <div class='alert alert-success alert-dismissible' role='alert'>
         <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
         <i class='fa fa-check-circle'></i>
        Pengajuan Prakerin Berhasil ditutup
       </div>
       ";
    }

     elseif ($_GET['pesan'] == "peminjaman_ditolak") {
        echo "
        <div class='alert alert-warning alert-dismissible' role='alert'>
          <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'></button>
          <div class='alert-message'>
            Konfirmasi Tolak Peminjaman Ruangan Berhasil
          </div>
        </div>
        ";
    }

    elseif ($_GET['pesan'] == "logout") {
       echo "
       <div class='alert alert-success alert-dismissible' role='alert'>
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
         <div class='alert-message'>
           Anda Berhasil Logout
         </div>
       </div>
       ";
   }

   elseif ($_GET['pesan'] == "login-gagal") {
      echo "
      <div class='alert alert-danger alert-dismissible' role='alert'>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
        <div class='alert-message'>
          Login Gagal, Silahkan Login Lagi
        </div>
      </div>
      ";
  }

    elseif ($_GET['pesan'] == "sudah_pkl") {
       echo "
       <div class='alert alert-danger alert-dismissible' role='alert'>
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
         <div class='alert-message'>
            Maaf anda sudah mengajukan Prakerin Sebelumnya
         </div>
       </div>
       ";
   }

     elseif ($_GET['pesan'] == "pengajuan_berhasil") {
        echo "
        <div class='alert alert-success alert-dismissible' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
          <div class='alert-message'>
           Selamat, pengajuan Prakerin anda berhasil.
          </div>
        </div>
        ";
    }

    elseif ($_GET['pesan'] == "pengajuan_gagal") {
       echo "
       <div class='alert alert-danger alert-dismissible' role='alert'>
       <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
         <div class='alert-message'>
          Maaf, pengajuan Prakerin anda gagal. 
         </div>
       </div>
       ";
   }
}
?>
