<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<div class="cards-container">
<?php if($eventos_registros->num_rows > 0) { ?>
    <?php for($i = 0; $i < sizeof($usuarios); $i++) { ?>
        <div class="card">
            <div class="head">
                <div class = "circle"></div>
                    <div class = "img">
                        <img src="https://cdn-icons-png.flaticon.com/512/456/456212.png" alt="">
                    </div>
                </div>

            <div class="description">
                <h4>Nombre: <?php echo $usuarios[$i]->nombre; ?></h4>
                <h4>Apellido: <?php echo $usuarios[$i]->apellido; ?></h4>
                <h4>Email: <?php echo $usuarios[$i]->email; ?></h4>
                <h4>Plan: <?php echo $paquetes[$i]->nombre; ?></h4>
            </div>
        </div>
    <?php } ?>
<?php } else { ?>
    <p class="text-center">No Hay Registros Aún</p>
<?php } ?>
</div>