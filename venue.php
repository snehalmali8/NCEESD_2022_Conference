<?php 
include "main.php";
?>


<style>
.row-cls {
    margin: 2%;
    height: 80%;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;

}

.venue {
    overflow: hidden;

}

.img-venue {
    /* position: absolute;*/
    width: 100%;
    height: 100%;
    border: 0px solid;
}

.text-effect {
    color: crimson;
    box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
    padding: 6px;
    margin: 3% 0px;
    color: white;
    text-shadow:
        0.04em 0.07em 0 rgb(55, 56, 4),
        0.04em 0.08em 0 rgb(173, 200, 30),
        0.04em 0.09em 0 rgb(100, 70, 200);
    background-color: #000000;
    background-image: linear-gradient(147deg, #000000 0%, #04619f 74%);
    border-radius: 10px;
}

.map-venue {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 50vh;
    margin: 1% 2%;
    /* padding-top: ; */
    /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
}

.responsive-iframe {
    height: 90%;
    width: 70%;
}

@media(max-width: 780px) {

    .row-cls {
        height: 60%;
    }

    .img-venue {
        /* position: absolute;*/
        height: 100%;
        border: 0px solid;
    }

    .map-venue {
        /* width: 90%; */
    }

    .responsive-iframe {
        /* height: 70%;
        width: 70%; */
    }
}
</style>

<div class="container venue">
    <div class="row row-cls">

        <div class=" col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 text-center venue-left">
            <h1 class="venue-header text-effect">Venue</h1>
            <p class="venue-name">
                <br>
                Seminar Hall,
                Department of Mechanical Engineering
                Government College Of Engineering And Research, Avasari
                (Kh), Taluqa: Ambegaon, District: Pune-412405<br>
                Phone : 021 33 230 504<br>
                Email: nceesd2022@gcoeara.ac.in
            </p>
        </div>
        <div class=" col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 venue-right">
            <img class="img-venue" src="images/clg-img2.jpg">
        </div>

    </div>

    <div class=" row map-cls">
        <div class="map map-venue col-md-12 col-xl-10 col-lg-10 col-12 col-sm-12"><iframe class="responsive-iframe"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.7165875222922!2d73.96130341416743!3d18.988119959664854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdd311765784c79%3A0xc4f5ab54cf1febbb!2sGovernment%20College%20Of%20Engineering%20And%20Research%2C%20Avasari%20Khurd!5e0!3m2!1sen!2sin!4v1640411369594!5m2!1sen!2sin"
                frameborder="0"></iframe>
        </div>
    </div>
    <div class="venue-reach">
        <div class="row row-cls">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <p class="mt-3" style="color:#0362a1;font-size:1.2rem;font-weight:650">How to Reach:</p>
                <p>Government College Of Engineering And Research, Avasari
                (KH) is 62 km away from Pune via Nashik road</p>
                
                <p>Nearest Railway Station: Pune station
                <br>Nearest Airport: Lohgaon airport, Pune<br>
                Nearest Bus Stand: Manchar</p>
                
                <p class="mt-3" style="color:#0362a1;font-size:1.2rem;font-weight:650">Tourists Attaractions near Avasari(kh):</p>
                <p>Bhimashankar temple, Lenyadri, Naneghat, Lonavala, Shivneri fort, Ozar temple and many more...</p>
                
                <p class="mt-3" style="color:#0362a1;font-size:1.2rem;font-weight:650">*Accomodation:</p>
                <p>Hostel room accomodation will be provided to the participants. The hotels are also available at reasonable rate near conference venue.</p>
            </div>
        </div>
        
    </div>
</div>
<?php include "includes/footer.php"; ?>




