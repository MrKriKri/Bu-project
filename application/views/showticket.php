
<section id="services">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 col-md-offset-3 pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s" data-scroll-reveal-id="4" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                <h2><strong>Show seat</strong></h2>
                <table border="1" align="center">
                    <tr>
                        <td>Seat No.</td>
                        <td></td>
                    </tr>
                    <?php
                        $sql ="SELECT * FROM ticket WHERE customer_ID IS NULL AND zone_id = $zoneid";
                        $res = $this->db->query($sql);
                        $num=0;
                    foreach ($res->result() as $key) {
                        echo "<tr>";
                        echo "<td>$key->Ticket_id</td>";
                       echo '<td><a data-scroll-reveal="enter from the bottom after 0.6s" href="'.base_url('index.php/Welcome/buy/'.$key->Ticket_id).'?zoneid='.$zoneid.'" class="btn btn-danger set-bk-clr" data-scroll-reveal-id="3" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">Buy</a></td>';
                        echo "</tr>";
                        $num++;
                    }echo "</table>";
                        if($num==0){ ?>
                            <h4>Sorry,No more ticket</h4>
                            <a data-scroll-reveal="enter from the bottom after 0.6s" href="#" class="btn btn-danger set-bk-clr" data-scroll-reveal-id="3" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true" onclick="window.history.back();">Back</a>
                <?php } ?>
                
                <h4><?php echo $this->session->flashdata("nomoney");?></h4>
            </div>
        </div>
    </div>
</section>


    	