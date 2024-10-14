<script src="https://kit.fontawesome.com/846ee5dcb2.js" crossorigin="anonymous"></script>

<!-- STYLE NAVBAR -->
	<style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap');
      *{
      	font-family:'Poppins', sans-serif;
      }
      nav{
      	display:flex;
        width:100%;
        background:transparent;
        position:relative;
        justify-content:space-between;
        text-align:center;
        padding:15px 30px;
      }
      nav .icon a{
        font-size:30px;
        font-weight:600;
        color:#fff;
        cursor:pointer;
        margin-right: 30px;
    	margin-left: 10px;
        text-decoration:none;
      }
      nav ol{
      	display:flex;
        list-style:none;
        margin: 0 auto;
        margin-top: 10px;
      }
      nav ol li{
      	margin: 0 2px;
      }
      nav ol li a{
      	color:#fff;
        font-size:17px;
        font-weight: 400;
        text-decoration:none;
        text-transform:capitalize;
        letter-spacing:.5px;
        padding:5px 10px;
        
      }
      nav ol li:hover a{
      	background:#fff;
        color:#000;
        border-radius:10px;
      }
      nav .search-box{
      	display:flex;
        margin: auto 0;
        height: 35px;
        line-height:35px;
      }
      nav .search-box input{
      	border:none;
        outline:none;
        background:#fff;
        padding:0 10px;
        font-size:15px;
        width:350px;
        border-radius: 10px 0 0 10px;
      }
      nav .search-box span{
      	color:#07090e;
        font-size:20px;
        background:#fff;
        padding:8px;
        position:relative;
        cursor:pointer;
        z-index:1;
        border-radius: 0 10px 10px 0;
      }
      nav .search-box span::after{
      	height:100%;
        width:0%;
        content:'';
        background:#ff003c;
        position:absolute;
        top:0;
        left:0;
        z-index:-1;
        transition:0.3s;
        border-radius: 0 10px 10px 0;
      }
      nav .search-box span:hover{
         color:#fff;
      }
      nav .search-box span:hover::after{
      	 width:100%;
         color:#fff;
      }
      nav .bar{
      	position:relative;
        margin:auto;
        display:none;
      }
      nav .bar span{
      	position:absolute;
        color:#fff;
        font-size: 30px;
    	margin-top: -5px;
        margin-left: 32px;
      }
      input[type='checkbox']{
      	-webkit-appearance: none;
        display:none;
      }
      #bokep-indo,#uncensored {
          cursor: pointer;
      }
      @media screen and (max-width:1200px){
        nav{
          display:block;
          padding:0;
        }
        nav .icon{
          display:inline-block;
          padding: 5px 30px 15px;
        }
        nav .search-box{
          width:100%;
          display:inline-flex;
          justify-content:center;
          margin-bottom:15px;
          height:40px;
        }
        nav .search-box span{
          font-size:22px;
        }
        nav .search-box input{
       	  width:80%;
        }
        nav ol{
          display:flex;
          flex-direction:column;
          background:#fff;
          height:0;
          visibility: hidden;
          transition:0.3s;
          margin-top: 0px;
          width: 80%;
          border-radius:10px;
        }
        nav ol li{
          text-align:center;
          transition:0.2s 0.1s all;
          opacity:0;
        }
        nav ol li a{
          color:#000;
          font-size: 15px;
          font-weight: 400;
          padding: 10px;
          display:block;
          margin-left: -40px;
        }
        nav ol li:hover a{
          background: #000;
          color:#fff;
          padding: 10px 100px;
        }
        nav ol li:nth-child(1){
          transform: translateX(-150px);
        }
        nav ol li:nth-child(2){
          transform: translateX(-200px);
        }
        nav ol li:nth-child(3){
          transform: translateX(-250px);
        }
        nav ol li:nth-child(4){
          transform: translateX(-300px);
        }
        nav ol li:nth-child(5){
          transform: translateX(-350px);
        }
        nav .bar{
          display:block;
          position:absolute;
          top:20px;
          right:80px;
          cursor:pointer;
        }
        nav .bar #times{
          display:none;
        }
        #checkbox:checked ~ nav .bar #times{
          display:block;
        }
        #checkbox:checked ~ nav .bar #bars{
          display:none;
        }
        #checkbox:checked ~ nav ol{
          visibility:visible;
          height:220px;
          border-radius: 10px;
          display: flex;
          justify-content: center;
          align-items: center;
          width: 80%;
       
        }
        #checkbox:checked ~ nav ol li:nth-child(1),
        #checkbox:checked ~ nav ol li:nth-child(2),
        #checkbox:checked ~ nav ol li:nth-child(3),
        #checkbox:checked ~ nav ol li:nth-child(4),
        #checkbox:checked ~ nav ol li:nth-child(5){
          transform:translateX(0);
          opacity:1;
        }
      }
	</style>




<!-- STYLE CONTENT -->
	<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
      	*{
      		font-family:'Poppins', sans-serif;
      	}
        body {
            background-image: linear-gradient(to bottom, #090812, #111520 100vh, #07090e 200vh);
          	overflow-x: hidden;
        }
        .title {
            color: #FFF;
            font-size: 25px;
            font-weight: 500;
            padding: 5px 0 0 40px;
          	margin-top: 50px;
        }
        .video-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: left;
          	margin: 0 30px;
        }
        .video {
            width: calc(25% - 20px);
            margin: 10px;
            background-color: transparent;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        .video a {
            text-decoration: none;
        }
        .video img {
            width: 100%;
            height: auto;
            aspect-ratio: 16 / 9;
            border-radius: 5px;
          	object-fit: cover;
        }
        .video-title {
            color: #FFF;
            padding: 0px 0px 10px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 400;
            overflow: hidden;
            -webkit-line-clamp: 2;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            text-overflow: ellipsis;
            white-space: normal;
            margin-bottom: -8px;
        }
        .pagination {
            text-align: center;
            margin: 20px 0;
        }
        .pagination button, .pagination span {
            background-color: #333;
            color: #FFF;
            border: none;
          	border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            margin: 0 5px;
            transition: background-color 0.3s;
          	font-size: 16px;
        }
        .pagination button:hover {
            background-color: #555; /* Warna saat hover */
        }
        .pagination button.active {
            background-color: red; /* Warna saat aktif */
        }
      	.video-title-player {
            color: #FFF;
            font-size: 18px;
            margin: 10px 0 0 10px;
        }
      	.title-player{
      		color: #FFF;
            font-size: 25px;
            font-weight: 500;
            padding: 5px 0 0 10px;
          	margin-top: 20px;
      	}
      	.video-container-player {
          	margin: 0;
          	display: flex;
            flex-wrap: wrap;
            justify-content: left;
        }
      	.container {
            display: flex;
        }
        .main-content {
            width: 75%;
            padding-right: 30px;
          	margin-top: 30px;
        }
        .video-player {
            width: calc(100% - 20px);
            aspect-ratio: 16 / 9;
            background-color: transparent;
            margin: 0 auto;
        }
        .widget-right {
            width: 25%;
            background-color: transparent;
            margin-top: 45px;
        }
        .widget-title {
            color: #FFF;
            font-size: 20px;
            font-weight: 500;
            padding: 10px 0;
            text-align: center;
        }
      	.video-title-rekomendasi {
            color: #FFF;
            font-size: 14px;
          	overflow: hidden;
            -webkit-line-clamp: 2;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            text-overflow: ellipsis;
            white-space: normal;
        }
        .video-rekomendasi {
            width: calc(80%);
            margin: 0 auto;
          	margin-bottom: 25px;
        }
      	.video-rekomendasi-8 {
            width: calc(25% - 20px);
          	margin: 10px;
        }
      	.video-rekomendasi-8 img {
            width: 100%;
            height: auto;
            aspect-ratio: 16 / 9;
            border-radius: 5px;
        }
      	.video-rekomendasi-8 a, .video-rekomendasi a {
            text-decoration:none;
        }
      	
        .video-rekomendasi img {
            width: 100%;
            height: auto;
            aspect-ratio: 16 / 9;
            border-radius: 5px;
        }

        .video-title-widget {
            color: #FFF;
            font-size: 14px;
            text-align: center;
            padding: 5px 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

      	.iframeContainer {
            width: 100%;
            background: transparent;
            border-radius: 0 0 20px 10px;
            padding: 0 0 7px 0;
        }
      	.iframe{
      		margin-top:5px;
      	}
      	.video-title-status {
            color: #FFF;
            font-size: 12px;
            margin: 0 5px 0 10px;
            display: inline;
        }
        .video-watch-status {
            color: #FFF;
            font-size: 14px;
            margin: 0 5px 0 10px;
            display: block;
        }
        .video-watch-status a {
            color: #FFF;
            text-decoration: none;
        }
        .space {
            margin-right: 5px;
        }
        #preloader{
          margin:0;
          padding:0;
          background: #111520  url('/templates/preloader.gif') no-repeat center center;
          background-size: 15%;
          width: 100%;
          height: 100vh;
          position: fixed;
          z-index: 100;
          transition: opacity .3s ease-in-out;
          opacity: 1;
          visibility: visible;
          overflow: none;
      	}
        @media only screen and (max-width: 800px) {
            .video {
                width: calc(33% - 20px);
            }
            .video-title {
                font-size: 13px;
            }
          	.video-title-player {
                color: #FFF;
                font-size: 15px;
                margin: 10px 0 0 10px;
            }
            .title {
                color: #FFF;
                font-size: 20px;
              	padding: 5px 0 0 10px;
            }
          	.title-player{
                font-size: 20px;
            }
          	.video-container {
                margin: 0 0px;
            }
         	.pagination button, .pagination span {
                padding: 8px 12px;
                margin: 0px;
              	font-size: 14px;
            }
          	.container {
                flex-direction: column;
            }
            .main-content{
                width: 100%!important;
            }
            .video-rekomendasi-8 {
                width: calc(50% - 20px);
                margin: left;
            }
          	.widget-right{
          		display: none;
          	}
          	.video-player-title {
                font-size: 16px;
            }
          	.video-title-rekomendasi {
                font-size: 13px;
            }
          	.video-title-status {
                font-size: 10px;
            }
            .video-watch-status {
                font-size: 13px;
            }
        }
      	@media only screen and (min-width: 800px) {
            .widget-title {
                display:none;
            }
          	.video-rekomendasi img {
                margin-top: -10px;
            }
          	#preloader{
				display:none;
            }
        }
        @media only screen and (max-width: 500px) {
            .video {
                width: calc(50% - 20px);
            }
        }

    </style>