<?php

namespace App\Services;

use Cloudinary\Cloudinary;
use Exception;

class CloudinaryService
{
    protected $cloudinary;

    public function __construct()
    {
        $this->cloudinary = new Cloudinary([
            'cloud' => [
                'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
                'api_key' => env('CLOUDINARY_API_KEY'),
                'api_secret' => env('CLOUDINARY_API_SECRET'),
            ],
        ]);
    }

    public function uploadImage($file, $folder = 'general')
    {
        try {            // Determine SSL verification based on environment
            $verifySSL = app()->environment('production');
            
            $options = [
                'folder' => $folder,
                'resource_type' => 'image',
                'http_options' => [
                    'verify' => $verifySSL  // Enable SSL verification in production, disable in development
                ]
            ];

            $upload = $this->cloudinary->uploadApi()->upload(
                $file->getRealPath(),
                $options
            );

            return $upload['secure_url'];
        } catch (Exception $e) {
            \Log::error('Cloudinary Upload Error: ' . $e->getMessage());
            throw new Exception('Erreur lors du téléchargement de l\'image: ' . $e->getMessage());
        }
    }
}
