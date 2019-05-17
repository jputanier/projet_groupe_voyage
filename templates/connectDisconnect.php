<?php if(isset($_SESSION['courriel'])): ?>
                    <div id="div_logo_user"><a href="../moncompte.php">
                        <figure>
                            <i class="fas fa-user-cog logo_user"></i>
                            <figcaption>Mon compte</figcaption>
                        </figure></a>
                    </div> 
                    <div id="div_logo_user"><a href="../controllers/deconnection.php">
                        <figure>
                            <i class="fas fa-user-times logo_user"></i>
                            <figcaption>Déconnection</figcaption>
                        </figure></a>
                    </div>

        <?php else: ?>
            <div id="div_logo_user"><a href="../inscription.php">
                    <figure>
                        <i class="fas fa-user-plus logo_user"></i>
                        <figcaption>Inscription</figcaption>
                    </figure></a>
            </div>
            <div id="div_logo_user"><a href="../login.php">
                <figure>
                    <i class="fas fa-user logo_user"></i>
                    <figcaption>Connection</figcaption>
                </figure></a>
            </div>
<?php endif ?>