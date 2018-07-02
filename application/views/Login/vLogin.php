                        
                          <div class="col-sm-6 col-sm-offset-3">
                            <div class="form-box">
                                <div class="form-top" style="background-color: #07294E; color: #ffc600;">
                                    <div class="form-top-left">
                                        <h3 style="color: #ffc600">Login to our site</h3>
                                        <p>Enter username and password to log on:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-key"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                <?= form_open_multipart('index.php/cLogin/aksi_login') ?>
                                <?= $this->session->flashdata('msg') ?>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-nim">NIM</label>
                                            <input type="text" name="username" placeholder="NIM..." class="form-nim form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-password">Password</label>
                                            <input type="password" name="password" placeholder="Password..." class="form-password form-control" required>
                                        </div>
                                        <div class="form-group">
                                        <input name="login-signin" type="submit" class="btn btn-primary btn-lg btn-block" value="Login" style="background-color: #ffc600; color: #07294E;">
                                    <?= form_close() ?>
                                <br>
                                <div class="text-center">
                                    <p>Do you have account ? <a href="<?=base_url('index.php/cLogin/register')?>">Register</a></p>
                                </div>
                                </div>
                            </div>
                        
                            
                        </div>
                    
                    
