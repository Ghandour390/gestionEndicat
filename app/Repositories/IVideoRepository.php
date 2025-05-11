<?php
namespace App\Repositories;

interface IVideoRepository{
    public function getAllVideos();
    public function getAllVideosbyCours($coursid);
    public function deleteVideos($id);
    public function createVideo(array $Data);
    public function updateVideo($id, array $data);
}