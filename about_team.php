<?php
include './includes/header.php'
?>
<style>
    .org h4 {
        box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        padding: 7px;
        color: white;
        text-shadow:
            0.06em 0.07em 0 rgb(55, 56, 4),
            0.09em 0.08em 0 rgb(173, 200, 30),
            0.08em 0.09em 0 rgb(100, 70, 200);
        background-color: #000000;
        background-image: linear-gradient(147deg, #000000 0%, #04619f 74%);
        border-radius: 10px;
        width: 25%;
        margin: auto;
    }

    .org_name {
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
        /* padding: 20px; */
        width: 100% !important;
        height: 350px !important;
        margin-left: 5px;
        margin-right: 10px;
        margin: auto;
    }

    .org_name2 {
        width: 55% !important;
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

        .org h4 {
            width: 40% !important;
        }

    }

    @media(max-width: 992px) {
        .org_name {
            width: 50% !important;
            height: 350px !important;

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
            height: 350px !important;

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
            height: 350px !important;

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

        .org h4 {
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
            height: 350px !important;

        }

        .org_name2 {
            width: 90% !important;
        }

        .org h4 {
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
        /* text-align: center; */
    }
    .org-nam{
        height: 150px !important;
    }
</style>
<div class="org org2 text-center my-4 container">
    <div class="text-center">
        <h4 class="text-center">About team</h4>
    </div>
    <div style="margin: auto;">
        <div class="row my-4 text-center d-flex align-items-center justify-content-center" style="margin-left: 5px; margin-right:5px;">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="org_name my-2">
                    <img class="rounded-circle my-4" src="./images/pushkar.jpeg" alt="Generic placeholder image" width="140" height="140">
                    <h5>Pushkar Marathe</h5>
                    <p>Computer Dept.<br/>(BE 2022)</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="org_name my-2">
                    <img class="rounded-circle my-4" src="./images/snehal.jpeg" alt="Generic placeholder image" width="140" height="140">
                    <h5>Snehal Mali</h5>
                    <p> Electronics and Telecommunication Dept.<br/>(BE 2023)</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="org_name my-2">
                    <img class="rounded-circle my-4" src="./images/kishori.jpeg" alt="Generic placeholder image" width="140" height="140">
                    <h5>Kishori Jathar</h5>
                    <p>Computer Dept.<br/>(BE 2023)</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="org org2 text-center my-4 container">
    <div style="margin: auto;">
        <div class="row my-4 text-center d-flex align-items-center justify-content-center" style="margin-left: 5px; margin-right:5px;">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="org_name org-nam my-2">
                    <!-- <img class="rounded-circle my-4" src="./images/pushkar.jpeg" alt="Generic placeholder image" width="140" height="140"> -->
                    <h5  class="my-3">Twinkal Meshram</h5>
                    <p>Computer Dept.<br/>(BE 2023)</p>
                </div>
            </div>
            
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="org_name org-nam my-2">
                    <!-- <img class="rounded-circle my-4" src="./images/pushkar.jpeg" alt="Generic placeholder image" width="140" height="140"> -->
                    <h5 class="my-3">Dhananjay Katare</h5>
                    <p>Computer Dept.<br/>(BE 2024)</p>
                </div>
            </div>
            
        </div>
    </div>
</div>
<hr class="mb-4" />
