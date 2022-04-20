<?php include 'main.php'?>
<!-- CSS -->
<style>
.conference {
    border-radius: 5px;
    color: #04619f;
}

.conference_desc {
    font-size: 1rem;
    font-weight: 500;
}

.track_desc {
    font-size: 1.1rem;
    font-weight: 500;
}

.track_title {
    /*color: #04619f;*/
    box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
    padding: 0px;
    color: white;
    text-shadow:
        0.04em 0.07em 0 rgb(55, 56, 4),
        0.04em 0.08em 0 rgb(173, 200, 30),
        0.04em 0.09em 0 rgb(100, 70, 200);
    background-color: #000000;
    background-image: linear-gradient(147deg, #000000 0%, #04619f 74%);
    border-radius: 10px;
    margin: auto;
    width: 45%;
}

.track_title h4 {
    padding: 10px;
}

.track_content {
    width: 80%;
    padding:3%;
}

.track_content p {
    margin-left: 5px;
    margin-top: 0 !important;
    color: black;
}

.track_content {
        box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
            border-radius:10px;


}


@media(max-width:1020px) {
    .track_title {
        width: 70%;
    }
}
@media(max-width:450px) {
    .track_title {
        width: 90%;
    }
    .track_title h4{
        font-size:16px;
    }
    .track_content{
        width:90%;
    }
    .conference_desc{
        font-size:12px;
    }
}
</style>
<!-- conference track -->
<div class="container my-4">
    <div class="track_title text-center">
        <h4>NCEESD 2022 Themes</h4>
    </div>
    <div class="conference_desc mt-2">
        <p class="mt-4">The National Conference on Energy and 
Environment for Sustainable Development 
2022 is an important event organized as a 
part of "Azadi ka Amrit Mahostsav", the 75th 
Anniversary of Indian Independence. It will 
provide an opportunity and platform for 
faculty, students and industry professionals to 
demonstrate their contributions and research 
in the area of engineering and technology. 
NSEESD 2022 encompasses following tracks:</p>
    </div>
    <hr>
</div>

<div class="container" style="border-bottom: 2px solid black;margin-top:10px;">
    <div class="track_title text-center">
        <h4 class="px-4">Track - 01: Energy</h4>
    </div>
    <div style='margin-top:20px;'class="track_content container">
        <p>
            This track deals with various fundamental issues and perspectives in energy. The topics of interest would include, but are not limited to: Advanded Energy Technologies 
            ,Advanced energy market;Energy efficiency; energy
            market; energy policy, economics, planning
            and regulations; integrated energy systems;
            modelling, simulation and forecasting of
            energy and carbon markets; nano-technology
            applications to renewable energy; smart grids;
            sustainable cities and sustainable buildings.
        </p>
    </div>
</div>

<div class="container my-4">
    <div class="track_title text-center">
        <h4>Track - 02: Environment</h4>
    </div>
    <div style='margin-top:20px;' class="track_content container">
        <p>This track deals with fundamental
            issues in environment, its protection,
            regulations and also includes: biomass and
            bio-based products; carbon pricing; eco-
            design &amp; eco-efficiency; ecology &amp; bio-
            diversity conservation; impact assessment of
            environment; risk assessment and sustainable
            communities.</p>
    </div>
</div>
<div class="container my-4">
    <div class="track_title text-center">
        <h4>Track - 03: Sustainable Development</h4>
    </div>
    <div style='margin-top:20px; heigth:350px;' class="track_content container">
        <p>This track will address the essentials
        like behavioural aspects for sustainability;
        challenges, barriers and opportunities;
        environment friendly institutes; college
        community partnership; sustainability in
        curriculum; sustainability education by private
        industry and education and sustainable
        development</p>
    </div>
</div>
<?php include "includes/footer.php"; ?>