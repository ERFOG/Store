<!DOCTYPE html>
<html>
  <title>Pembayaran</title>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>wahyp.co.id</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="Assets/Css/bootstrap.min.css"
    />
    <link rel="stylesheet" type="text/css" href="Assets/Css/style.css" />
  </head>
  <body>
    <script src="Assets/Js/bootstrap.bundle.min.js"></script>

    <!--Awal navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#"
          ><strong>ERFOG STORE</strong></a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <form class="d-flex ms-auto my-4 my-lg-0">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Cari Barang Anda"
              aria-label="Search"
            />
            <button class="btn btn-light" type="submit">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-search"
                viewBox="0 0 16 16"
              >
                <path
                  d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"
                />
              </svg>
            </button>
          </form>

          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="homepagewhyp.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="kategoriwhyp.php">Kategori</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://wa.link/ov1xzk">Kontak</a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="produkwhyp.php"
                >Produk</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="loginn.php">Login</a>
            </li>
          </ul>

          <div class="d-grid gap-2 d-md-block me-2 ms-5 text-end">
            <button class="btn btn-dark" type="button">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="20"
                height="20"
                fill="currentColor"
                class="bi bi-person-circle"
                viewBox="0 0 20 20"
              >
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path
                  fill-rule="evenodd"
                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"
                />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar-->

    <!--halaman beli  -->

    <!-- judul halaman -->
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-12">
          <h1 class="mt-5">Pembayaran</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-7">
          <form>
            <h3 class="text-judul">Alamat Pengiriman</h3>

            <label class="w-100 mb-3">
              Alamat lengkap <br />
              <input type="text" class="form-control" />
            </label>

            <label class="w-100 mb-3">
              Provinsi <br />
              <input type="text" class="form-control" />
            </label>

            <label class="w-100 mb-3">
              Kabupaten <br />
              <input type="text" class="form-control" />
            </label>

            <label class="w-100 mb-3">
              Kode pos <br />
              <input type="number" class="form-control" />
            </label>

            <h3 class="text-judul mt-5">Kurir Pengirim</h3>
            <label class="w-100 mb-3 border rounded p-2">
              <input type="radio" name="kurir" />
              <img src="Assets/Img/kurir-2.jpg" />
              <span class="float-end">+Rp.10.000</span>
            </label>

            <label class="w-100 mb-3 border rounded p-2">
              <input type="radio" name="kurir" />
              <img src="Assets/Img/kurir-2 (1).jpg" />
              <span class="float-end">+Rp.12.000</span>
            </label>

            <h3 class="text-judul mt-5">Metode Pembayaran</h3>
            <label class="w-100 mb-3 border rounded p-2">
              <input type="radio" name="pembayaran" />
              Tranfer Bank
            </label>

            <label class="w-100 mb-3 border rounded p-2">
              <input type="radio" name="pembayaran" />
              COD
            </label>

            <label class="w-100 mb-3 border rounded p-2">
              <input type="radio" name="pembayaran" />
              gopay
            </label>

            <label class="w-100 mb-3 border rounded p-2">
              <input type="radio" name="pembayaran" />
              <img src="Assets/Img/bayar-2.jpg" />
            </label>

            <label class="w-100 mb-3 border rounded p-2">
              <input type="radio" name="pembayaran" />
              <img src="Assets/Img/bayar-3.png" />
            </label>
          </form>
        </div>

        <div class="col-md-4 offset-md-1">
          <div class="card sticky top">
            <div class="card-header bg-white">
              <h3 class="text-judul">Detail Pembayaran</h3>
            </div>
            <div class="card-body">
              <div class="row mt-3 mb-3">
                <div class="col-md">
                  <small>Sub total</small>
                  <span class="float-end">Rp.140.000</span>
                </div>
              </div>

              <div class="row mt-3 mb-3">
                <div class="col-md">
                  <small>Biaya pengiriman</small>
                  <span class="float-end">Rp.10.000</span>
                </div>
              </div>

              <div class="row mt-3 mb-3">
                <div class="col-">
                  <small>Total</small>
                  <span class="float-end">Rp.150.000</span>
                </div>
              </div>
            </div>
            <div class="card-footer bg-white">
              <button
                type="submit"
                class="btn btn-success w-100"
                onclick="openPopup()"
              >
                Bayar Sekarang
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="popup text-center" id="popup">
        <img src="Assets/Img/404-tick.png" alt="" />
        <h2>BERHASIL BAYAR</h2>
        <p>"Jangan lupa untuk membeli produk yg lainnya"</p>
        <button
          type="button"
          class="btn btn-sucess w-100"
          onclick="closePopup()"
        >
          OK
        </button>
      </div>

    </div>

    <script>
      let popup = document.getElementById("popup");

      function openPopup() {
        popup.classList.add("open-Popup");
      }
      function closePopup() {
        popup.classList.remove("open-Popup");
      }
    </script>

    <!-- footer -->


  </body>

  <footer>
    <div class="footer">
    <div class="copyright  md-4 py-3 text-center text-white bg-dark">
      <div class="container"><medium>Copyright © <a href="https://instagram.com/erfogofficialstore" class="text-white" style="text-decoration: none;"> ERFOG STORE </a> 2023</medium\></div>
  </div>
 </div>
  </footer>

</html>
