<!-- footer -->
<style>
.footer-cls {
    font-family: "Roboto", sans-serif;
    color: lightgray !important;
    background: #303069;
    overflow: hidden;

}

.footer-cls a:hover {
    text-decoration: none;
    color: yellow;
    text-shadow: -.25px -.25px 0 black,
        .25px .25px black;
}

.row-class a {
    color: lightgray;
    text-decoration: none;
    text-shadow: -.25px -.25px 0 transparent,
        .25px .25px transparent;
    margin: 0 4px;
}

.row-class p {
    line-height: 1.4;
    color: blue !important;
    font-size: 1.1em;
}

.footer-class>img {
    max-width: 100%;
    width: 100%;
    height: 100%;
}

/*footer*/

.footer-menu-heading {
    font-size: 18px;
    font-weight: 700;
    color: white;
    border-left: 4px solid #df8b3a;
    line-height: 20px;
    padding: 0px 0 0 10px;
    margin-bottom: 25px;
}

.forcontiner-bg {
    padding: 20px 20px;
    background: #131212;
    color: #999999;
    text-align: center;
}

.footer-bottom-design {
    color: #993;
    font-size: 13px;
    color: #888C8D;
}

.footer-bottom-text {
    font-size: 14px;
    color: #fff;
}

.footer-sec {
    padding: 40px 0px;
}

.footer-sec .navbar-nav {
    list-style: square;
    color: #330096;
    padding: 0px 15px;

}

.footer-sec ul li {
    font-size: 14px;
    padding: 5px 0;
    color: #0a0a0a;
}

.footer-nav-2 {
    padding: 0px 0 0 0;
    font-weight: 700;
    font-size: 14px;
    color: #222;
    max-width: 850px;
}

.footer-cls a {
    text-decoration: none;
}
.team{
    display:flex;
    justify-content:center;
    align-items:center;
    justify-content: space-between;
    flex:wrap;
    width:50%;
    color:yellow;
}
@media(max-width:437px){
    .footer-nav-2{
        font-size:0.6rem;
    }
}
@media(max-width:310px){
    .footer-nav-2{
        font-size:0.5rem;
        margin-left:0px !important;
    }
}
</style>

<footer class="footer-cls">
    <div class="container">
        <hr>
        <div class="row footer-sec row-class">
            <div class="col-md-4  col-sm-6 col-xl-4 col-lg-4 col-6">
                <div class="footer-menu-heading">Useful links</div>
                <ul id="menu-footer-menu" class="nav navbar-nav">
                    <li id="menu-item-20" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20">
                        <a href="./index.php">Home</a>
                    </li>
                    <li id="menu-item-21" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-21">
                        <a href="./about_conference.php">Conference Details</a>
                    </li>
                    <li id="menu-item-22" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22">
                        <a href="./conference_track.php">Call for Papers</a>
                    </li>
                    <li id="menu-item-23" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-23">
                        <a href="./speakers.php">Speakers</a>
                    </li>
                    <li id="menu-item-24" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-24">
                        <a href="./organizing_committee.php">Committees</a>
                    </li>
                    <li id="menu-item-25" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25">
                        <a href="./sponsors.php">Sponsorship</a>
                    </li>
                    <li id="menu-item-40" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-40">
                        <a href="./contact_us.php">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4  col-sm-6 col-xl-4 col-lg-4 col-6">
                <div class="footer-menu-heading">Contact us</div>
                <div class="footer-nav-2">
                    <p><a href="mailtp:nceesd2022@gcoeara.ac.in">nceesd2022@gcoeara.ac.in</a></p>
                </div>
            </div>

            <div class="col-md-4  col-sm-12 col-xl-4 col-lg-4 col-12">
                <div class="footer-menu-heading">Venue of the conference</div>
                <div class="footer-nav-2">
                    <p><iframe width="100%" style="border: 0;" tabindex="0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.7165875222922!2d73.96130341416743!3d18.988119959664854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdd311765784c79%3A0xc4f5ab54cf1febbb!2sGovernment%20College%20Of%20Engineering%20And%20Research%2C%20Avasari%20Khurd!5e0!3m2!1sen!2sin!4v1640411369594!5m2!1sen!2sin"
                            width="75%" height="95%" frameborder="0" allowfullscreen="allowfullscreen"
                            aria-hidden="false"></iframe></p>
                </div>
            </div>
        </div>

    </div>

    <div class="forcontiner-bg  wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer-bottom-text">National Conference on Energy and Environment for Sustainable
                        Development( NCEESD- 2022)
                        <div>
                            <div class="footer-bottom-design">
                                Developed By <a href='team.php'><btn type='btn' class='btn btn-info'>Enlectic Research Centre, GCOEARA</btn></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>