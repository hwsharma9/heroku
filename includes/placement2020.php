<div class="slider placement">
    <h1>Placement-2021</h1>
    <div id="placement-slider" class="owl-carousel owl-theme">
        <?php 
            $dir = './assets/placements/2021';

            if (is_dir($dir)){
              if ($dh = opendir($dir)){
                while (($file = readdir($dh)) !== false){ 
                    if (!in_array($file, array('.', '..'))) {
                        $exp = explode('.', basename($file));
                        $name = explode('-', basename($exp[0]));
                        $company = $name[1];
            ?>
                <div class="item">
                    <div class="pl-card">
                        <img loading="lazy" src="<?php echo $dir."/".$file; ?>" alt="Avatar" />
                        <div class="pl-card-container">
                            <h4><b><?php echo ucwords(str_replace("_", " ", $name[0])); ?></b></h4>
                            <p><?php echo $company ?></p>
                        </div>
                    </div>
                </div>
            <?php }
                }
                closedir($dh);
              }
            }
        ?>
    </div>
</div>