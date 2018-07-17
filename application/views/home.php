
<section id="services">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 col-md-offset-3 pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s" data-scroll-reveal-id="4" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                <h2><strong>Event</strong></h2>
                <table border="1" align="center">
                    <tr>
                        <td>Name</td>
                        <td>Event</td>
                        <td></td>
                    </tr>
                <?php 
                    $sql ="SELECT * FROM event ";
                    $res = $this->db->query($sql);
                    foreach ($res->result() as $key ) {
                        echo "<tr>";
                        echo "<td>$key->Event_name</td>";
                        echo "<td>$key->Event_type</td>";
                        echo '<td><a data-scroll-reveal="enter from the bottom after 0.6s" href="'.base_url('index.php/Welcome/showRow/'.$key->Event_id).'" class="btn btn-danger set-bk-clr" data-scroll-reveal-id="3" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">SELECT</a></td>';
                        echo "</tr>";
                    } ?>
                </table>
            </div>
        </div>
    </div>
</section>


    	