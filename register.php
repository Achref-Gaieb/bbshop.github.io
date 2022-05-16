<?php require('tpl/header.html'); ?>
<div class="row">
    <div class="col-lg-6  my-5 mx-auto">
      <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
        <form role="form" action="registerFunction.php" method="post">
          
          <div class="p-3 p-lg-5 border">
            <div class="form-group">
              <div class="col-md-12">
                <label for="firstname" class="text-black">nom <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="firstname" placeholder="firstname" name="firstname" required>
              </div>
              <div class="col-md-12">
                <label for="lastname" class="text-black">prénom <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="lastname" placeholder="lastname" name="lastname" required>
              </div>
              <div class="col-md-12">
                <label for="mail" class="text-black">mail <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="mail" placeholder="mail" name="mail" required>
              </div>
              <div class="col-md-12">
                <label for="password" class="text-black">mot de passe <span class="text-danger">*</span></label>
                <input type="password" class="form-control" id="password" name="password" required>
              </div>
              <div class="col-md-12">
                <label for="numbers" class="text-black">numéro <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="numbers" name="numbers" required>
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