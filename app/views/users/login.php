<?php require APPROOT . '/views/inc/header.php'; ?>
<style>
  body {
    background-image: url('https://c4.wallpaperflare.com/wallpaper/985/222/573/dna-depth-of-field-abstract-digital-art-wallpaper-preview.jpg');
    background-size: cover;
  }
</style>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
          <?php flash('register_success')?>
          <h2>Login</h2>
          <p>Please fill in your credentials to log in</p>
          <form action="<?php echo URLROOT; ?>/users/login" method="post">
            <div class="form-group">
              <label for="email">Email: <sup>*</sup></label>
              <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
              <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
            </div>
            <div class="form-group">
              <label for="password">Password: <sup>*</sup></label>
              <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
              <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
            </div>
            <div class="form-group">
              <input type="submit" value="Login" class="btn btn-primary btn-block">
            </div>
            <p>Don't have an account? <a href="<?php echo URLROOT; ?>/users/register">Sign up here</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
