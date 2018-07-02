                        <div class="col-sm-6 col-sm-offset-3">
                            
                            <div class="form-box">
                                <div class="form-top" style="background-color: #07294E; color: #ffc600;">
                                    <div class="form-top-left">
                                        <h3 style="color: #ffc600">Sign up now</h3>
                                        <p>Fill in the form below to get instant access:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-pencil"></i>
                                    </div>
                                </div>
                            
                            <div>
                                
                            </div>
                            <?= form_open_multipart('index.php/cLogin/tambah_user') ?>
                                <div class="form-bottom" style="outline-color:#07294E; ">
                                    <?= $this->session->flashdata('msg') ?>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-nim">NIM</label>
                                            <input type="text" name="username" placeholder="NIM.." class="form-nim form-control" id="form-nim" >
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-password">Password</label>
                                            <input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password" >
                                        </div>
                                        <input name="signin" type="submit" class="btn btn-primary btn-lg btn-block" value="Register" style="background-color: #ffc600; color: #07294E;">
                            <?= form_close() ?>
                                <br>
                                <div class="text-center">
                                    <p>If you have account, let's <a href="<?=base_url('index.php/cLogin')?>">Login</a></p>
                                </div>
                                </div>

                            </div>
                            
                            
                        </div>