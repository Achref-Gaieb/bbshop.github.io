<?php require('tpl/header.html'); ?>
<div class="row">
    <div class="col-lg-6 mx-auto">
      <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
        <form role="form" action="loginFunction.php" method="post">
          
          <div class="p-3 p-lg-5 border">
            <div class="form-group">
              <div class="col-md-12">
                <label for="login" class="text-black">identifiant <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="login" placeholder="mail" name="login">
              </div>
              <div class="col-md-12">
                <label for="password" class="text-black">mot de passe <span class="text-danger">*</span></label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
             

  
                <div class="mx-auto" style="margin-top: 30px">
                  <div class="col-lg-8">
                    <input type="submit" name="Envoyer" class="btn btn-primary btn-lg btn-block" value="Envoyer">
                  </div>
                </div>
            </div>
          </div>
        </form>
      </div>
</div>
<?php require('tpl/footer.html'); ?>