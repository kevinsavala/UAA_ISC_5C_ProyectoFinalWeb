<div class="col-3">
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="img/<?php echo $item["imagen"] ?>">
            </div>
                <div class="flip-card-back">
            <input type="hidden" id="id" value="<?php echo $item['id'];  ?>">
            <h1><?php echo $item["nombre"] ?></h1>
            <h6><?php echo $item["descripcion"] ?></h6>
            <h6>Existencia: <?php echo $item["existencia"] ?></h6>
            <h6><del><?php echo $item["precio"] ?></del></h6><?php   
                    $item['precio']-=100;
                    ?>
                    <h6>$<?php echo $item["precio"] ?></h6>
                    <div class="botones">
            <button type="submit" class="btn btn-dark btn-add" name="agregar">Agregar</button>
                </div>
            </div>
            </div>
        </div>
</div>    