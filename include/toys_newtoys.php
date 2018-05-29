<div class="item">
    <div class="miniature">
        <a class="more" href="jouet.php?id=<?php echo $toy["id"]; ?>"><img src="uploads/<?php echo $toy["picture"]; ?>" alt="<?php echo $toy["title"]; ?>"></a>
    </div>
    <div class="titre-mini">
        <a href="jouet.php?id=<?php echo $toy["id"]; ?>">
            <h3><?php echo $toy["title"]; ?></h3>
        </a>
    </div>
    <p>Jolie cuisinière en bois Moulin Roty</p>
    <div class="info-miniature">
        <a href="troqueur">
            <p>Julie</p>
        </a>
        <a href="lieu.html">
            <p>22</p>
        </a>
        <div class="">
            <?php echo $toy["category"]; ?>
        </div>
    </div>
    <a class="more" href="jouet.php?id=<?php echo $toy["id"]; ?>">En savoir plus</a>
</div>