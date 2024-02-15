<?php
namespace App\Modules\Post;
use App\Modules\Image\ImageService;
use DB;
class PostService{

    public function __construct(protected PostRepositoryInterface $postRepository,protected ImageService $imageService)
    {
       
    }
    
    public function newPost(array $data)
    {
      try
      {
       DB::beginTransaction();
       $postId= $this->postRepository->newPost($data)->id;
       foreach($data['files'] as $file)
       {
        $this->imageService->newImage($postId,$file);
       }  
       DB::commit();
      }
      catch(\Exception $e)
      {
       DB::rollBack(); 
       return $e; 
      }

    }
    public function editPost(int $id, array $data)
    {
      try
      {
       DB::beginTransaction();
       $this->postRepository->editPost($id,$data);
       foreach($data['files'] as $file)
       {
        $this->imageService->editImage($file);
       }
       DB::commit();
      }
      catch(\Exception $e)
      {
       DB::rollBack(); 
       return $e; 
      }
      return $this->postRepository->editPost($id,$data);
    }
   
    public function getPost(int $id)
    {
      try
      {
       DB::beginTransaction();
       DB::commit();
      }
      catch(\Exception $e)
      {
       DB::rollBack(); 
       return $e; 
      }
      return $this->postRepository->getPost($id);
    }
    public function allPosts()
    {
      try
      {
       DB::beginTransaction();
       DB::commit();
      }
      catch(\Exception $e)
      {
       DB::rollBack(); 
       return $e; 
      }
      return $this->postRepository->allPosts();
    }
   
    public function deletePost(int $id)
    {
      try
      {
       DB::beginTransaction();
       DB::commit();
      }
      catch(\Exception $e)
      {
       DB::rollBack(); 
       return $e; 
      }
      return $this->postRepository->deletePost($id);
    }

}