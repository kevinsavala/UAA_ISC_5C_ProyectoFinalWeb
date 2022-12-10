<div class="col-3">
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="img/<?php echo $item["imagen"] ?>">
            </div>
                <div class="flip-card-back">
            <input type="hidden" id="id" value="<?php echo $item['id'];  ?>">
            <h2><?php echo $item["nombre"] ?></h2>
            <h5><?php echo $item["descripcion"] ?></h5>
            <h5>Existencia: <?php echo $item["existencia"] ?></h5>
            <h5><del><?php echo $item["precio"] ?></del></h5><?php   
                    $item['precio']-=100;
                    ?>
                    <h5>$<?php echo $item["precio"] ?></h5>
                    <div class="botones">
            <button type="submit" class="btn btn-dark btn-add" name="agregar">Agregar</button>
                </div>
            </div>
            </div>
        </div>
</div>    