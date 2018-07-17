<div class="navbar navbar-default navbar-fixed-top scroll-me navbar-pad-original">
       
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo1.png" >
                </a>
            </div>	
            <form action="<?php echo base_url('index.php/authen/login');?>" method="POST">
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                    	<li class=""><a href="<?php echo base_url('/index.php/Welcome/Regis');?>">Register</a></li>
                        <li class=""><p></p>Username <input type="text" name="username"><p><?php echo $this->session->flashdata("error") ?></p></li>
                        <li class=""><p></p>Password <input type="password" name="password"></li>
                         <li class=""><p></p><input type="submit" name="login" value="Login"></li>
                    </ul>
                </div>
            </form>
        </div>
    </div>