<html>
  <head>
    <title>Video.js Test</title>
    <link rel="stylesheet" href="/player/style.css" />
    <link rel="stylesheet" href="/player/video-js.min.css" />
    <link rel="stylesheet" href="/player/videojs.ads.css" />
    <link rel="stylesheet" href="/player/videojs.ima.css" />
  </head>

  <body>
    <video id="content_video" class="video-js vjs-default-skin"
        poster = "../posters/bbb_poster.jpg" controls preload="auto" width="640"
        height="360" playsinline>
      <source src="http://dev.video.monu.delivery/video/a/2/dbf584-fc9c-4478-a5ce-e2afef20c4c8/video.mp4"
          type="video/mp4" />
    </video>
    <script src="//imasdk.googleapis.com/js/sdkloader/ima3.js"></script>
    <script src="/player/video.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-ads/6.6.5/videojs-contrib-ads.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-ima/1.8.0/videojs.ima.js"></script>
    <script src="/player/can-autoplay.min.js"></script>
    <script src="/player/ads.js"></script>
  </body>
</html>