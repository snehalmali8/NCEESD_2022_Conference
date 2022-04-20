<?php 
 include "main.php";
?>
<style>
.nceesd-head {
    display: flex;
    align-items: center;
    justify-content: center;
}

.text-crimson {
    color: white;
    text-shadow:
        0.04em 0.07em 0 rgb(55, 56, 4),
        0.04em 0.08em 0 rgb(173, 200, 30),
        0.04em 0.09em 0 rgb(100, 70, 200);
    background-color: #000000;
    background-image: linear-gradient(147deg, #000000 0%, #04619f 74%);
    border-radius: 12px;
    padding: 7px;
    margin: 3% 0px;
    background-color: #e6e6ff;

}

.nceesd-main {
    color: rgb(7, 7, 7);
    font-size: 19px;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    padding: 30px;
    margin: 1%;
}
@media(max-width: 400px){
    .nceesd-main p{
        font-size: 16px;
    }
}
</style>

<div class="about-conference">
    <div class="container">

        <div class="nceesd-head">
            <h1 class="col-sm-3 text-crimson text-center">NCEESD 2022</h1>
        </div>
        <div class="nceesd-main">
            <p>
                <b>NCEESD 2022</b> shares an insight into the recent research and cutting-edge technologies in”<b>Energy
                    and
                    Environment for sustainable Development”,</b> which gains immense interest with the exuberant
                presence
                of
                talented researchers, practicing engineers, and other professionals. It is an emerging technical
                conference
                and
                exposition for energy conversion solutions and environment protection. NCEESD 2021 will include
                peer-reviewed
                technical presentations, interactive sessions, and the exposition. Exhibitors from various industries
                will
                showcase
                state-of-the-art technologies, products, and solutions, creating a highly interactive networking
                environment.
            </p>

            <p>
                This congress will provide excellent opportunities to the scientists, researchers, industrial engineers,
                and
                university students to present their research achievements and to develop new collaborations and
                partnerships
                with
                experts in the field.
            </p>
            <p>
                <b>NCEESD 2022</b> aims to provide an environment where the authors and participants can establish
                research
                relations
                and collaborations with various eminent academicians, research fellows, scientists from India.
            </p>
        </div>
    </div>
</div>

<?php include "includes/footer.php"; ?>