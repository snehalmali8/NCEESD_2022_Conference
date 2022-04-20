<?php include "main.php"; ?>

<!--<link rel="stylesheet" href="css/committee_css.css">-->
<style>
    .org h3 {
        box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        padding: 7px;
        color: white;
        text-shadow:
            0.04em 0.07em 0 rgb(55, 56, 4),
            0.04em 0.08em 0 rgb(173, 200, 30),
            0.04em 0.09em 0 rgb(100, 70, 200);
        background-color: #000000;
        background-image: linear-gradient(147deg, #000000 0%, #04619f 74%);
        border-radius: 10px;
        width: 25%;
        margin: auto;
    }

    .org_name {
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
        /* padding: 20px; */
        width: 85% !important;
        height: 320px !important;
        margin-left: 5px;
        margin-right: 10px;
        margin: auto;
    }

    .org_name2 {
        width: 48% !important;
        margin: auto;
    }

    .org_name h5 {
        color: #5c5cf2;
        font-weight: bold;
    }

    .org_name p {
        font-size: 0.8rem;
        font-weight: 500;
    }
    
    @media(max-width: 1040px) {
        .org_name h5 {
            font-size: 1.2rem;
        }

        .org_name p {
            font-size: 0.7rem;
        }

        .org2 h4 {
            width: 60% !important;
        }

        .org h3 {
            width: 40% !important;
        }

    }

    @media(max-width: 992px) {
        .org_name {
            width: 50% !important;
            height: 250px !important;

        }

        .org_name2 {
            width: 70% !important;
        }

        .org_name h5 {
            font-size: 1.4rem;
        }

        .org_name p {
            font-size: 0.8rem;
        }
    }

    @media(max-width: 800px) {
        .org_name {
            width: 60% !important;
            height: 250px !important;

        }

        .org_name2 {
            width: 77% !important;
        }

        .org_name h5 {
            font-size: 1.2rem;
        }

        .org_name p {
            font-size: 0.7rem;
        }
    }

    @media(max-width: 545px) {
        .org_name {
            width: 80% !important;
            height: 250px !important;

        }

        .org_name2 {
            width: 85% !important;
        }

        .org_name h5 {
            font-size: 1rem;
        }

        .org_name p {
            font-size: 0.65rem;
        }

        .org h3 {
            width: 60% !important;
            font-size: 1.1rem;
        }

        .org2 h4 {
            width: 80% !important;
        }
    }

    @media(max-width: 410px) {
        .org_name {
            width: 90% !important;
            height: 250px !important;

        }

        .org_name2 {
            width: 90% !important;
        }

        .org h3 {
            width: 80% !important;
            font-size: 1.3rem;
        }
    }

    hr {
        height: 2px;
        border: 0;
        background-color: black;
        margin-top: 10px;
        margin-bottom: 10px;
        width: 80%;
        margin: auto;
    }
</style>


<div class="org text-center my-4">
    <div class="text-center mb-4">
        <h3 class="text-center p-2">Advisory Committee</h3>
    </div>
    <div class="row my-4 text-center" style="margin-left: 5px; margin-right:5px; margin-top:50px !important;">
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="org_name my-2">
                <img class="rounded-circle my-4" src="./images/Dr. B. B. Ahuja.jpg" alt="Generic placeholder image" width="140" height="140">
                <h5>Dr. B. B. Ahuja</h5>
                <p>Director, COEP, Pune</p>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="org_name my-2">
                <img class="rounded-circle my-4" src="./images/Dr M R Nandgaonkar.jpg" alt="Generic placeholder image" width="140" height="140">
                <h5>Dr. M. R. Nandgaonkar</h5>
                <p>Head, Mechanical, COEP, Pune</p>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="org_name my-2">
                <img class="rounded-circle my-4" src="./images/Randive.jpg" alt="Generic placeholder image" width="140" height="140">
                <h5>Dr. M. S. Randive</h5>
                <p>Head, Civil, COEP, Pune</p>
            </div>
        </div>
    </div>
</div>
<hr class="mb-4" />

<div class="org text-center my-4">
    
    <div class="row my-4 text-center" style="margin-left: 5px; margin-right:5px;">
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="org_name my-2">
                <img class="rounded-circle my-4" src="./images/Dr Rajendra Kakde.jpg" alt="Generic placeholder image" width="140" height="140">
                <h5>Dr. Rajendra Kakde</h5>
                <p></p>Advisor-I, AICTE, New 
Delhi</p>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="org_name my-2">
                <img class="rounded-circle my-4" src="./images/Dr Dadasaheb Shendage.jpg" alt="Generic placeholder image" width="140" height="140">
                <h5>Dr. Dadasaheb Shendage</h5>
                <p>Senior GM, H2e Power 
Systems Ltd., Pune</p>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="org_name my-2">
                <img class="rounded-circle my-4" src="./images/Dr. Atul Sharma.jpg" alt="Generic placeholder image" width="140" height="140">
                <h5>Dr. Atul Sharma</h5>
                <p>Professor, IIT Bombay</p>
            </div>
        </div>
    </div>
</div>
<hr class="mb-4" />

<div class="org text-center my-4">
    
    <div class="row my-4 text-center" style="margin-left: 5px; margin-right:5px;">
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="org_name my-2">
                <img class="rounded-circle my-4" src="./images/img.jpg" alt="Generic placeholder image" width="140" height="140">
                <h5>Shri B. A. N. Murthy</h5>
                <p>Program Manager, Eaton 
Fluid Power Ltd., Pune</p>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="org_name my-2">
                <img class="rounded-circle my-4" src="./images/Dr Kamal Vora.jpg" alt="Generic placeholder image" width="140" height="140">
                <h5>Dr. Kamal Vora</h5>
                <p>Emeritus Professor, COEP</p>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="org_name my-2">
                <img class="rounded-circle my-4" src="./images/Dr D R Nandanwar.jpg" alt="Generic placeholder image" width="140" height="140">
                <h5>Dr. D. R. Nandanwar</h5>
                <p>Principal, GP Avasari (Kh)</p>
            </div>
        </div>
    </div>
</div>

<hr class="mb-4" />
<div class="org text-center my-4">
    
    <div class="row my-4 text-center" style="margin-left: 5px; margin-right:5px;">
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="org_name my-2">
                <img class="rounded-circle my-4" src="./images/img.jpg" alt="Generic placeholder image" width="140" height="140">
                <h5>Shri Suhas Deshpande</h5>
                <p>ASHRAE Fellow (USA)</p>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="org_name my-2">
                <img class="rounded-circle my-4" src="./images/Dr. Yogesh Kulkarni.jpg" alt="Generic placeholder image" width="140" height="140">
                <h5>Dr. Yogesh Kulkarni</h5>
                <p>Director, Vigyan Ashram, Pabal</p>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="org_name my-2">
                <img class="rounded-circle my-4" src="./images/Dr. S. S. Thipse.jpg" alt="Generic placeholder image" width="140" height="140">
                <h5>Dr. S. S. Thipse</h5>
                <p>Deputy Director, ARAI, Pune</p>
            </div>
        </div>
    </div>
</div>

<hr class="mb-4" />

<div class="org org2 text-center">
    <div class="row my-4 org_name2">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="org_name org_name2">
                <img class="rounded-circle my-4" src="./images/Shri Sanjay Nibandhe.jpg" alt="Generic placeholder image" width="140" height="140">
                <h5>Shri Sanjay Nibandhe</h5>
                <p>Senior Deputy Director, ARAI, Pune</p>
            </div>
        </div>
    </div>
</div>

<hr class="mb-4" />

<?php include "includes/footer.php"; ?>