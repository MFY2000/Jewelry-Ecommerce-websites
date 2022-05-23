<?php 

  function BannerSection($name){
    return"    <!-- banner start -->
    <section class='$name theme-banner'>
        <div class='container'>
            <!-- col-sm-6 col-sm-offset-2 col-xs-6 col-xs-offset-1 -->
            <div class='row mini_banner_row'>
                <div class='col-md-6 col-md-offset-3'>
                    <div class='mini_banner_center text-center'>
                        <h1>".
                            ucfirst((str_replace('-',' ',$name)))                      
                        ."</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->";
  }


?>