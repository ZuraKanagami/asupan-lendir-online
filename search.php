<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  	<?php include('templates/css.php'); ?>
  	<link rel="icon" href="/templates/logo.png" type="image/png">
    <title>Search - <?php echo META_TITLE; ?></title>
  <style>
    .pagination {
        text-align: center;
        margin: 0 auto;
        margin-top: 20px;
      	margin-bottom:20px;
    }
    @media only screen and (max-width: 800px) {
        .pagination button, .pagination span {
            margin: 2px;
        }
    }
    </style>
</head>
<body>
    <?php include('templates/nav.php');?>
	  <h1 class="title"></h1>
      <div class='video-container'>
        <?php
        if (isset($_GET['result'])) {
            $searchQuery = htmlspecialchars($_GET['result']);
            $apiUrl = "https://vidwish.com/admin/core/api.php?search=" . urlencode($searchQuery);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $apiUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);

            $videos = json_decode($response, true);
            $filteredVideos = array_filter($videos, function($video) use ($searchQuery) {
                return stripos($video['title'], $searchQuery) !== false;
            });
            $videosPerPage = 16;
            $totalVideos = count($filteredVideos);
            $totalPages = ceil($totalVideos / $videosPerPage);
            $currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
            $currentPage = max(1, min($currentPage, $totalPages));
            $start = ($currentPage - 1) * $videosPerPage;
            $videosToShow = array_slice($filteredVideos, $start, $videosPerPage);

            if (!empty($videosToShow)) {
                foreach ($videosToShow as $video) {
                    echo '
                    <div class="video">
                        <a href="' . LINK_WATCH . $video['slug'] . '">
                            <img src="' . $video['poster'] . '" alt="' . htmlspecialchars($video['slug']) . '" loading="eager">
                            <div class="video-title">' . htmlspecialchars($video['title']) . '</div>
                        </a>
                    </div>
                    ';
                }
            } else {
                echo "<p>Tidak ada hasil untuk pencarian ini.</p>";
            }
            echo '<div class="pagination">';
            if ($totalPages > 1) {
                if ($totalPages <= 5) {
                    for ($i = 1; $i <= $totalPages; $i++) {
                        if ($i === $currentPage) {
                            echo '<button class="active" disabled>' . $i . '</button>'; // Halaman aktif
                        } else {
                            echo '<button onclick="location.href=\'?result=' . urlencode($searchQuery) . '&page=' . $i . '\'">' . $i . '</button>';
                        }
                    }
                } else {
                    $startPage = max(1, $currentPage - 2);
                    $endPage = min($totalPages, $currentPage + 2);
                    if ($startPage > 1) {
                        echo '<button onclick="location.href=\'?result=' . urlencode($searchQuery) . '&page=1\'">1</button>';
                        if ($startPage > 2) {
                            echo '<span>...</span>';
                        }
                    }
                    for ($i = $startPage; $i <= $endPage; $i++) {
                        if ($i === $currentPage) {
                            echo '<button class="active" disabled>' . $i . '</button>';
                        } else {
                            echo '<button onclick="location.href=\'?result=' . urlencode($searchQuery) . '&page=' . $i . '\'">' . $i . '</button>';
                        }
                    }
                    if ($endPage < $totalPages) {
                        if ($endPage < $totalPages - 1) {
                            echo '<span>...</span>';
                        }
                        echo '<button onclick="location.href=\'?result=' . urlencode($searchQuery) . '&page=' . $totalPages . '\'">' . $totalPages . '</button>';
                    }
                }
            }
            echo '</div>';
        } else {
            echo "<p>Masukkan kata kunci pencarian.</p>";
        }
        ?>
    </div>
</body>
</html>
