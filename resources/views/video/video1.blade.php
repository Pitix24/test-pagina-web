<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Video 1</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            background: #000;
        }

        video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <video src="{{ asset('videos/video1.mp4') }}" autoplay muted loop controls></video>

</body>
</html>
