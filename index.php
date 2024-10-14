<?php 
include 'config.php'; 
include 'templates/css.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title><?php echo META_TITLE; ?></title>
    <meta name="robots" content="index, follow">
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
</head>
<body>

<?php include 'templates/nav.php'; ?>
<div id="content">
    <h1 class="title">Rekomendasi</h1>
    <div class="video-container" id="randomVideoContainer">
        <?php
        $randomVideos = file_get_contents('https://vidwish.com/admin/core/api.php?c=VIDEOS01&t=RANDOM');
        $randomVideos = json_decode($randomVideos, true);
        foreach (array_slice($randomVideos, 0, 8) as $video) {
            echo '
                <div class="video">
                    <a href="' . LINK_WATCH . $video['slug'] . '">
                        <img src="' . $video['poster'] . '" alt="' . $video['slug'] . '" loading="eager">
                        <div class="video-title">' . $video['title'] . '</div>
                    </a>
                </div>
            ';
        }
        ?>
    </div>

    <h1 class="title">Bokep Indonesia</h1>
    <div class="video-container" id="asupanVideoContainer">
        <?php
        $asupanVideos = file_get_contents('https://vidwish.com/admin/core/api.php?c=VIDEOS02&t=RANDOM');
        $asupanVideos = json_decode($asupanVideos, true);
      
        $asupanPerPage = 8;
        $asupanTotalVideos = count($asupanVideos);
        $asupanTotalPages = ceil($asupanTotalVideos / $asupanPerPage);
        $asupanCurrentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $asupanStart = ($asupanCurrentPage - 1) * $asupanPerPage;
        $asupanEnd = $asupanStart + $asupanPerPage;
        $asupanVideosToShow = array_slice($asupanVideos, $asupanStart, $asupanPerPage);

        if (empty($asupanVideosToShow)) {
            echo '<p>No videos available</p>';
        } else {
            foreach ($asupanVideosToShow as $video) {
                echo '
                    <div class="video">
                        <a href="' . LINK_WATCH . $video['slug'] . '">
                            <img src="' . $video['poster'] . '" alt="' . $video['slug'] . '" loading="eager">
                            <div class="video-title">' . $video['title'] . '</div>
                        </a>
                    </div>
                ';
            }
        }
        ?>
    </div>
    <div class="pagination" id="asupanPaginationContainer">
        <?php
        if ($asupanTotalPages > 1) {
            if ($asupanTotalPages <= 5) {
                for ($i = 1; $i <= $asupanTotalPages; $i++) {
                    echo '<button ' . ($i === $asupanCurrentPage ? 'class="active"' : '') . ' onclick="window.location.href=\'?page=' . $i . '\'">' . $i . '</button> ';
                }
            } else {
                if ($asupanCurrentPage > 3) {
                    echo '<button onclick="window.location.href=\'?page=1\'">1</button> <span>...</span> ';
                }
                $start = max(1, $asupanCurrentPage - 2);
                $end = min($asupanTotalPages, $asupanCurrentPage + 2);
                for ($i = $start; $i <= $end; $i++) {
                    echo '<button ' . ($i === $asupanCurrentPage ? 'class="active"' : '') . ' onclick="window.location.href=\'?page=' . $i . '\'">' . $i . '</button> ';
                }
                if ($asupanCurrentPage < $asupanTotalPages - 2) {
                    echo '<span>...</span> <button onclick="window.location.href=\'?page=' . $asupanTotalPages . '\'">' . $asupanTotalPages . '</button>';
                }
            }
        }
        ?>
    </div>


    <h1 class="title">JAV - Japanese AV</h1>
    <div class="video-container" id="javVideoContainer">
        <?php
        $javVideos = file_get_contents('https://vidwish.com/admin/core/api.php?c=VIDEOS01&t=RANDOM');
        $javVideos = json_decode($javVideos, true);

        $javPerPage = 20;
        $javTotalVideos = count($javVideos);
        $javTotalPages = ceil($javTotalVideos / $javPerPage);
        $javCurrentPage = isset($_GET['pages']) ? intval($_GET['pages']) : 1;
        $javStart = ($javCurrentPage - 1) * $javPerPage;
        $javEnd = $javStart + $javPerPage;
        $javVideosToShow = array_slice($javVideos, $javStart, $javPerPage);

        if (empty($javVideosToShow)) {
            echo '<p>No videos available</p>';
        } else {
            foreach ($javVideosToShow as $video) {
                echo '
                    <div class="video">
                        <a href="' . LINK_WATCH . $video['slug'] . '">
                            <img src="' . $video['poster'] . '" alt="' . $video['slug'] . '" loading="eager">
                            <div class="video-title">' . $video['title'] . '</div>
                        </a>
                    </div>
                ';
            }
        }
        ?>
    </div>
    <div class="pagination" id="javPaginationContainer">
        <?php
        if ($javTotalPages > 1) {
            if ($javTotalPages <= 5) {
                for ($i = 1; $i <= $javTotalPages; $i++) {
                    echo '<button ' . ($i === $javCurrentPage ? 'class="active"' : '') . ' onclick="window.location.href=\'?pages=' . $i . '\'">' . $i . '</button> ';
                }
            } else {
                if ($javCurrentPage > 3) {
                    echo '<button onclick="window.location.href=\'?pages=1\'">1</button> <span>...</span> ';
                }
                $start = max(1, $javCurrentPage - 2);
                $end = min($javTotalPages, $javCurrentPage + 2);
                for ($i = $start; $i <= $end; $i++) {
                    echo '<button ' . ($i === $javCurrentPage ? 'class="active"' : '') . ' onclick="window.location.href=\'?pages=' . $i . '\'">' . $i . '</button> ';
                }
                if ($javCurrentPage < $javTotalPages - 2) {
                    echo '<span>...</span> <button onclick="window.location.href=\'?pages=' . $javTotalPages . '\'">' . $javTotalPages . '</button>';
                }
            }
        }
        ?>
    </div>
</div>
</body>
</html>
