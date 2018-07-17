
<section id="services">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 col-md-offset-3 pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s" data-scroll-reveal-id="4" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                <h2><strong>My Tickey</strong></h2>
                <table border="1" align="center">
                    <tr>
                        <td>Tickey NO.</td>
                        <td>Name</td>
                        <td>Event</td>
                        <td>Date</td>
                        <td>Place</td>
                        <td>Zone</td>
                        <td>Price</td>
                    </tr>
                 <?php 
                    $sql ='SELECT * FROM event,event_row,ticket,zone_row,customer 
                            WHERE event.Event_id = event_row.Event_id 
                            AND zone_row.Row_ID = event_row.Row_ID 
                            AND ticket.zone_id = zone_row.zone_id
                            AND customer.ID = ticket.customer_ID
                            AND ID = '.$_SESSION['id'];
                    $res = $this->db->query($sql);
                    foreach ($res->result() as $key ) {
                        echo "<tr>";
                         echo "<td>$key->Ticket_id</td>";
                        echo "<td>$key->Event_name</td>";
                        echo "<td>$key->Event_type</td>";
                        echo "<td>$key->Row_date</td>";
                        echo "<td>$key->Row_place</td>";
                        echo "<td>$key->zone_name</td>";
                        echo "<td>$key->price</td>";
                        echo "</tr>";
                    } ?> 
                </table>
            </div>
        </div>
    </div>
</section>


    	