
    <section id="services">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 col-md-offset-3 pad-bottom" data-scroll-reveal="enter from the bottom after 0.2s" data-scroll-reveal-id="4" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                <form method="POST" action="<?php echo base_url('index.php/fun_cus/getRegis');?>" >
                <h2><strong>Register</strong></h2>
                <h4>Username : <input type="text" name="user" required></h4>
                <h4>Password : <input type="text" name="pass" required></h4>
                <h4>Name : <input type="text" name="name" required></h4>
                <h4>Surname : <input type="text" name="sname" required></h4>
                <h4>E-mail : <input type="email" name="email" required></h4>
                <h4>Address : <textarea row="4" cols="30" name="Addr" required></textarea></h4>
                <h4>Tel : <input type="tel" name="Tel" required></h4>
                <input type="submit" name="regis" value="Register">
                </form>
            </div>
        </div>
    </div>
</section>

