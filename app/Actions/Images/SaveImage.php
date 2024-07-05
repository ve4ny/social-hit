<?php

namespace App\Actions\Images;

use Illuminate\Support\Facades\Storage;
use Orchid\Attachment\Models\Attachment;

class SaveImage
{
    public static function save(int $image, string $catalog): string
    {
        $attachment = Attachment::where('id', $image)->first();
        $path = $attachment->path . $attachment->name . '.' . $attachment->extension;
        $newPath = $catalog . '/' . $attachment->name . '.' . $attachment->extension;
        if(Storage::exists($path))
        {
            Storage::copy($path, $newPath);
            Storage::delete($path);
        }
        return 'storage/' . $newPath;
    }
}
