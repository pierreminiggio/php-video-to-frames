# php-video-to-frames

Requirements:
- PHP 7+
- ffmpeg in path

```console
composer require pierreminiggio/video-to-frames
```

```php
use PierreMiniggio\VideoToFrames\VideoFramer;

$framer = new VideoFramer();

$framer->frame('test-video.mp4', 'img/%d.png');
```
