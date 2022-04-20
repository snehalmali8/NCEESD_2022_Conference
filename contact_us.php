<?php include "main.php"; ?>
<!-- <link rel="stylesheet" href="css/committee.css"> -->
<style>
.heading {
    border: 0px solid black;
    color: white;
    text-shadow:
        0.04em 0.07em 0 rgb(55, 56, 4),
        0.04em 0.08em 0 rgb(173, 200, 30),
        0.04em 0.09em 0 rgb(100, 70, 200);
    background-color: #000000;
    background-image: linear-gradient(147deg, #000000 0%, #04619f 74%);
    border-radius: 10px;
    margin: auto;
    box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
    font-weight: 750;
    width: 49%;
    font-size: 35px;
    padding-top: 5px;
}

.card-left>div {
        color: #3434f7;
        font-weight: 750;
        font-size: 20px;
    }

    .card-left>div>p {
        color: #5c5cf2;
        font-weight: 500;


    }

    .card-left>p {
        color: black;
        font-weight: 400;
    }

    .card-class {
        /* height: 60%; */
        margin: 3%;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
        height: 350px;

    }

    .card-left {
        padding: 10px;
    }

    .card-left .card-text {
        font-weight: 600;
        font-size: 1rem;
    }

    .card-left .committee-desc {
        font-size: 0.7rem;
    }

    .card-bottom .institute {
        font-size: 0.6rem;
        font-weight: 600;
    }

    .card-bottom .mail {
        color: #3434f7;
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

/* for map  */
.contact-frame {
    width: 75%;
    height: 33vh;
    box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
    
}

.frame-content {
    height: 26vh;
}

.content1-venue {
    /* height: 30vh; */
    color: black;
    margin-bottom: 0px;
}

.content2-venue {
    /* height: 30vh; */
}

.frame-map {
    width: 90%;
    height: 100%;

}
.clg-details{
    font-weight:400 !important;
    font-size:0.8rem;
}

@media(max-width:1145px) {
    /* map  */
    .contact-frame {
        width: 83%;
        height: 33vh;
    }

    .content1-venue {
        margin-bottom: 0px;
        font-size: 15px ! important;
        font-weight: 470 !important;
    }
}

@media(max-width:775px) {
    /* map  */
    .contact-frame {
        width: 89%;
        height: 32vh;
    }

    .content1-venue {
        font-size: 13px ! important;
        font-weight: 480 !important;
    }
}

@media(max-width:549px) {
        hr{
            margin-top: 7px;
            margin-bottom: 7px;
        }
    /* map  */
    .contact-frame {
        width: 95%;
        height: 27vh;
        margin-bottom: 30px;

    }

    .frame-content {
        height: 28vh;
    }

    .content1-venue {
        font-size: 11px ! important;
        font-weight: 460 !important;
    }
}

 @media(max-width: 450px) {
        .heading {
            width: 70%;
            font-size:1.4rem;
        }
        hr{
            margin-top: 5px;
            margin-bottom: 5px;
        }
        .clg-details{
        font-weight:400 !important;
        font-size:0.7rem;
        
    }
        
}

@media(max-width: 350px) {
            .heading{
                font-size: 1.2rem;
                width: 80%;
            }
             hr{
            margin-top: 0px;
            margin-bottom: 0px;
        }
    }
@media(max-width:345px) {
    /* map  */
    .contact-frame {
        height: 26vh;
    }

    .frame-content {
        height: 27vh;
    }

    .content1-venue {
        font-size: 8px ! important;
        font-weight: 460 !important;
    }
}

@media(max-width:289px) {
    .content1 {
        width: 100%;
    }

    .card-left>div {
        font-size: 6px;
        font-weight: 585 !important;

    }

}
</style>
<div class="container main my-1">
    <div class="heading text-center my-4">
        <p class="head1">Contact Details</p>
    </div>

    <div class="contact-frame mb-4">
        <div class="row frame-content p-2">
            <div class="content1-venue col-lg-6 col-md-6 col-sm-6 col-6">
                <p class="clg-details">
                    <strong>Government College Of Engineering And Research, Avasari Khurd, Taluka-Amegaon, Pune , Maharashtra,
                    India</strong>
                </p>

                <p>Phone : 021 33 230 504
                <br/>
                Email : nceesd2022@gcoeara.ac.in
                </p>

                
            </div>
            <div class="content2-venue col-lg-6 col-md-6 col-sm-6 col-6">
                <p><iframe class="responsive-iframe1 frame-map p-0 m-0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.7165875222922!2d73.96130341416743!3d18.988119959664854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdd311765784c79%3A0xc4f5ab54cf1febbb!2sGovernment%20College%20Of%20Engineering%20And%20Research%2C%20Avasari%20Khurd!5e0!3m2!1sen!2sin!4v1640411369594!5m2!1sen!2sin"
                        width="80%" height="100%" frameborder="0"></iframe></p>
            </div>
        </div>
    </div>
        <hr/>

    <div class="main container my-4">

    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="content1 m-1">
                <div class="row card-class">
                    <div class=" col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                        <div class="card-left">
                            <div class="title" style="font-size: 0.7rem;">
                                <p>FOR GENERAL QUERIES
                                    ORGANIZING SECRETARY</p>
                            </div>
                            <p class="card-text mb-auto committee-name">Dr.Chandrashekhar M. Sewatkar
                            </p>
                            <p class="mb-auto committee-desc">Associate Professor, Department of Mechanical Engineering
                                .</p>
                        </div>
                    </div>
                    <div class=" col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                        <div class="card-right my-2">
                            <img class="img-responsive img-tag" src="images/Dr Sewatkar_Organizing Sectretary.jpg" style="width:100%; height:80%;">
                        </div>
                    </div>
                    <hr />
                    <div class="container card-bottom text-center">
                        <p class="institute" style="color:black;">Government College of Engineering and Research Avasari (kh), <br />Taluka Ambegaon, District: Pune-412405, India.
                        <br /><strong style="color: #3434f7;font-size:0.7rem;">Phone: 9422521375</strong>
                            <br /><strong style="color: #3434f7;font-size:0.7rem;">Email: cmsewatkar.mech@gcoeara.ac.in</strong>
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="content1 m-1">
                <div class="row card-class">
                    <div class=" col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                        <div class="card-left">
                            <div class="title" style="font-size: 0.7rem;">
                                <p>FOR PAPER SUBMISSION
                                    JOINT ORGANIZING SECRETARY</p>
                            </div>
                            <p class="card-text mb-auto committee-name">Dr. Swapnil Kharmale
                            </p>
                            <p class="mb-auto committee-desc">Assistant Professor, Department of Civil Engineering
                                .</p>
                        </div>
                    </div>
                    <div class=" col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                        <div class="card-right my-2">
                            <img class="img-responsive img-tag" src="images/S.B.kharmale.jpg" style="width:100%; height:80%;">
                        </div>
                    </div>
                    <hr />
                    <div class="container card-bottom text-center">
                        <p class="institute" style="color:black;">Government College of Engineering and Research Avasari (kh), <br />Taluka Ambegaon, District: Pune-412405, India.
                            <br /><strong style="color: #3434f7;font-size:0.7rem;">Phone: 8308456141</strong>
                            <br /><strong style="color: #3434f7;font-size:0.7rem;">Email: sbkharmale.civil@gcoeara.ac.in

                            </strong>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main container my-0">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12" style="margin:auto;">
            <div class="content1 m-1">
                <div class="row card-class">
                    <div class=" col-xl-9 col-lg-9 col-md-8 col-sm-8 col-8">
                        <div class="card-left">
                            <div class="title" style="font-size: 0.7rem;">
                                <p>FOR REGISTRATION
                                    TREASURER</p>
                            </div>
                            <p class="card-text mb-auto committee-name">Dr. S. V. Kshirsagar

                            </p>
                            <p class="mb-auto committee-desc">Associate Professor Department of Mechanical Engineering

                                .</p>
                        </div>
                    </div>
                    <div class=" col-xl-3 col-lg-3 col-md-4 col-sm-4 col-4">
                        <div class="card-right my-2">
                            <img class="img-responsive img-tag" src="images/S.V.kshirsagar.jpg" style="width:100%; height:80%;">
                        </div>
                    </div>
                    <hr />
                    <div class="container card-bottom text-center">
                        <p class="institute" style="color:black;">Government College of Engineering and Research Avasari (kh), <br />Taluka Ambegaon, District: Pune-412405, India.
                            <br /><strong style="color: #3434f7;font-size:0.7rem;">Phone: 8805325726</strong>
                            <br /><strong style="color: #3434f7;font-size:0.7rem;">Email: svkshirsagar.mech@gcoeara.ac.in
                            </strong>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr/>
</div>
<?php include "includes/footer.php"; ?>