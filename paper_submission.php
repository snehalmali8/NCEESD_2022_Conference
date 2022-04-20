<?php include 'main.php'; ?>
<style>
.paper_submission {
    margin-top: 6vh !important;
}

.paper-sub {
    font-size: 25px !important;
}

.text-effect {
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
    margin: auto;
    font-size: 20px;
    font-weight: 600;
}

.submission-content {
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    padding: 30px;
    font-weight: 500;


}

.paper_submission2,
.paper_submission3 {
    width: 45%;
    margin-top: 4vh !important;

}

.paper_submission4 {
    margin-top: 4vh !important;
    width: 75%;
}

@media(max-width:760px) {
    .paper_submission4 {
        width: 80%;
    }

    .paper_submission2 {
        width: 85%;
    }

    .paper_submission3 {
        width: 50%;
    }

    .submission-content {
        padding-left: 10px;
    }
}

@media(max-width:470px) {
    .submission-content {
        padding-left: 10px;
        font-size: 13px;
    }

    .text-effect {
        font-size: 13px;

    }
}
</style>

<!-- Full Paper Submsssion -->
<div class="container paper_submission">
    <div class="">
        <h1 class="text-center text-effect paper-sub">Full Paper Submission</h1>
    </div>
    <div class="container submission-content my-4">
        <p>• The maximum page limit for full paper - 6 pages.</p>
        <p>• The official language of the paper is English (Plagiarism: Less than 20%).</p>
        <p>• Template of full length paper is available on the conference website.</p>
        <p> • The authors will directly present their work at the conference as per the format
            recommended by the committee (oral presentation).</p>
        <p>• Details on the publication procedure will be notified on the conference website as soon as
            it is finalized</p>
        <p>• At least one of the authors must register per full-length paper/poster.</p>
    </div>
</div>

<div class="container">
    <div class="">
        <p class="text-center  text-effect paper_submission2">Paper Submission Link</p>
    </div>
    <div class="container submission-content my-4">
        <a style="color:blue;" href="https://easychair.org/conferences/?conf=nceesd2022"
            target="_blank">https://easychair.org/conferences/?conf=nceesd2022</a>
    </div>
</div>

<div class="container ">
    <div class="">
        <p class="text-center  text-effect paper_submission3">Paper Template</p>
    </div>
    <div class="container submission-content my-4">
        <!--<h6 class="text-bold">MS Word Format:</h6>-->
        <p>NCEESD_2022_Template PDF format<a href="NCEESD_2022_pdf.pdf" download="NCEESD_2022"><span
                    class="badge bg-secondary mx-2">Download</span></a>
        </p>
        <p>NCEESD_2022_Template Docx Format<a href="NCEESD_2022_Word.docx" download="NCEESD_2022"><span
                    class="badge bg-secondary mx-2">Download</span></a>
        </p>


    </div>
</div>

<div class="container ">
    <!--<div class="">-->
    <!--    <p class="text-center text-effect paper_submission3">Plagairism Report</p>-->
    <!--</div>-->
    <!--<div class="container submission-content my-4">-->
        <!--<h6>PLAGAIRISM REPORT:</h6>-->
    <!--    <p>Plagairism Report<a href="error_snehal.txt" download="true"><span-->
    <!--                class="badge bg-secondary mx-2">Download</span></a></p>-->
    <!--</div>-->
</div>

<div class="container">
    <div class="">
        <p class="text-center text-effect paper_submission3">TRACK ID:</p>
    </div>
    <div class="container submission-content my-4">
        <p>Track-ID_NCEESD-2022<a href="error_snehal.txt" download="true"><span
                    class="badge bg-secondary mx-2">Download</span></a></p>

    </div>
</div>

<div class="container">
    <div class="">
        <p class="text-center text-effect paper_submission4">GOOGLE FORM LINK FOR REVISED MANUSCRIPT AND REBUTTAL
            SUBMISSION</p>
    </div>
    <div class="container submission-content my-4">
        <p class="sub-4">Will update soon...</p>
    </div>
</div>

<div class="container ">
    <!--<div class="">-->
    <!--    <p class="text-center text-effect paper_submission4">LIST OF ACCEPTED MANUSCRIPTS FOR ORAL PRESENTATION</p>-->
    <!--</div>-->
    <!--<div class="container submission-content my-4">-->
    <!--    <p>FMFP2021_Accepted-Manuscripts-1<a href="error_snehal.txt" download="true"><span-->
    <!--                class="badge bg-secondary mx-2">Download</span></a></p>-->
    <!--</div>-->
</div>


<div class="container disclaimer my-4">
    <p style="border-bottom: 1px solid red;">Disclaimer:</p>
    <p>Your contact will be passed to sponsors and your partners to contact you as a follow-up from your attendance at
        the conference.</p>
    <p>Use of your contact data is governed by the sponsors and partners for a privacy policy.</p>
</div>

<?php 
 include "includes/footer.php";
?>