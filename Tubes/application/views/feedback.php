#Reuse Add Doctor Page
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
                        Feedback Sistem
                    </h4>
                </div>
                <div class="modal-body">
                     <form action="<?php echo base_url('home/feedback'); ?>" method="post">
                    <input type="hidden" class="form-control" placeholder="Role" name="role" value="Feedback"> #assign ke DB
                     <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Nama" name="nama">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <textarea name=" Feedback" rows="8" cols="40"></textarea>
                    <span class="glyphicon glyphicon-home form-control-feedback"></span>
                </div>
                 
                        <button type="submit" id="btnSignUp" class="btn btn-primary" style="width: 127px;">Submit</button>
                    </form>
                    
                </div>
            </div>
            </div>
    </div>
</div>