<?php include "includes/header.php"; ?>
<style>
.header-1 {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;

}

/*changes added later*/
.move_text1 {
    width: 70px;
    height: 40px;
    position: absolute;
    /* margin: 4%; */
    /* margin-bottom: 20px !important; */
    padding: 2%;
}

.cloud1 {
    color: white;
    font-weight: 600;
    z-index : 100;
    animation: drift 14s linear infinite;
    background-color: transparent;
    /* border: 2px solid blue; */
    padding-left: 2%;
    margin-bottom: 20px !important;
}
/*.inner-cloud {*/
/*    animation: effect1 3s linear infinite;*/
/*}*/

@keyframes drift {
    from {
        transform: translateX(-500px);
    }

    to {
        transform: translateX(1250px);
    }
}

.main {
    background-repeat: no-repeat;
    display: flex;
    flex-direction: column;
    color: #f5b207;
    align-items: center;
    position: relative;
    overflow: hidden;
}

.cls-for-img {
    background-image: linear-gradient(rgba(4, 6, 30, 0.8), rgba(4, 9, 20, 0.9)), url(images/Gcoeara.jpg);
    background-position: center;
    background-size: cover;
    position: relative;
    height: 63vh;
    margin: auto;
    overflow: hidden;

}

.conference-cls {
    /* font-size: 1.8rem; */
    font-weight: 700;
    font-size: 2.4rem;
    text-shadow:
        0.05em 0.07em 0 rgb(55, 56, 4),
        0.05em 0.08em 0 rgb(173, 200, 30),
        0.05em 0.09em 0 rgb(100, 70, 225);

}

.logo-main {
    position: absolute;
    overflow: hidden;
}

    .img2 {
        margin-top: 0%;
        font-size: 1.9rem;
        font-weight: 600;

    }

    .sponsor-heading {
        color: white;
    }

    .logo-img1 {
        float: right;
        width: 60%;
        height: 80%;

    }

    .logo-img2 {
        float: left;
        width: 60%;
        height: 80%;
    }

    .img3,
    .img1 {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .aazadi_logo{
        width:100px;
        height:100px;
        object-fit: contain;
    }

    @media(max-width:1500px) {
        .conference-cls {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .logo-img1,
        .logo-img2 {
            width: 65%;
            height: 85%;

        }

        .img2 {
            font-size: 1.6rem;
        }

    }
    @media(max-width:1295px) {
        .conference-cls {
            font-size: 1.4rem;
            font-weight: 600;
        }

        .logo-img1,
        .logo-img2 {
            width: 70%;
            height: 90%;

        }

        .img2 {
            font-size: 1.6rem;
        }

    }

    @media(max-width:1190px) {
        .conference-cls {
            font-size: 1.3rem;
            font-weight: 600;
        }

        .logo-img1,
        .logo-img2 {
            width: 65%;
            height: 85%;

        }

        .img2 {
            font-size: 1.6rem;
        }

    }

    @media(max-width:1012px) {
        .conference-cls {
            margin-top: 2%;
            font-size: 1.1rem;
        }

        .logo-img1,
        .logo-img2 {
            width: 60%;
            height: 75%;

        }

        .img2 {
            font-size: 1.5rem;
        }
    }

    @media(max-width:932px) {
        .conference-cls {
            margin-top: 2%;
            font-size: 1rem;
        }

        .logo-img1,
        .logo-img2 {
            width: 60%;
            height: 75%;

        }

        .img2 {
            font-size: 1.5rem;
        }
    }

    @media(max-width:772px) {
        .conference-cls {
            margin-top: 4.5%;
            margin-left: 0;
            margin-right: 0;
            font-size: 0.96rem;
        }

        .logo-img1,
        .logo-img2 {
            width: 60%;
            height: 65%;

        }

    }

    @media(max-width:692px) {
        .conference-cls {
            margin-top: 2%;
            font-size: 0.85rem;
        }

        .logo-img1,
        .logo-img2 {
            width: 65%;
            height: 70%;

        }

        .cls-for-img {
            height: 52vh;
        }

        .img2 {
            font-size: 1.1rem;
        }
    }

    @media(max-width:612px) {
        .conference-cls {
            font-size: 0.65rem;
        }
    }

    @media(max-width:572px) {
        .conference-cls {
            font-size: 0.94rem;
        }

        .logo-img1,
        .logo-img2 {
            width: 75%;
            height: 70%;

        }

        .cls-for-img {
            height: 43vh;
        }

        .img2 {
            font-size: 1rem;
        }

    }


    @media(max-width:532px) {
        .conference-cls {
            font-size: 0.93rem;
        }

        .logo-img1,
        .logo-img2 {
            width: 85%;
            height: 60%;

        }

        .cls-for-img {
            height: 51vh;
        }

        .img2 {
            font-size: 1.3rem;
        }

    }

    @media(max-width:484px) {
        .conference-cls {
            font-size: 0.92rem;
        }

        .logo-img1,
        .logo-img2 {
            width: 90%;
            height: 70%;

        }

        .img2 {
            font-size: 1.3rem;
        }
        .cloud1 {
        width: 100%;
        font-size: 0.9rem;
    }

    }

    @media(max-width:472px) {
        .conference-cls {
            font-size: 0.9rem;
        }

        .logo-img1,
        .logo-img2 {
            width: 95%;
            height: 70%;

        }

        .cls-for-img {
            height: 50vh;
        }

        .img2 {
            font-size: 1.2rem;
        }
        .cloud1 {
        width: 100%;
        font-size: 0.8rem;
    }

    }

    @media(max-width:453px) {
        .conference-cls {
            font-size: 0.85rem;
        }

        .logo-img1,
        .logo-img2 {
            width: 100%;
            height: 65%;

        }

        .cls-for-img {
            height: 50vh;
        }

        .img2 {
            font-size: 1.1rem;
        }
         .aazadi_logo{
        width:80px;
        height:80px;
    }


    }

    /* @media(max-width:440px) {
    .conference-cls {
        padding: 0px;
        margin-top: 5%;
        margin-bottom: 2%;
        font-size: 0.8rem;
    }

    .logo-img1,
    .logo-img2 {
        width: 106%;
        height: 60%;

    }

    .cls-for-img {
        height: 40vh;
    }

    .img2 {
        font-size: 0.9rem;
    }
} */

    /* @media(max-width:405px) {
    .conference-cls {
        margin-top: 8%;
        margin-bottom: 3%;
        font-size: 0.7rem;
    }

    .logo-img1,
    .logo-img2 {
        width: 106%;
        height: 60%;

    }

    .cls-for-img {
        height: 38vh;
    }

    .img2 {
        font-size: 0.8rem;
    }

} */

    @media(max-width:386px) {
        .conference-cls {
            margin-top: 7%;
            font-size: 0.8rem;
        }

        .logo-img1,
        .logo-img2 {
            height: 45%;
            width: 110%;

        }

        .img2 {
            font-size: 0.95rem;
        }
        .cls-for-img {
            height: 47vh;
        }
    }
    @media(max-width:361px) {
        .conference-cls {
            margin-top: 7%;
            font-size: 0.8rem;
        }

        .logo-img1,
        .logo-img2 {
            height: 50%;
            width: 120%;
            padding-right: 2%;

        }

        .img2 {
            font-size: 0.95rem;
        }
        .move_text1{
            height:100%;
        }
        .cloud1 {
        width: 100%;
        font-size: 0.68rem;
        }
    }
    @media(max-width:281px) {
        .conference-cls {
            margin-top: 7%;
            font-size: 0.45rem;
        }

        .logo-img1,
        .logo-img2 {
            height: 50%;
            width: 200%;
            padding-right: 2%;

        }

        .img2 {
            font-size: 0.7rem;
        }
        .cloud1 {
        width: 100%;
        font-size: 0.65rem;
        }
    }
</style>

<body>
            <?php 
    //include "includes/navigation.php";
    ?>
    <div class="container1 wrapper" style="overflow:hidden">
        <!-- 1 -->
        <div class="header-1" style="background-color: #000000;
                background-image: linear-gradient(147deg, #000000 0%, #04619f 74%);">

            <div class="row">
                <div class="img1 col-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 img-responsive"> <img
                        class="logo-img logo-img1" style="" src="images/govt-college-logo1.png" alt="" />
                </div>

                <div class="col-xl-8 col-8 col-lg-8 col-md-8 col-sm-8 ">
                    <div style="color:white" class="text-center mx-2 conference-cls">
                        <p>National Conference on Energy and Environment for Sustainable Development 2022
                        </p>
                    </div>
                </div>

                <div class="col-2 col-xl-2 col-lg-2 col-md-2 col-sm-2 img3"> <img
                        class="logo-img img-responsive logo-img2" style="" src="images/govt-logo2.png" alt="" /></div>
            </div>
        </div>
        <?php 
    include "includes/navigation.php";
    ?>
        <!-- 2 -->
        <div class="main cls-for-img">

            <div class="logo-main text-center wrapper">
                <div class="row mx-2">
                    <div class="img2 col-xl-12 col-12 col-lg-12 col-md-12 col-sm-12">
                        <img src="./images/logo-black.png" class="aazadi_logo"/>
                        <p>NCEESD 2022 <br> (Offline Conference)<br>
                            5<sup>th</sup> & 6<sup>th</sup> July, 2022<br>
                            Government College of Engineering
                            and Research Avasari Khurd,
                            <br>Sub-District : Ambegaon, District : Pune - 412405,
                            India
                        </p>
                        <p class="sponsor-heading">Sponsored by</p>
                    </div>
                </div>

            </div>
        </div>
        <!-- 3 -->
        <div class="333" style="
background-color: #000000;
background-image: linear-gradient(315deg, #000000 0%, #414141 74%);; height:4vh">
            
            <div class="move_Text1 cloud1">
                <p class="inner-cloud">Paper Submission date has been extended till 30th March 2022.</p>
            </div>
            
        </div>

    </div>