<?php 
  include "./utils/db.php";
  $query = "SELECT name FROM `user`";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);
  $name = $row['name'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$name?></title>
    <link rel="stylesheet" href="./styles/reset.css" />
    <link rel="stylesheet" href="./styles/style.css" />
    <script src="./scripts/main.js" defer></script>
  </head>
  <body>
    <?php include "./components/header.php" ?> 
    <main class="main">
      <?php include "./components/hero.php" ?>
      <?php include "./components/content.php" ?>
    </main>
    <?php include "./components/footer.php" ?>
    <button class="contact-form-toggler">
      <img src="https://img.icons8.com/ios/50/FFFFFF/speech-bubble--v1.png"/>
    </button>
    <div class="contact-form" hidden>
      <button class="close-form-btn">
        <img src="https://img.icons8.com/ios/50/FFFFFF/close-window.png"/>
      </button>
      <form>
        <input type="text" name="user" hidden>
        <input type="text" placeholder="Name" name="name"/>
        <input type="email" placeholder="Email" name="email"/>
        <input type="text" placeholder="Subject" name="subject"/>
        <textarea id="" cols="30" rows="10" placeholder="Message" name="message"></textarea>
        <button class="send-btn">Send</button>
      </form>
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script>
      (function() {
            emailjs.init('sVN_MH3kJnrWzt3fp');
        })();
    </script>
 
  </body>
</html>