<?php 
    function aboutSection($root,$result){

    if ($result->num_rows > 0) {
        while($row = $result -> fetch_row()) {
            return "<!-- about start -->
            <section class='about' id='".$row[0]."'>
                    <div class='container'>
                        <div class='row'>
                            <div class='col-md-6'>
                                <div class='about_side_1'>
                                    <h3 class='primaryHeading'>About us</h3>
                                    <h1 class='secondaryHeading'>".$row[1]."</h1>
                                    <p class='primaryParagraph'>".$row[2]."</p>
                                    <a href='$root/Pages/aboutus.php' class='btnStyle'>Learn More</a>
                                </div>
                            </div>
                            <div class='col-md-6'>
                                <div class='about_side_2'>
                                    <img src='$root/assets/images/Banner/About/".$row[3]."' alt='about pic 1'>
                                    <img src='$root/assets/images/Banner/About/".$row[4]."' alt='about pic 2'>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- about end -->";
                
            }
        }
    }
?>