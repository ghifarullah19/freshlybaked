<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap 4.1 CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />

    <!-- Bootstrap 5.1 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- icon -->
    <link rel="icon" href="img/logo.jpg" />

    <title>Contact US | Si Apih Freshly Baked</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#"
          ><img src="img/logo.jpg" alt="" class="logo"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="/"
              >Home <span class="sr-only">(current)</span></a
            >
            <a class="nav-item nav-link" href="menu">Menu</a>
            <a class="nav-item nav-link active" href="#contact">Contact</a>
            <a class="nav-item btn btn-warning tombol" href="https://api.whatsapp.com/send/?phone=6281322123045&text&app_absent=0">Order</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
     
    <!-- contact -->
    <section id="contact">
        <div class="contact">
            <div class="container">
                <h2 class="contact-title">Contact US</h2>
                <div class="alert alert-success alert-dismissible fade show d-none" role="alert">
                    <strong>Terima Kasih!</strong> Pesan anda sudah kami terima.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                <form name="si-apih-freshly-baked">
                <div class="form-group">
                    <label for="exampleInputName1">Nama</label>
                    <input
                    type="name"
                    class="form-control"
                    id="exampleInputName1"
                    aria-describedby="nameHelp"
                    placeholder="Enter name"
                    name="nama"
                    />
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input
                    type="email"
                    class="form-control"
                    id="exampleInputEmail1"
                    placeholder="Email"
                    name="email"
                    />
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Pesan</label>
                    <textarea
                    class="form-control"
                    id="exampleFormControlTextarea1"
                    rows="3"
                    name="pesan"
                    ></textarea>
                </div>
                <button type="submit" class="btn btn-warning btn-kirim">Submit</button>
                <button class="btn btn-warning btn-loading d-none" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Loading...
                  </button>
                </form>
            </div>
        </div>
    </section>
    <!-- akhir contact -->

    <footer class="bt-footer bg-dark position-relative text-white p-4 p-lg-5">
      <div class="row">
        <div class="col">
          <img src="img/logo.jpg" class="img-fluid mb-4 rounded-circle" width="100">
          
          <p class="text-white">
            Copyright © 2022 Si Apih Freshly Backed. All Rights Reserved
          </p>

            <div class="d-inline-block mx-3">
              <a href="https://www.instagram.com/siapih_freshly_baked/">
                <div class="rounded-circle bg-dark" style="width: 32px;height: 32px;">
                  <svg class="svg-inline--fa fa-instagram fa-w-14 fa-lg fa-fw text-white position-relative" style="top: 18%;left: 15%;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg><!-- <i class="fab fa-instagram fa-lg fa-fw text-white position-relative" style="top: 18%;left: 15%"></i> Font Awesome fontawesome.com -->
                </div>
              </a>
            </div>
        </div>

        <div class="col">
          <div class="row">
            <div class="col">
                <h6 >
                  <a href="menu" class="mb-2">Menu</a>
                </h6>
                <div class="list-group list-group-flush">
                  <a href="dish-1" class="list-group-item list-group-item-action bg-transparent border-0 text-white px-0">Cake & Dessert</a>
                  <a href="dish-2" class="list-group-item list-group-item-action bg-transparent border-0 text-white px-0">Bread</a>
                  <a href="dish-3" class="list-group-item list-group-item-action bg-transparent border-0 text-white px-0">Signature</a>
                </div>
              </div>
            <div class="col">
              <h6>
                <a href="index" class="mb-2">Home</a>
              </h6>
            </div>
          </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- gsheets -->
    <script>
        const scriptURL = 'https://script.google.com/macros/s/AKfycbzO_WjmzWFddLUVYfDDhdcz-i910heao2wOpX_omQHEeTxWfszGR2NInSDIZ23PeTxQew/exec'
        const form = document.forms['si-apih-freshly-baked']
        const btnKirim = document.querySelector('.btn-kirim');
        const btnLoading = document.querySelector('.btn-loading');
        const alert = document.querySelector('.alert');
      


        form.addEventListener('submit', e => {
          e.preventDefault();
          //ketika tombol submit diklik
          //tampilkan tombol loading dan hilangkan kirim
          btnLoading.classList.toggle('d-none');
          btnKirim.classList.toggle('d-none');

          fetch(scriptURL, { method: 'POST', body: new FormData(form)})
            .then(response => {
                // tampilkan tombol kirim dan hilangkan loading
                btnLoading.classList.toggle('d-none');
                btnKirim.classList.toggle('d-none');
                // tampilkan alert
                alert.classList.toggle('d-none');
                // reset form
                form.reset();
                console.log('Success!', response);
            })
            .catch((error) => console.error('Error!', error.message))
        });
      </script>
  </body>
</html>