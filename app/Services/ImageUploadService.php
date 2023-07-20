<?php 
    namespace App\Services;
    use Illuminate\Support\Facades\File;

    class ImageUploadService 
    {
        public function upload($folderName,$newImage,$oldImage=null,$fileSuffix='')
        {
            if (!is_null($newImage)) {
                if(File::exists($oldImage))
                {
                    File::delete($oldImage);
                }
                $folderName = 'images/' . $folderName . '/';
                $uploadPath = "app/public/" . $folderName; 
                $imageName = time() . $fileSuffix ."." . $newImage->getClientOriginalExtension();
                $path = storage_path($uploadPath);
                $newImage->move($path, $imageName);
                return "storage/" . $folderName . $imageName;
            }
            return $oldImage;
        }
    }
?>