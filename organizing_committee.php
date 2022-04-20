<?php include "main.php"; ?>
<style>
    .committee-cls{
        width:70%;
        margin-top:3%;
        margin-bottom:1%;
        margin:auto;
        height: 80%;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    }
    .committee-head{
        width:55% !important;
        margin:auto;
        color: white;
        margin-top:1%;
        margin-bottom:1%;
        padding:1.2%;
        font-size:1.4rem;
        text-shadow: 2px 2px 4px #000000;
        background-image: linear-gradient(147deg, #000000 0%, #04619f 74%);
        box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;


    }
   
    .div-col{
        padding:1%;
    }
    @media(max-width:771px){
        .committee-cls{
        width:96%;
        margin:auto;
        height: 80%;
        font-size:1rem;
    }
    .committee-head{
        width:70% !important;
        padding:1%;
    }
    .div-col{
        font-size:0.8rem !important;
    }
    }
    @media(max-width:373px){
        .committee-cls{
        width:100%;
    }
    .committee-head{
        width:94% !important;
    }
    .div-col{
        font-size:0.6rem !important;
    }
    }
</style>
<div class=" container my-4">
    <div class=" row committee-cls">
        <p class="committee-head text-center">Organizing Committee</p>
        <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-6 div-col">
            <ul class="list-group list-group-flush committee_names">
                <li class="list-group-item">Dr. N. S. Nehe</li>
                <li class="list-group-item">Dr. M. S. Nagmode</li>
                <li class="list-group-item">Dr. Suhasini Madekar</li>
                <li class="list-group-item">Dr. M. J. Pable</li>
                <li class="list-group-item">Dr. M. G. Shaikh</li>
                <li class="list-group-item">Dr. Vandna Inamdar</li>
                <li class="list-group-item">Dr. K. V. Thakur</li>
            </ul>
        </div>
        <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-6 div-col">
            <ul class="list-group list-group-flush committee_names">
                <li class="list-group-item">Dr. S. U. Ghumre</li>
                <li class="list-group-item">Dr. U. S. Kakde</li>
                <li class="list-group-item">Dr. W. N. Deulkar</li>
                <li class="list-group-item">Dr. S. S. Deshpande</li>
                <li class="list-group-item">Dr. S. V. Karmare</li>
                <li class="list-group-item">Dr. M. R. Bongulwar</li>
                <li class="list-group-item">Dr. N. P. Futane</li>
            </ul>
        </div>
        
    </div>

</div>

<?php include "includes/footer.php"; ?>