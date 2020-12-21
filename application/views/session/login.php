
<div class="login-box">
  <div class="login-logo">
    <a><b>مؤسسة خدماتي الراقية</b></a>
  </div>
  <div class="login-logo">
    تسجيل الدخول
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">أدخل  اسم المستخدم وكلمة السر</p>
    <div class="row">
        <?php if (validation_errors()) : ?>
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors() ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if (isset($error)) : ?>
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <?= $error ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <?= form_open() ?>
    <div class="form-group has-feedback">
      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row">
      <div class="col-xs-8">

      </div>
      <!-- /.col -->
      <div class="col-xs-4">
        <button type="submit" class="btn btn-primary btn-block btn-flat">الدخول</button>
      </div>
      <!-- /.col -->
    </div>
  </div>
  <!-- /.login-box-body -->
</div>
