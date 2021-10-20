<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voice</title>
    <link rel="stylesheet" href="{{ asset('css/timeline.css') }}">
</head>
<body>
    <div class="wrapper">
        <form action="/timeline" method="post">
            @csrf
            <div class="post-box">
                <input type="text" name="voice" placeholder="使ってみたあなたの声を聞かせてください">
                <button type="submit" class="submit-btn">ボイスアップ</button>
            </div>
        </form>

        <div class="voice-wrapper">
            @if(isset($voice))
                @forearch($voices as $voice)
                    <div class="voice-box">
                        <div>{{ $voice -> voice }}</div>
                    </div>
                @endforearch
            @endisset
        </div>
    </div>

    
</body>
</html>