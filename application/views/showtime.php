
<section id="services">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 col-md-offset-3 pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s" data-scroll-reveal-id="4" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                <h2><strong>Show Time</strong></h2>
                <table border="1" align="center">
                    <tr>
                        <td>Time</td>
                        <td>place</td>
                        <td></td>
                    </tr>
                    <?php
                        $sql ="select * from event_row where Event_id = $eventid";
                        $res = $this->db->query($sql);
                    foreach ($res->result() as $key) {
                        echo "<tr>";
                        echo "<td>$key->Row_date</td>";
                        echo "<td>$key->Row_place</td>";
                       echo '<td><a data-scroll-reveal="enter from the bottom after 0.6s" href="'.base_url('index.php/Welcome/showzone/'.$key->Row_ID).'" class="btn btn-danger set-bk-clr" data-scroll-reveal-id="3" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">SELECT</a></td>';
                        echo "</tr>";
                    } ?>
                </table>
            </div>
        </div>
    </div>
</section>


    	