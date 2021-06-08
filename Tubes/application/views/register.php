<?php
if($this->session->flashdata('message')){ 
  echo '<div class="alert alert-success">'.$this->session->flashdata('message').'</div>'; 
}
?>
<div class="container" style="position: relative; top: 100px; left: 350px;">
    <div class="row">
    <div class="col col-md-5">
        <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">
                        Create an account
                    </h4>
                </div>
                <div class="modal-body">
                     <form action="<?php echo base_url('home/register'); ?>" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Full name" name="nama">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Alamat" name="alamat">
                    <span class="glyphicon glyphicon-home form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="No hp" name="nohp">
                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Retype password" name="re-password">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                        
                        <div class="checkbox">
                            <label>
                                <input id="term" type="checkbox">
                                I have read and accepted  <a target="_blank" href="#">the terms and conditions of use.</a>
                            </label>
                        </div>
                        
                        <button type="submit" id="btnSignUp" class="btn btn-primary" style="width: 127px;">Register</button>
                    </form>
                    
                </div>
                <div class="modal-footer">
                    <small>Already a member? <a class="alreadySignUp" href="<?php echo site_url('home/loginindex') ?>">Login here</a></small>
                </div>
            </div>
            </div>
    </div>
</div>