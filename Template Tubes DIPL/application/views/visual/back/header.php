<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><b>Carlota</b></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url('web/home'); ?>">Home</a></li>
            <li><a href="<?php echo base_url('web/doctor'); ?>">Ask The Doctor</a></li>
            <li><a href="<?php echo base_url('web/contact'); ?>">Contact Us</a></li>
            <li><a href="<?php echo base_url('web/about'); ?>">About Us</a></li>
                       <?php
            if($this->session->userdata('role') == 'Dokter'){ 
                ?>
                <li><a href="reservation/<?php echo $this->session->userdata('nid') ?>"><b>Appointment</b></a></li>
                 <?php
            }
            ?>
            <?php
            
            if($this->session->userdata('role') == 'Admin'){ 
                ?>
                <li><a href="<?php echo base_url('web/dokter'); ?>"><b>List Doctor</b></a></li>
                <?php
            }
            ?>
            <?php
            
            if($this->session->userdata('role') == 'Admin'){ 
                ?>
                <li><a href="<?php echo base_url('web/registerdoctor'); ?>"><b>Register  Doctor</b></a></li>
                <?php
            }
            ?>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown pull-right">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Hello, <?php echo $this->session->userdata('nama') ?>
        <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><b><center>You Are <?php echo $this->session->userdata('role') ?></center></b></li>
                    <li><a href="<?php echo base_url('home/logout') ?>"><button type="button" class="btn btn-danger btn-block">Logout</button></a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>