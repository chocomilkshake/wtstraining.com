<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Meeting</title>
    <style>
        #localVideo, #remoteVideos {
            width: 320px;
            height: 240px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Video Meeting</h1>
    <div>
        <video id="localVideo" autoplay muted></video>
        <div id="remoteVideos"></div>
    </div>

    <!-- Include SimpleWebRTC library -->
    <script src="https://simplewebrtc.com/latest-v3.js"></script>
    <script>
        const webrtc = new SimpleWebRTC({
            localVideoEl: 'localVideo',
            remoteVideosEl: 'remoteVideos',
            autoRequestMedia: true,
            debug: false,
            detectSpeakingEvents: true,
            autoAdjustMic: false
        });

        // Join the room
        webrtc.on('readyToCall', function () {
            webrtc.joinRoom('your-room-name');
        });
    </script>
</body>
</html>
