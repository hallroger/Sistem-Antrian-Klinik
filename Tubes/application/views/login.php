<?php
if($this->session->flashdata('message')){ 
  echo '<div class="alert alert-success">'.$this->session->flashdata('message').'</div>';
}
?>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to continue to Carlota</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin" action="<?php echo base_url('home/login'); ?>" method="post">
                <input type="text" class="form-control" placeholder="Username" name="username" required autofocus>
                <input type="password" class="form-control" placeholder="Password" name="password"required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                <label class="checkbox pull-left">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" value="remember-me">
                    Remember me
                </label>
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="<?php echo base_url('home/registerindex'); ?>" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>