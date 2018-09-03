<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Intervention\Image\ImageManager;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    /**
     * @var array
     */
    private $formats;
    /**
     * @var string
     */
    private $file;

    /**
     * Create a new job instance.
     *
     * @return void
     */


    public function __construct(array $formats, string $file)
    {

        $this->formats = $formats;
        $this->file = $file;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        foreach ($this->formats as $format) {
            $manager = new ImageManager(['driver' => 'gd']);

            $manager->make($this->file )
                ->fit($format, $format)
                ->rotate(45)
                ->save(public_path('uploads') . "/".pathinfo($this->file,PATHINFO_FILENAME)."_{$format}x{$format}.jpg");

        }
    }

}

