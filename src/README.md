Laravel Filesystem for cloudinary
=

base on [carlosocarvalho/flysystem-cloudinary](https://github.com/carlosocarvalho/flysystem-cloudinary)  

## Configuration
```php
...

'cloudinary' => [
    'driver' => 'cloudinary',
    'api_key' => env('CLOUDINARY_API_KEY'),
    'api_secret' => env('CLOUDINARY_API_SECRET'),
    'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
],

...
```

## Usage

```php
use Storage

// get fle url
Storage::url($path)

// get file url with options, options referance to: https://github.com/cloudinary/cloudinary_php#usage
Storage::getUrl($path, $options)
```