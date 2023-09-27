<?php $this->view("/header", $data); ?>
<section id="form" style="margin-top: 5px;"><!--form-->
    <div class="container">
        <div class="row" style="text-align: center;">

            <div class="col-sm-4" style="float: none; display:inline-block;">
                <div class="signup-form"><!--sign up form-->
                    <span style="font-size:14px;color:red;">
                        <?php
                        check_error(1);
                        ?>
                    </span>

                    <h2>New User Signup!</h2>
                    <form method="post">
                        <input name="name" type="text" placeholder="Name" />
                        <span style="font-size:14px;color:red;">
                            <?php
                            check_error("name");
                            ?>
                        </span>
                        <input name="email" type="email" placeholder="Email Address" />
                        <span style="font-size:14px;color:red;">
                            <?php
                            check_error("email");
                            check_error("check_email");
                            ?>
                        </span>
                        <input name="password" type="password" placeholder="Password" />
                        <span style="font-size:14px;color:red;">
                            <?php
                            check_error("password");
                            ?>
                        </span>
                        <input name="password2" type="password" placeholder="Retype Password" />
                        <span style="font-size:14px;color:red;">
                            <?php
                            check_error("password2");
                            ?>
                        </span>
                        <button type="submit" name="sub_signup" class="btn btn-default">Signup</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->

<?php $this->view("/footer", $data); ?>