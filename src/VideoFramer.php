<?php

namespace PierreMiniggio\VideoToFrames;

class VideoFramer
{

    public function frame(string $videoFilename, string $frameFilenameTemplate, int $fps = 1): void
    {

        if (! str_contains($frameFilenameTemplate, '%d')) {
            throw new BadFrameFilenameTemplateException(
                'You need to have "%d" in your template string to host the frame number'
            );
        }

        if (! file_exists($videoFilename)) {
            throw new InvalidVideoFileException();
        }

        shell_exec(
            'ffmpeg -i '
                . escapeshellarg($videoFilename)
                . ' -vf fps='
                . $fps
                . ' '
                . escapeshellarg($frameFilenameTemplate)
        );
    }
}
