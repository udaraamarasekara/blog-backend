<?php
namespace App\Modules\Image;
use Illuminate\Support\Facades\Storage;

class ImageService{

    public function __construct(protected ImageRepositoryInterface $imageRepository)
    {
       
    }

    
    public function editImage($data)
    {
      return $this->imageRepository->editImage($data);
    }
    public function newImage(int $id,$file)
    {
      $imageName = time(). '_' . $file->getClientOriginalName();
      Storage::disk('public')->put($imageName,file_get_contents($file));
      $this->imageRepository->newImage($id,$imageName);
    }

    public function getImage(int $id)
    {
      return $this->imageRepository->getImage($id);
    }
    public function allImages()
    {
      return $this->imageRepository->allImages();
    }
   
    public function deleteImage(int $id)
    {
      return $this->imageRepository->deleteImage($id);
    }

}