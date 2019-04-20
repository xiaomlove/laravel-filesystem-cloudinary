<?php

namespace Chenyulingxi\LaravelFilesystem\Cloudinary;

use CarlosOCarvalho\Flysystem\Cloudinary\CloudinaryAdapter as CarlosOCarvalhoCloudinaryAdapter;

class CloudinaryAdapter extends CarlosOCarvalhoCloudinaryAdapter
{
    public function getUrl($path, array $options = ['format' => 'jpg'])
    {
        return cloudinary_url($path, $options);
    }
}