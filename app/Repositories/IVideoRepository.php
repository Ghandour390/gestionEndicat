<?php
namespace App\Repositories;

interface IVideoRepository{
    public function getAllVideos();
    public function deleteVideos($id);
    public function createVideo(array $Data);
}