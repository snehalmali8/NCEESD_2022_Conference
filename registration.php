<?php include "main.php"; ?>

<style>
.registration-cls>h4 {
    color: #04619f;
    /*margin-top: 10px;*/
}

.registration-cls>p {
    font-size: 1.4rem;
}

.registration-cls>.blk {
    color: black;
}
.table-registration{
    margin-top:2%;
    width:80%;
    
}
.table-registration,
.table-registration th,
.table-registration td {
    border: 1px solid black;
    border-collapse: collapse;
    /* width: 26%; */
    text-align: center;
}
@media(max-width:450px){
    td{
        font-size:13px;
    }
}
</style>

<div class="container registration-cls my-4">

    <h4>FEE RECEIPT</h4>
    <p>Combine-Money-receipt-1-294</p>
    <br>
    <h4>Paper Submission Link:</h4>
    <div>
        <a style="color:blue;" href="https://easychair.org/conferences/?conf=nceesd2022"
            target="_blank">https://easychair.org/conferences/?conf=nceesd2022</a>
    </div>
    <br>
    <!-- <h3>Bank Details:</h3>
    
    <br> -->
    <h3 class="blk">REGISTRATION FEE DETAILS:<br><br>
    </h3>
    <div class="registration-table">
        <div class="table-responsive">
            <h4 style="color:#04619f;">Early Bird Registration</h4>

            <table class="table-registration table table-striped">
                <tr>
                    <th scope="col">Category</th>
                    <th scope="col">Amount</th>
                    
                </tr>
                <tr>
                    <td>Students(UG/PG/PHD)</td>
                    <td>RS. 500.00</td>
                </tr>
                <tr>
                    <td>Institute faculty members</td>
                    <td>RS. 1500.00</td>
                </tr>
                <tr>
                    <td>Industry Professionals</td>
                    <td>RS. 2000.00</td>
                </tr>
                <tr>
                    <td>Accompanying delegate</td>
                    <td>RS. 500.00</td>
                </tr>
            </table>
            
            <h4 style="color:#04619f;">Late Registration</h4>

            <table class="table-registration table table-striped">
                <tr>
                    <th scope="col">Category</th>
                    <th scope="col">Amount</th>
                    
                </tr>
                <tr>
                    <td>Students(UG/PG/PHD)</td>
                    <td>RS. 1000.00</td>
                </tr>
                <tr>
                    <td>Institute faculty members</td>
                    <td>RS. 2000.00</td>
                </tr>
                <tr>
                    <td>Industry Professionals</td>
                    <td>RS. 3000.00</td>
                </tr>
                <tr>
                    <td>Accompanying delegate</td>
                    <td>RS. 1000.00</td>
                </tr>
            </table>
        </div>
        <div>
            <br>
            <p class="text-bold"> *Registration fee includes conference kit, working meals, copy of abstracts of conference proceeding and conference dinner.</p>
            <!--<br>-->
        </div>

    </div>
</div>
<?php include "includes/footer.php"; ?>