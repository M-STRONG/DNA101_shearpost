<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Welcome to our DAN101, all things related to bioinformatics.</h1>
            <p class="col-lg-10 fs-4"> Our platform is designed to shear through the complexity of bioinformatics and provide you with easily accessible and digestible information.</p>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
            <h2>Login</h2>
            <p>Please fill in your credentials to log in</p>
            <?php flash('login_success'); ?>
            <form action="<?php echo URLROOT; ?>/users/login" method="post" class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" id="floatingInput" placeholder="name@example.com" value="<?php echo isset($data['email']) ? $data['email'] : ''; ?>">
                    <label for="floatingInput">Email address</label>
                    <span class="invalid-feedback"><?php echo isset($data['email_err']) ? $data['email_err'] : ''; ?></span>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" id="floatingPassword" placeholder="Password" value="<?php echo isset($data['password']) ? $data['password'] : ''; ?>">
                    <label for="floatingPassword">Password</label>
                    <span class="invalid-feedback"><?php echo isset($data['password_err']) ? $data['password_err'] : ''; ?></span>
                </div>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
                <hr class="my-4">
                <small class="text-body-secondary">By clicking Log in, you agree to the terms of use.</small>
            </form>
            <p>Don't have an account? <a href="<?php echo URLROOT; ?>/users/register">Sign up here</a></p>
        </div>
    </div>
</div>
<div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom">New posts</h2>

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://c4.wallpaperflare.com/wallpaper/297/789/203/abstract-abstraction-biology-chemistry-wallpaper-preview.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>Earth</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>3d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://c4.wallpaperflare.com/wallpaper/1008/211/698/abstract-abstraction-biology-chemistry-wallpaper-preview.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Biology And Genetics</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>Pakistan</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>4d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://c4.wallpaperflare.com/wallpaper/645/96/47/python-programming-programming-programming-language-code-hd-wallpaper-preview.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">python in bioinformatics</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://c4.wallpaperflare.com/wallpaper/671/477/119/abstract-abstraction-biology-chemistry-wallpaper-preview.jpg" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>California</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>5d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div>
  <h2 class="text-center">important topics in bioinformatics</h2>
  <div class="d-flex gap-2 justify-content-center py-5">
  <span class="badge bg-primary-subtle text-primary-emphasis rounded-pill">Python</span>
  <span class="badge bg-secondary-subtle text-secondary-emphasis rounded-pill">Biology</span>
  <span class="badge bg-success-subtle text-success-emphasis rounded-pill">Data Analysis</span>
  <span class="badge bg-danger-subtle text-danger-emphasis rounded-pill">R Lang</span>
  <span class="badge bg-warning-subtle text-warning-emphasis rounded-pill">Ai</span>
</div>
</div>