<?php

namespace App\Actions\Images;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Orchid\Attachment\Models\Attachment;

class SaveImage
{
    public function saveUserPhoto($photo): string
    {
        $path = 'user_' . Auth::id() . '/profile-photo';
        $stored = $this->writeFiles($path, $photo);
        return $stored['photo'];
    }

    private function writeFiles(string $path, $photo): array
    {
        if (!Storage::exists($path)) {
            Storage::makeDirectory($path, 0755, true);
        }

        $img = Image::make($photo->getPathname());

        if($img->height() > $img->width()) {
            $height = 300;
            $width = null;
        } else {
            $height = null;
            $width = 300;
        }

        $img->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });

        $filename = 'avatar.' . $photo->getClientOriginalExtension();
        $path = 'storage/user_' . Auth::id() . '/profile-photo/'. $filename;
        $img->save($path, 75);

        return ['photo' => $path];
    }
}
