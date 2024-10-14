<?php include('config.php');

function fetchRandomVideos($category) {
    $url = "https://vidwish.com/admin/core/api.php?c=$category&t=RANDOM";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    if (curl_errno($curl)) {
        echo 'Curl error: ' . curl_error($curl);
        return [];
    }
    curl_close($curl);
    return json_decode($response, true);
}
$randomVideosWidget = fetchRandomVideos("VIDEOS02");
$randomVideosIndo = fetchRandomVideos("VIDEOS02");
$randomVideosContent = fetchRandomVideos("VIDEOS01");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  	<title></title>
  	<?php  include 'templates/css.php'; ?>
  	<meta name="robots" content="index, follow">
  	<link rel="icon" href="/templates/logo.png" type="image/png">
  	<meta name="description" content="">
  	<meta name="copyright" content="<?php echo META_COPYRIGHT; ?>">
  	<meta name="keywords" content="<?php echo META_KEYWORD; ?>">
  	<meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="/templates/logo.png">
    <meta property="og:url" content="/">
    <meta property="og:type" content="website">
  	<meta name="twitter:card" content="/templates/logo.png">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="/templates/logo.png">

  	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<!-- CONTENT TEMPLATES -->
  	<?php  include 'templates/nav.php';?>
    <div class="container">
        <div class="main-content">
          	<div class="iframeContainer">
                <div class="video-player" id="videoContainerIframe"></div>
                <div class="video-info">
                    <div class="video-title-player" id="videoTitle"></div>
                  	<div class="video-title-status" id="videoViews"></div>
                  	<div class="video-title-status" id="videoDate"></div><br><br>
                  	<div class="video-watch-status" id="videoTime"></div>
                  	<div class="video-watch-status" id="videoStatus"></div>
                  	<div class="video-watch-status" id="videoCountry"></div>
                  	<div class="video-watch-status" id="videoCode"></div>
                  	<div class="video-watch-status" id="videoCategory"></div>
                  	<div class="video-watch-status" id="videoDescription"></div>
                </div>
            </div>
          	<h1 class="title-player">Rekomendasi</h1>
          	<div class="video-container-player" id="randomVideoContentIndo">
          		<?php foreach (array_slice($randomVideosIndo, 0, 4) as $video): ?>
                <div class="video-rekomendasi-8">
                    <a href="<?php echo LINK_WATCH . $video['slug']; ?>">
                        <img src="<?php echo $video['poster']; ?>" alt="<?php echo $video['title']; ?>">
                        <div class="video-title-rekomendasi"><?php echo $video['title']; ?></div>
                    </a>
                </div>
                <?php endforeach; ?>
          	</div>
      		<div class="video-container-player" id="randomVideoContent">
                <?php foreach (array_slice($randomVideosContent, 0, 8) as $video): ?>
                <div class="video-rekomendasi-8">
                    <a href="<?php echo LINK_WATCH . $video['slug']; ?>">
                        <img src="<?php echo $video['poster']; ?>" alt="<?php echo $video['title']; ?>">
                        <div class="video-title-rekomendasi"><?php echo $video['title']; ?></div>
                    </a>
                </div>
        		<?php endforeach; ?>	
          	</div>
        </div>

        <div class="widget-right">
            <div class="widget-title">Random Videos</div>
                <div class="video-container-player" id="randomVideoWidget">
                    <?php foreach (array_slice($randomVideosWidget, 0, 7) as $video): ?>
                    <div class="video-rekomendasi">
                        <a href="<?php echo LINK_WATCH . $video['slug']; ?>">
                            <img src="<?php echo $video['poster']; ?>" alt="<?php echo $video['title']; ?>">
                            <div class="video-title-rekomendasi"><?php echo $video['title']; ?></div>
                        </a>
                    </div>
        			<?php endforeach; ?>
            	</div>
        	</div>
    	</div>
  
  	<script>
    const pathSlug = window.location.pathname.split('/').pop();
    const querySlug = new URLSearchParams(window.location.search).get('s');
    if (querySlug) {
        fetch(`https://vidwish.com/admin/core/api.php?s=${querySlug}`)
            .then(response => response.json())
            .then(data => {
                if (data.length > 0) {
                    const videoData = data[0];
                    const Embed = videoData.embed;
                    const title = videoData.title;
                  	const description = videoData.description;
                  	const time = videoData.time;
                  	const views = videoData.views;
                  	const code = videoData.code;
                  	const date = videoData.date;
                  	const country = videoData.country;
                  	const status = videoData.status;
                  	const category = videoData.category;
                    document.getElementById('videoContainerIframe').innerHTML = `
						<iframe class="iframe" src="${Embed}" width="100%" height="100%" frameborder="0" scrolling="no" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
                    `;
					document.getElementById('videoTitle').innerText = title;
                  	document.getElementById('videoViews').innerHTML = `<i class="fa fa-eye space"></i> ${views || '1'}`;
                  	document.getElementById('videoDate').innerHTML = `<i class="fa fa-calendar space"></i> ${date || '-'}`;

                    if (description) {
                        document.getElementById('videoDescription').innerText = `Description : ${description}`;
                      	const metaDescription = document.querySelector('meta[name="description"]');
                        if (metaDescription) {
                              metaDescription.setAttribute('content', description);
                          	
                        }
                      	const metaDescriptionOG = document.querySelector('meta[property="og:description"]');
                        if (metaDescriptionOG) {
                              metaDescriptionOG.setAttribute('content', description);
                        }
                      	const metaDescriptionTwiter = document.querySelector('meta[name="twitter:description"]');
                        if (metaDescriptionTwiter) {
                              metaDescriptionTwiter.setAttribute('content', description);
                        }
                    } else {
                        document.getElementById('videoDescription').style.display = 'none';
                    }
                    if (code) {
                        document.getElementById('videoCode').innerHTML = `Movie Code : ${code}`;
                    } else {
                        document.getElementById('videoCode').style.display = 'none';
                    }
                  	if (time && time !== '-') {
                        document.getElementById('videoTime').innerHTML = `Time : ${time}`;
                    } else {
                        document.getElementById('videoTime').style.display = 'none';
                    }
                    if (country) {
                        document.getElementById('videoCountry').innerText = `Country : ${country}`;
                    } else {
                        document.getElementById('videoCountry').style.display = 'none';
                    }
                    if (status) {
                        document.getElementById('videoStatus').innerText = `Status : ${status}`;
                    } else {
                        document.getElementById('videoStatus').style.display = 'none';
                    }
                    if (category) {
                        document.getElementById('videoCategory').innerText = `Genre : ${category}`;
                    } else {
                        document.getElementById('videoCategory').style.display = 'none';
                    }

                  	document.title = title;
                  	if (title) {
                        const metaTitleOG = document.querySelector('meta[property="og:title"]');
                        if (metaTitleOG) {
                                metaTitleOG.setAttribute('content', title);
                        }
                      	const metaTitleTwitter = document.querySelector('meta[name="twitter:title"]');
                        if (metaTitleTwitter) {
                              	metaTitleTwitter.setAttribute('content', title);
                        }
                    }
                } else {
                    window.location.href = '/404.php'
                }
            })
            .catch(error => {
                console.error('Error fetching video:', error);
                document.getElementById('videoContainerIframe').innerText = "An error occurred while fetching the video.";
            });
        }
      
      	else if (pathSlug) {
        fetch(`https://vidwish.com/admin/core/api.php?s=${pathSlug}`)
            .then(response => response.json())
            .then(data => {
                if (data.length > 0) {
                    const videoData = data[0];
                    const Embed = videoData.embed;
                    const title = videoData.title;
                  	const description = videoData.description;
                  	const time = videoData.time;
                  	const views = videoData.views;
                  	const code = videoData.code;
                  	const date = videoData.date;
                  	const country = videoData.country;
                  	const status = videoData.status;
                  	const category = videoData.category;
                    document.getElementById('videoContainerIframe').innerHTML = `
						<iframe class="iframe" src="${Embed}" width="100%" height="100%" frameborder="0" scrolling="no" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
                    `;
					document.getElementById('videoTitle').innerText = title;
                  	document.getElementById('videoViews').innerHTML = `<i class="fa fa-eye space"></i> ${views || '1'}`;
                  	document.getElementById('videoDate').innerHTML = `<i class="fa fa-calendar space"></i> ${date || '-'}`;

                    if (description) {
                        document.getElementById('videoDescription').innerText = `Description : ${description}`;
                      	const metaDescription = document.querySelector('meta[name="description"]');
                        if (metaDescription) {
                              metaDescription.setAttribute('content', description);
                          	
                        }
                      	const metaDescriptionOG = document.querySelector('meta[property="og:description"]');
                        if (metaDescriptionOG) {
                              metaDescriptionOG.setAttribute('content', description);
                        }
                      	const metaDescriptionTwiter = document.querySelector('meta[name="twitter:description"]');
                        if (metaDescriptionTwiter) {
                              metaDescriptionTwiter.setAttribute('content', description);
                        }
                    } else {
                        document.getElementById('videoDescription').style.display = 'none';
                    }
                    if (code) {
                        document.getElementById('videoCode').innerHTML = `Movie Code : ${code}`;
                    } else {
                        document.getElementById('videoCode').style.display = 'none';
                    }
                  	if (time && time !== '-') {
                        document.getElementById('videoTime').innerHTML = `Time : ${time}`;
                    } else {
                        document.getElementById('videoTime').style.display = 'none';
                    }
                    if (country) {
                        document.getElementById('videoCountry').innerText = `Country : ${country}`;
                    } else {
                        document.getElementById('videoCountry').style.display = 'none';
                    }
                    if (status) {
                        document.getElementById('videoStatus').innerText = `Status : ${status}`;
                    } else {
                        document.getElementById('videoStatus').style.display = 'none';
                    }
                    if (category) {
                        document.getElementById('videoCategory').innerText = `Genre : ${category}`;
                    } else {
                        document.getElementById('videoCategory').style.display = 'none';
                    }

                  	document.title = title;
                  	if (title) {
                        const metaTitleOG = document.querySelector('meta[property="og:title"]');
                        if (metaTitleOG) {
                                metaTitleOG.setAttribute('content', title);
                        }
                      	const metaTitleTwitter = document.querySelector('meta[name="twitter:title"]');
                        if (metaTitleTwitter) {
                              	metaTitleTwitter.setAttribute('content', title);
                        }
                    }
                } else {
                    window.location.href = '/404.php'
                }
            })
            .catch(error => {
                console.error('Error fetching video:', error);
                document.getElementById('videoContainerIframe').innerText = "An error occurred while fetching the video.";
            });
        }else {
            window.location.href = '/404.php'
        }
    </script>
</body>
</html>

