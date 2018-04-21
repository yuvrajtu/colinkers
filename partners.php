<?php define("TITLE","PARTNERS");
include('header.php'); ?>


<div class="g-bg-color--primary">
    <div class="container g-padding-y-125--xs">
        <div class="g-padding-y-50--xs">
            <h2 class="g-font-size-35--xs g-font-size-55--sm g-font-size-70--lg g-color--white-opacity">Our partners</h2>
            &nbsp;

            <div class="w3-content w3-display-container" style="max-width:100%"><img alt="image" border="20px" class="mySlides" src="slide2.jpg" style="width:100%" />
                <img border="20px" class="mySlides" src="slide4..jpg" style="width:100%" />

                <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">❮</div>

                    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">❯</div>
                    <span class="w3-badge demo w3-border w3-black w3-hover-white" onclick="currentDiv(1)"></span>
                    <span class="w3-badge demo w3-border w3-black w3-hover-white" onclick="currentDiv(2)"></span>

                </div>
            </div>
            <script>
                var slideIndex = 1;
                showDivs(slideIndex);

                function plusDivs(n) {
                    showDivs(slideIndex += n);
                }

                function currentDiv(n) {
                    showDivs(slideIndex = n);
                }

                function showDivs(n) {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    var dots = document.getElementsByClassName("demo");
                    if (n > x.length) {slideIndex = 1}
                    if (n < 1) {slideIndex = x.length}
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" w3-white", "");
                    }
                    x[slideIndex-1].style.display = "block";
                    dots[slideIndex-1].className += " w3-white";
                }


                var myIndex = 0;
                carousel();

                function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    myIndex++;
                    if (myIndex > x.length) {myIndex = 1}
                    x[myIndex-1].style.display = "block";
                    setTimeout(carousel, 5000); // Change image every 5 seconds
                }

            </script></div>
    </div>
</div>
<?php include('footer.php'); ?>
