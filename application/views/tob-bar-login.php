<div class="navbar navbar-default navbar-fixed-top scroll-me navbar-pad-original">
       
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href=<?php echo base_url('index.php/Welcome/FirstPage');?>>
                    <img src="<?php echo base_url();?>assets/img/logo1.png">
                </a>
            </div>
            <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-left">
						<li class=""><a href=<?php echo base_url('index.php/Welcome/cash');?>>เติมเงิน</a></li>
                        <li class=""><a href=<?php echo base_url('index.php/Welcome/myticket');?>>ตั๋วของฉัน</a></li>
					</ul>
                    <?php
                    $this->db->select('*');
                    $this->db->from('customer');
                    $this->db->where('id = '.$_SESSION['id']);
                    $this->db->limit(1);
                    $re = $this->db->get();
                    $cash = $re->row();
                    ?>
                    <ul class="nav navbar-nav navbar-right">
						<li class=""><p></p>สวัสดีคุณ : <?php echo $_SESSION['username']?></li>
						<li class=""><p>&nbsp&nbsp&nbsp</p></li>
                        <li class=""><p></p> <?php echo $cash->cash ;?> ฿ </li>
                        <li class=""><p>&nbsp&nbsp&nbsp</p></li>
						<li class=""><a href=<?php echo base_url('index.php/authen/logout');?>>log out</a></li>
					</ul>
                </div>
            </div>
    	</div>