<div class="item">
    <div class="miniature">
        <a href="jouet.php?id=<?php echo $toy["id"]; ?>">
            <img src="uploads/<?php echo $toy["picture"]; ?>" alt="<?php echo $toy["title"]; ?>">
        </a>
    </div>
    <div class="titre-mini">
        <a href="jouet.php?id=<?php echo $toy["id"]; ?>">
            <h3><?php echo $toy["title"]; ?></h3>
        </a>
    </div>
    <p><?php echo $toy["description"]; ?></p>
    <div class="info-miniature">
        <a href="<?php echo $toy["title"]; ?>">
            <p><?php echo $toy["firstname"]; ?></p>
        </a>
        <a href="lieu.html">
            <p><?php echo $toy["codepost"]; ?></p>
        </a>
       
    </div>
    <a class="more" href="jouet.php?id=<?php echo $toy["id"]; ?>">En savoir plus</a>
</div>