<?php include('_partials/header.php'); ?>

    <section class="contact">
        <h1>KONTAKT</h1>
        <div class="container">
            <div class="row">
                <div class="col col-1">
                    <h2>Kontaktní informace</h2>
                    <div class="mini-row">
                        <div class="mini-col-1">
                            <div class="address">
                                <p>Solná Jeskyně</p>
                                <p>Harantova 1756</p>
                                <p>397 01  &nbsp;Písek</p>
                                <p>IČO: 281 55 084</p>
                            </div>
                            <div class="icons">
                                <p><i class="fas fa-user"></i>Marie Junová</p>
                                <p><i class="fas fa-envelope"></i><a href="mailto:jeskyne.pisek@seznam.cz">jeskyne.pisek@seznam.cz</a></p>
                                <p><i class="fas fa-phone"></i><a href="tel:774333929">774 333 929</a> , <a href="tel:777093929">777 093 929</a></p>
                                <p><i class="fab fa-facebook-square"></i><a>Solná Jeskyně - Písek</a></p>
                            </div>
                        </div>
                        <div class="mini-col-2">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2601.3835489119474!2d14.154587800986802!3d49.30701967239774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b4ff74a42bcc5%3A0x65562a83da3c39da!2zSGFyYW50b3ZhIDE3NTYvMzAsIEJ1ZMSbam92aWNrw6kgUMWZZWRtxJtzdMOtLCAzOTcgMDEgUMOtc2Vr!5e0!3m2!1scs!2scz!4v1623081758361!5m2!1scs!2scz" width="100%" height="330" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col col-2">
                    <h2>Kontaktujte nás</h2>
                    <form action="inc/contactform.php" method="post">
                        <div class="inputBox w50">
                            <input type="text" name="name" required>
                            <span>Jméno</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="text" name="surname" required>
                            <span>Příjmení</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="email" name="mail" required>
                            <span>E-mail</span>
                        </div>
                        <div class="inputBox w50">
                            <input type="tel" name="phone" required>
                            <span>Telefon</span>
                        </div>
                        <div class="inputBox w100">
                            <textarea name="txt" required></textarea>
                            <span>Napište nám...</span>
                        </div>
                        <div class="inputBox submit">
                            <input type="submit" name="submit" value="Odeslat">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php include('_partials/footer.php'); ?>