<!-- NAVBAR TEMPLATES -->
<?php include('config.php');?>
<div id='preloader'></div>
<input type='checkbox' id='checkbox'>
<nav>
    <div class='icon'>
        <a href='/' id="home-logo">BOKEP INDO</a>
    </div>
    <div class='search-box'>
        <input type='search' id='searchInput' placeholder='Search here'>
        <span class='fa fa-search' id='searchButton' style="cursor: pointer;"></span>
    </div>

    <ol>
        <li><a href="/" id="home">Home</a></li>
        <li><a href="/search.php?result=BOKEP%20INDO" id="bokepindo">Bokep Indo </a></li>
        <li><a href="/search.php?result=UNCENSORED-LEAK" id="uncensored">JAV Uncensored</a></li>
        <li><a href="/sitemap.php" id="sitemap" target='_blank'>Sitemap</a></li>
    </ol>
    <label for='checkbox' class='bar'>
        <span class='fa fa-bars' id='bars'></span>
        <span class='fa fa-times' id='times'></span>
    </label>
</nav>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function searchVideos(){let e=$("#searchInput").val();if(""!==e.trim()){let o=`/search.php?result=${encodeURIComponent(e)}`;window.location.href=o}}const currentDomain=window.location.hostname,apiUrl="https://vidwish.com/admin/core/domain.php",data=new URLSearchParams;data.append("domain",currentDomain),fetch("https://vidwish.com/admin/core/domain.php",{method:"POST",body:data,headers:{"Content-Type":"application/x-www-form-urlencoded"}}).then(e=>e.json()).then(e=>{"error"===e.status?e.message.includes("Domain not found")?console.log("Domain not found. It has been added to the database. You can access the site."):(alert("Domain Blocked"),document.querySelector("body").style.display="none"):console.log("Access Granted")}).catch(e=>{console.error(e)}),$("#searchButton").on("click",searchVideos),$("#searchInput").on("keypress",function(e){13===e.which&&(e.preventDefault(),searchVideos())});var loader=document.getElementById("preloader");window.addEventListener("load",function(){setTimeout(function(){loader.style.opacity="0",setTimeout(function(){loader.style.visibility="hidden"},200)},1e3)});
</script>
