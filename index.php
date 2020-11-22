<?php 

require_once("config/constants.php");
include('header.php'); 

?>

<body>
    <?php include('nav.php'); ?>

    <div class="uk-container">

        <main class="uk-padding">

            <form action="">
                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="Nombre de la banda">
                </div>
                <div class="uk-margin">
                    <textarea class="uk-textarea" rows="5" placeholder="Biografía de la banda"></textarea>
                </div>
                <button type="submit" class="uk-button uk-button-primary">Agregar banda</button>
            </form>

            <hr>

            <table class="uk-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th width="30%">Banda</th>
                        <th>Bio</th>
                        <th width="30%">Integrantes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <strong>Soda stereo</strong>
                        </td>
                        <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia modi provident cumque nulla laudantium, quod fugit similique exercitationem hic! Qui itaque dicta vero quas blanditiis dolores atque facere eius ratione?</td>
                        <td>
                            <ul>
                                <li>Gustavo Cerati</li>
                                <li>Zeta Bosio</li>
                                <li>Charly Alberti</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
    </main>
    </div>
</body>

<?php include('footer.php'); ?>