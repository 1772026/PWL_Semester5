<div style="background-color: black;top: 0;height: 120px"></div>
<div class="site-section" id="properties-section">
    <h1 style="text-align: center; color: #333333;" class="my-lg-5">NOW SHOWING</h1>
    <div class="card-columns">
        <?php for ($i = 0;$i < count($data) ;$i++){
        ?>
        <div class="card" onclick="kursi(<?php echo $data[$i]->id ?>)">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="images/<?php echo strtolower(str_replace(' ', '', $data[$i]->judul)) ?>.jpg"
                         class="card-img">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data[$i]->judul ?></h5>
                        <p class="card-text"><?php echo $data[$i]->deskripsi ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php
        } ?>
    </div>
</div>
