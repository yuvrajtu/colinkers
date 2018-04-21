<?php define("TITLE","BOOKING");
include('header.php'); ?>


<!-- End Counter -->

<!-- Feedback Form -->


<div class="s-promo-block-v7 g-bg-position--center g-bg-color--dark-light" style="background: url('img/1920x1080/05.jpg') no-repeat;">
    <div class="g-container--sm g-padding-y-80--xs g-padding-y-125--xsm">
        <div class="g-text-center--xs g-margin-b-60--xs">
            <br>
            <br>
            <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">BOOKING PORTAL</h2>
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">You will be redirected to our store where you can buy tickets, accessories and other stuff.</p>
        </div>
        <div class="g-text-center--xs g-margin-b-60--xs">
            <br>

            <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">SELECT YOUR CITY </h2>
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Colinkers in association with Comedy Munch presents "SANNU KEE" book your tickets here</p>

           <div id="js__scroll-to-section">
            <form action="#" method="post">
                <select name="Color">
                    <option value='default'></option>
                    <option value="Ludhiana">Ludhiana</option>
                    <option value="Amritsar">Amritsar</option>
                    <option value="Patiala">Patiala</option>
                    <option value="Jalandhar">Jalandhar</option>

                </select>
                <input type="submit" name="submit" value="Book Now" />
            </form>
            <?php
            if(isset($_POST['submit'])){
                $selected_val = $_POST['Color'];
                echo '<br>';
                echo$selected_val;
                echo '<br>';// Storing Selected Value In Variable
                if ($selected_val=='Ludhiana')
                {
                    echo '<iframe src="https://www.meraevents.com/ticketWidget?eventId=147787&ucode=organizer&wcode=9063CD-9063CD-333333-9063CD-&theme=1" width="100%" height="600px" frameborder="0px" ></iframe>';
                }
               if($selected_val=='Patiala')
                {
                    echo '<iframe src="https://www.meraevents.com/ticketWidget?eventId=147779&ucode=organizer&wcode=9063CD-9063CD-333333-9063CD-&theme=1" width="100%" height="600px" frameborder="0px" ></iframe>';
                }
               if($selected_val=='Amritsar')
                {
                    echo '<iframe src="https://www.meraevents.com/ticketWidget?eventId=147785&ucode=organizer&wcode=9063CD-9063CD-333333-9063CD-&theme=1" width="100%" height="600px" frameborder="0px" ></iframe>';
                }
              if ($selected_val=='Jalandhar')
                {
                    echo '<iframe src="https://www.meraevents.com/ticketWidget?eventId=147771&ucode=organizer&wcode=9063CD-9063CD-333333-9063CD-&theme=1" width="100%" height="600px" frameborder="0px" ></iframe>';
                }
            }
            ?>
           </div>
    </div>
</div>



    <!-- Counter -->
    <div class="js__parallax-window" style="background: url(img/1920x1080/06.jpg) 50% 0 no-repeat fixed;">
        <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="row">
                <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--lg">
                    <div class="g-text-center--xs">
                        <div class="g-margin-b-10--xs">
                            <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">6</figure>

                        </div>
                        <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                        <h4 class="g-font-size-18--xs g-color--white">Events</h4>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--lg">
                    <div class="g-text-center--xs">
                        <figure class="g-display-block--xs g-font-size-70--xs g-color--white g-margin-b-10--xs js__counter">1000</figure>
                        <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                        <h4 class="g-font-size-18--xs g-color--white">People Involved</h4>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--sm">
                    <div class="g-text-center--xs">
                        <figure class="g-display-block--xs g-font-size-70--xs g-color--white g-margin-b-10--xs js__counter">5000</figure>
                        <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                        <h4 class="g-font-size-18--xs g-color--white">Packs of Snacks</h4>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 g-full-width--xs">
                    <div class="g-text-center--xs">
                        <div class="g-margin-b-10--xs">
                            <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">10000</figure>
                            <span class="g-font-size-40--xs g-color--white">+</span>
                        </div>
                        <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                        <h4 class="g-font-size-18--xs g-color--white">Hours Experience</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('footer.php'); ?>
