
 <div class="item">
            <div class="miniature">
               <a href="#">
            <img src="uploads/<?php echo $news["picture"]; ?>" alt="<?php echo $news["title"]; ?>">
        </a>
            </div>
            <div class="titre-mini">
                <h3><?php echo $news["title"]; ?></h3>
            </div>

            <p>DIY</p>
            <p><?php echo $news["description"]; ?></p>
            <div class="info-miniature">
                <p><?php echo $news["firstname"]; ?></p>
                <p><?php echo $news["codepost"]; ?></p>
            </div>

            <div class="rs-partage">
                <div class="">
                    <p>Partagez sur</p>
                </div>
                <nav class="social-nav social-nav-partage">
                    <ul>
                        <li>
                            <a href="#" title="Facebook">
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>Facebook</a>
                        </li>
                        <li>
                            <a href="#" title="Instagram">
                                <i class="fa fa-instagram" aria-hidden="true"></i>Instagram</a>
                        </li>
                        <li>
                            <a href="#" title="Pinterest">
                                <i class="fa fa-pinterest-square" aria-hidden="true"></i>Pinterest</a>
                        </li>
                        <li>
                            <a href="#" title="Twitter">
                                <i class="fa fa-twitter-square" aria-hidden="true"></i>Twitter</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <a class="more" href="#">Lire la suite</a>

        </div>
