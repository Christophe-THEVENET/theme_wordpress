  <footer>
      <?php
        // id de la page info générales du back-office pour dire récupère le champ facebook de la page info générales
        $idOptionsPage = 113;
        $facebook = get_field('facebook', $idOptionsPage);
        $facebook = get_field('facebook', $idOptionsPage);
        $facebook = get_field('facebook', $idOptionsPage);
        $facebook = get_field('facebook', $idOptionsPage);
        var_dump($facebook);
        ?>
      <a href="<?= $facebook ?>" target="_blank">Facebook</a>
      <a href="<?= $facebook ?>" target="_blank">Twitter</a>
      <a href="<?= $facebook ?>" target="_blank">Instagram</a>
      <a href="<?= $facebook ?>" target="_blank">Linkedln</a>
      <p>Copyright Studi - 2024</p>
  </footer>
  </body>

  </html>