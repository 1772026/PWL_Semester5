<div style="background-color: black;top: 0;height: 120px"></div>
<div class="site-section" id="properties-section">
    <h1 style="text-align: center; color: #333333;" class="my-lg-5">NOW SHOWING</h1>
    <div class="card-columns">
        <?php for ($i = 0;$i < count($data) ;$i++){
        ?>
        <div class="card" onclick="studio(<?php echo $data[$i]->id ?>)">
            <div class="row no-gutters">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $data[$i]->nomor_studio ?></h5>
                    <p class="card-text"><?php echo $data[$i]->type_studio ?></p>
                </div>
            </div>
        </div>
        <?php
        } ?>
    </div>
</div>
