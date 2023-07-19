<?php 
    namespace App\Services;
    use Illuminate\Support\Facades\File;

    class ImageUploadService 
    {
        public function upload($publicPath,$newImage,$oldImage=null,$fileSuffix='')
        {
            if (!is_null($newImage)) {
                if(File::exists($oldImage))
                {
                    File::delete($oldImage);
                }
                $imageName = time() . $fileSuffix ."." . $newImage->getClientOriginalExtension();
                $path = public_path($publicPath);
                $newImage->move($path, $imageName);
                return $publicPath . $imageName;
            }
            return $oldImage;
        }
    }
?>