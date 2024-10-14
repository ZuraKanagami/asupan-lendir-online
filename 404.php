<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  	<title>404 - Notfound</title>
  	<?php include 'templates/css.php';?>
  	<meta name="robots" content="index, nofollow">
  	<link rel="icon" href="/templates/logo.png" type="image/png">
  	<meta name="description" content="<?php echo META_DESCRIPTION; ?>">
  	<meta name="copyright" content="<?php echo META_COPYRIGHT; ?>">
  	<meta name="keywords" content="<?php echo META_KEYWORD; ?>">
  	<meta property="og:title" content="<?php echo META_TITLE; ?>">
    <meta property="og:description" content="<?php echo META_DESCRIPTION; ?>">
    <meta property="og:image" content="/templates/logo.png">
    <meta property="og:url" content="/">
    <meta property="og:type" content="website">
  	<meta name="twitter:card" content="/templates/logo.png">
    <meta name="twitter:title" content="<?php echo META_TITLE; ?>">
    <meta name="twitter:description" content="<?php echo META_DESCRIPTION; ?>">
    <meta name="twitter:image" content="/templates/logo.png">
  	
  	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  	
    
    
  	<style>
      body {
          background: linear-gradient(to bottom, #090812, #111520 100vh, #07090e 200vh);
          overflow-x: hidden;
          overflow-y: hidden;
          height:100vh
      }
      .button-container {
          display: flex; /* Menggunakan flexbox */
          flex-direction: column; /* Mengatur arah konten menjadi kolom */
          justify-content: center; /* Mengatur konten ke tengah secara horizontal */
          align-items: center; /* Mengatur konten ke tengah secara vertikal */
          height: 50vh; /* Mengatur tinggi kontainer menjadi 100% dari tinggi viewport */
          text-align: center; /* Mengatur teks di tengah */
      }

      #message {
          margin-bottom: 50px; /* Menambahkan jarak antara pesan dan tombol */
          font-size: 22px; /* Ukuran font untuk pesan */
          color: #FFF; /* Warna teks untuk pesan */
      }

      #returnHomeButton {
          display: inline-block; /* Membuat tombol berbentuk inline-block */
          padding: 10px 20px; /* Memberikan padding di dalam tombol */
          background-color: #4CAF50; /* Warna latar belakang tombol */
          color: white; /* Warna teks tombol */
          text-align: center; /* Mengatur teks di tengah */
          text-decoration: none; /* Menghilangkan garis bawah pada link */
          border-radius: 5px; /* Memberikan sudut yang melengkung */
          font-size: 16px; /* Ukuran font */
          transition: background-color 0.3s; /* Efek transisi saat hover */
      }

      #returnHomeButton:hover {
          background-color: #45a049; /* Warna latar belakang saat hover */
      }


  </style>
</head>
<body>
  <?php include 'templates/nav.php'; ?>
  <div class="button-container">
    <p id="message">Page not available, please return to homepage.</p>
    <a href="javascript:void(0)" id="returnHomeButton">Return to Home</a>
  </div>
  <script>
  	document.getElementById('returnHomeButton').addEventListener('click', function() {
        window.location.href = '/';
    });
  </script>

</body>
</html>

