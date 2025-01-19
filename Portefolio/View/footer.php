<link rel="stylesheet" href="../CSS/footer.css">

        <footer>
            <section>
                <article id = 'footerContact'>
                    <h1>
                        Contact
                    </h1>
                </article>

                <article>
                    <p>
                        Vous pouvez me contacter par mail <b>yanis.meziane@efrei.net</b> ou bien sur <b>Linkedin</b>
                    </p>
                </article>
            </section>

            <section id = 'messageAndReseau'>
                <article id = "Contact">
                        <p>
                            Vous pouvez m'envoyer un message directement ici
                        </p>

                    <form action="" method="POST">
                        <input type="email" name="mail" class="contact" minlength = 1 maxlength = 50 placeholder = "Votre mail...">
                <br>
                <br>
                        <textarea name="textMail" class="contact" placeholder="Votre message..."></textarea>
                <br>
                        <input type="submit" value="Soumettre">
                    </form>

                    <?php 
                    
                    if(isset($_POST["mail"])) {
                        $email = $_POST["mail"];
                        $verifMail = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
                        
                        if(!preg_match($verifMail, $email)){
                            echo "<script type='text/javascript'>alert('Email Invalide');</script>";
                        }
                    }
                ?>
                </article>

                <article class="socialMedia">
                    <a href="https://www.linkedin.com/in/yanis-meziane2/" target="_blank">Mon Linkedin</a>
                </article>

                <article class = "socialMedia">
                    <a href="https://github.com/Mezreah" target="_blank"> Mon Github</a>
                </article>
            </section>
        </footer>
    </body>
</html>