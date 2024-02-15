<?php
namespace App\Modules\Image;

interface ImageRepositoryInterface{
   public function newImage(int $postId,string $filename);
   public function editImage(int $id,array $data);
   public function getImage(int $id);
   public function deleteImage(int $id);
   public function allImages();

}