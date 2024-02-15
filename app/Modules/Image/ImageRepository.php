<?php 
namespace App\Modules\Image;
use App\Models\Image;
class ImageRepository implements ImageRepositoryInterface{
 public function newImage(int $postId, string $filename)
 {
   Image::create(['post_id'=>$postId,'image'=>$filename]);
 }

 public function editImage(int $id, array $data)
 {

 }

 public function getImage(int $id)
 {

 }
 public function allImages()
 {

 }

 public function deleteImage(int $id)
 {
   
 }
}