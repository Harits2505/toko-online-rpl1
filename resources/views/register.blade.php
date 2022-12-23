<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Register</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body class="bg-light">
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="card mb-4 shadow">

                            <div class="card-body">
                                <div class="pt-3 pb-1">
                                    <div class="card-title text-center pb-0 fs-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                            fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                            <path fill-rule="evenodd"
                                                d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                                        </svg>
                                    </div>
                                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>

                                </div>

                                <form class="row g-0 needs-validation" action="" method="post">
                                    @csrf
                                    <div class="col-12">
                                        <label for="yourName" class="form-label">Name</label>
                                        <div class="input-group flex-nowrap w-100">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-person-badge-fill"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z" />
                                                </svg>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Nama lengkap"
                                                aria-label="Username" aria-describedby="addon-wrapping" autofocus
                                                id="produk" autocomplete="off" name="name" value="" required
                                                maxlength="35">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                      <label for="yourEmail" class="form-label">Email</label>
                                      <div class="input-group flex-nowrap w-100">
                                          <span class="input-group-text" id="addon-wrapping">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                              <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                                            </svg>
                                          </span>
                                          <input type="text" class="form-control" placeholder="Email"
                                              aria-label="Username" aria-describedby="addon-wrapping" autofocus
                                              id="produk" autocomplete="off" name="email" value="" required
                                              maxlength="35">
                                              {{-- @error('email')
                                              <div class="invalid-feedback">
                                                {{ $message }}
                                              </div>
                                              @enderror --}}
                                      </div>
                                  </div>                                  

                                    <div class="col-12">
                                        <label for="yourPhone" class="form-label">Phone</label>
                                        <div class="input-group flex-nowrap w-100">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-telephone-fill"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                </svg>
                                            </span>
                                            <input type="number" class="form-control" placeholder="Phone"
                                                aria-label="Username" aria-describedby="addon-wrapping" autofocus
                                                id="produk" autocomplete="off" name="phone" value=""
                                                required minlength="12" maxlength="15">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourAddress" class="form-label">Alamat</label>
                                        <div class="input-group flex-nowrap w-100">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                                    <path fill-rule="evenodd"
                                                        d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                                </svg>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Alamat"
                                                aria-label="Username" aria-describedby="addon-wrapping" autofocus
                                                id="produk" autocomplete="off" name="alamat" value=""
                                                required maxlength="255">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <div class="input-group flex-nowrap w-100">
                                            <span class="input-group-text" id="addon-wrapping">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-shield-lock-fill"
                                                    viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd"
                                                        d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z" />
                                                </svg>
                                            </span>
                                            <input type="password" class="form-control" placeholder="Password"
                                                aria-label="Username" aria-describedby="addon-wrapping" autofocus
                                                id="produk" autocomplete="off" name="password" value=""
                                                maxlength="22" required>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" name="terms" type="checkbox"
                                                value="" id="acceptTerms" required>
                                            <label class="form-check-label" for="acceptTerms">Saya setuju dan menerima
                                                <a href="#">syarat dan ketentuan</a></label>
                                            <div class="invalid-feedback">You must agree before submitting.</div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-12 mt-2">
                                        <button class="btn btn-warning w-100" type="submit">Register</button>
                                    </div>
                                    <br>
                                    <div class="col-12">
                                        <p class="small mt-1">Sudah punya akun? <a href="/">Log in</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>



    <script src="/js/bootstrap.min.js"></script>
</body>

</html>
