<div style="background-color: black;top: 0;height: 120px"></div>
<div class="site-section" id="properties-section">
    <h1 style="text-align: center; color: #333333;">FIND THEATERS</h1>
    <h1 style="text-align: center; color: #333333;">KOTA</h1>
    <br>
    <div id="accordion" class="container">
        <?php
        foreach ($location as $loc){
        ?>
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $loc->id ?>" aria-expanded="true"
                            aria-controls="collapseOne">
                        <?php echo $loc->name ?>
                    </button>
                </h5>
            </div>
            <div id="collapse<?php echo $loc->id ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <ul class="list-group">
                        <?php foreach ($loc->locations as $locs) { ?>
                        <li class="list-group-item"><?php echo $locs->nameGedung ?></li>

                        <?php }?>

                    </ul>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>


