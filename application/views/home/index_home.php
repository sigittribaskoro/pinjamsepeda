<div class="konten">
    	<div class="slider"><img src="<?php echo base_url(); ?>assets/images/banner-IA.png" width="624" height="326"></div>
        <div class="anggota">
          <h3>Login Administrator</h3>
          <?php echo validation_errors(); ?>
          <form name="form2" method="POST" action="<?php echo base_url(); ?>admin/login/validasi">
            <p>
              <label for="username">Username</label>
              <input type="text" name="username" id="username" placeholder="Username" required autofocus>
            </p>
            <p>
              <label for="password">Password</label>
              <input type="password" name="password" id="password" placeholder="Password" required autofocus>
            </p>
            <p>
              <input type="submit" name="submit2" id="submit2" value="Masuk">
              <input type="reset" name="submit3" id="submit3" value="Reset">
            </p>
          </form>
      </div>
</div>
