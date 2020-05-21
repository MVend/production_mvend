<div id="main-wrapper">
    <div class="login-wrapper">
        <div class="login-flip">
            <div class="row">
                <div class="col-md-12">
                    <div class="login-box lgn-box">
                        <a href="index.html" class="logo-name text-lg text-center">
                            <span> Mamba CBS</span>
                        </a>
                        <p class="text-center">Please login into your account </p>
                        <?php echo $this->Form->create() ?>
                        <form class="m-t-md">
                            <?php echo $this->Flash->render(); ?>
                            <div class="form-group">
                                <input type="text" name="username" class="form-control input-lg m-b-sm lg-input" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control input-lg m-b-sm lg-input" placeholder="Password" required>
                            </div>
                           <!--  <div class="form-group forgotten">
                                <a href="forgot.html" class="display-block m-t-md text-sm">Forgot your password?</a>
                            </div> -->
                            <button type="submit" class="btn btn-success m-b-sm btn-block btn-lg lg-btn">Login</button>
                        </form>
                        <p class="text-center m-t-xs text-sm">&copy; 2020 Copyright Mvend Group</p>
                    </div>
                </div>
            </div><!-- Row -->
        </div><!-- login-flip -->
    </div><!-- login-wrapper -->
</div><!-- Main Wrapper -->