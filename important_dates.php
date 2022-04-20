<?php include 'main.php' ?>
<style>
.imp-date {
    margin: auto;
    margin-bottom: 30px;
}

.imp-date p {
    font-size: 0.8rem;
    font-weight: 500;
}

.left div:nth-child(even) {
    background: #CCC
}

.left div {
    border-bottom: 1px solid grey;
}

.left div:hover {
    background: #bfbfbf;
}

.left h4 {
    width: 100%;
    text-align: center;
    border-radius: 7px;
    color: crimson;
    box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
    padding: 10px;
    color: white;
    text-shadow:
        0.04em 0.07em 0 rgb(55, 56, 4),
        0.04em 0.08em 0 rgb(173, 200, 30),
        0.04em 0.09em 0 rgb(100, 70, 200);
    background-color: #000000;
    background-image: linear-gradient(147deg, #000000 0%, #04619f 74%);
    border-radius: 10px;
    margin: auto;
    margin-top: 10vh;
}

.left {
    height: 100%;
}

.right {
    margin-top: 10vh;
}

.right h6 {
    font-weight: bold;
}

.right p {
    font-weight: bold;
    font-size: 14px;
}

.right-content {
    height: 50%;
}

.right-img {
    height: 46%;
    width:84%;
    margin-top:3%;
    margin:auto;

}
.imp-date2{
    margin-bottom:10vh !important;
}
@media(max-width:989px){
    .right-img {
     height: 36%;
    width:95%;
    margin-top:3%;
    margin:auto;

}
.imp-date p {
    font-size: 0.6rem;
    font-weight: 500;
}

.right-img-tag {
    height: 92%;
    width: 100%;
}
.imp-date2{
    margin-bottom:5vh !important;
}
}
@media(max-width:400px){
    .right-img {
    height: 30%;
    margin-top:0%;

}
}

.right-img-tag {
    height: 92%;
    width: 100%;
}

@media(max-width:400px) {

    .right {
        margin-top: 4vh;
    }

    .right-content {
        height: 65%;
    }

}
</style>

<div class="container row imp-date">
    <div class="left col-lg-6 col-md-6 col-sm-12 col-12">
        <h4 class="mb-4 imp-date2">Important Dates</h4>
        <div class="row">
            <p class="col-lg-6 col-md-6 col-sm-6 col-6">Submission of full length paper:</p>
            <p class="col-lg-6 col-md-6 col-sm-6 col-6">30th March, 2022</p>
        </div>
        <div class="row">
            <p class="col-lg-6 col-md-6 col-sm-6 col-6">Authors (s) notification after review: </p>
            <p class="col-lg-6 col-md-6 col-sm-6 col-6">30th April, 2022</p>
        </div>

        <div class="row">
            <p class="col-lg-6 col-md-6 col-sm-6 col-6">Final Paper Submission:</p>
            <p class="col-lg-6 col-md-6 col-sm-6 col-6">15th May, 2022</p>
        </div>

        <div class="row">
            <p class="col-lg-6 col-md-6 col-sm-6 col-6">Notification of final acceptance:</p>
            <p class="col-lg-6 col-md-6 col-sm-6 col-6">30th May, 2022</p>
        </div>

        <div class="row">
            <p class="col-lg-6 col-md-6 col-sm-6 col-6">Early bird registration:</p>
            <p class="col-lg-6 col-md-6 col-sm-6 col-6">5th June, 2022</p>
        </div>

        <div class="row">
            <p class="col-lg-6 col-md-6 col-sm-6 col-6">Last Date of Registration:</p>
            <p class="col-lg-6 col-md-6 col-sm-6 col-6">30th June, 2022</p>
        </div>

        <div class="row">
            <p class="col-lg-6 col-md-6 col-sm-6 col-6">Date of Conference:</p>
            <p class="col-lg-6 col-md-6 col-sm-6 col-6">5th- 6th July, 2022</p>
        </div>
    </div>

    <div class="right col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="right-content">
            <h6 class="text-center text-bold">National Conference on<br>
                Energy and Environment for
                Sustainable Development<br>
                July 5th-6th July, 2022<br>
                (Offline Conference)</h6>
            <p class="text-center my-4">Government College of Engineering
                and Research Avasari (kh), Taluka: Ambegaon, District: Pune-412405,
                India</p>
        </div>

        <div class="right-img">
            <img src="images/clg-img2.jpg" alt="" class="img-fluid right-img-tag">
        </div>
    </div>
</div>
<?php include "includes/footer.php"; ?>