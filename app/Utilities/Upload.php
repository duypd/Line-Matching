<?php

namespace App\Utilities;


use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\Exception\UploadException;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Upload
{
    /**
     * @var UploadedFile
     */
    private $file;
    /**
     * @var
     */
    private $path;
    /**
     * @var
     */
    private $width;
    /**
     * @var
     */
    private $height;

    /**
     * Image constructor.
     * @param $path
     * @param $width
     * @param $height
     * @param UploadedFile $file
     */
    public function __construct($path, $width, $height, UploadedFile $file)
    {
        $this->file = $file;
        $this->path = $path;
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * Upload and resize image
     *
     * @param Model $model
     * @return array
     */
    public function handle(Model $model)
    {
        list($width, $height) = getimagesize($this->file->getRealPath());
        $check = false;
        $name = $model->getKey().'-'.time().str_random().'.'.$this->file->getClientOriginalExtension();

        if ($width > 1920) {
            $width = 1920;
            $check = true;
        }

        if ($height > 1020) {
            $height = 1020;
            $check = true;
        }

        // If width or height greater than
        if ($check) {
            // Before resize when upload
            \Image::make($this->file->getRealPath())
                ->resize($width, $height)
                ->save(public_path($this->path.'origin/').$name);
        } else {
            // Upload file
            $this->file->move(public_path($this->path.'origin/'), $name);
        }

        // Create thumbnail
        $resize = \Image::make(public_path($this->path.'origin/'.$name))
            ->resize($this->width, $this->height)
            ->save(public_path($this->path.'thumb/').$name);

        if(! $resize) {
            throw new UploadException('Error when resize image');
        }

        return [
            'origin' => $this->path.'origin/'.$name,
            'thumb' => $this->path.'thumb/'.$name
        ];
    }
}
