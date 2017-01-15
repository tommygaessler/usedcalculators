<?php include('header.php');?>
        <main>
            <div class="wrapper">

                <div class="row">
                    <div class="full_column">
                        <h3 style="text-align:center;">Questions, Concerns? <br> Feel free to shoot us a message!</h3>
                    </div>
                </div>

                <form action="mail.php" method="POST">

                    <input type="text" name="name" placeholder="Name" class="test"/>

                    <input type="text" name="email" placeholder="Email" class="test"/>

                    <input name="message" rows="6" cols="25" placeholder="Message" class="testtest"></input>
                        <div class="buttonwrapper">
                            <button class="btn btn-danger button" type="submit">Send</button>
                        </div>
                </form>
            </div>
        </main>
            <div class="wrapper">
                <img class="slay" src="images/home/slay.png">
            </div>
            <?php include('footer.php');?>
