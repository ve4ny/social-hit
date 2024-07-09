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
        $filenameWithExtension = $photo->getClientOriginalName();
        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
        $extension = $photo->getClientOriginalExtension();
        $filenameToStore = $filename . '_' . time() . '.' . $extension;

//        $storedPhoto = Storage::put($path, $photo);

//        $filenameWithExtension = $photo->getClientOriginalName();
//        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
//        $extension = $photo->getClientOriginalExtension();
//        $filenameToStore = $filename . '_' . time() . '.' . $extension;
//        $thumbnailToStore = $filename . '_small_' . time() . '.' . $extension;
//
        $storedPhoto = Storage::putFileAs(
            $path,
            $photo,
            $filenameToStore,
            [
                'visibility' => 'public',
                'directory_visibility' => 'public'
            ]
        );
//
//        $storedThumbnail = Storage::putFileAs(
//            $path . '/thumbnails',
//            $photo,
//            $thumbnailToStore,
//            [
//                'visibility' => 'public',
//                'directory_visibility' => 'public'
//            ]
//        );
//
//        $thumbnail = Image::make($photo)
//            ->resize(200, 150, function ($constraint) {
//                $constraint->aspectRatio();
//            });
//        $thumbnail->save(str_replace('public/', 'storage/', $storedThumbnail));

        return ['photo' => 'storage/' . $storedPhoto,
//            'thumbnail' => str_replace('public/', 'storage/', $storedThumbnail)
        ];
    }
}
