<?php


namespace App\Services;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

use Image;
use File;

use Alert;


class UploadService
{
	public static function saveImageBase64($image_64, $folder, $filename)
	{
		try
		{
			
			$folder		= str_replace('//', '/', $folder.'/');

			$extension  = explode('/', explode(':', substr($image_64, 0, strpos($image_64, ';')))[1])[1];
			$replace    = substr($image_64, 0, strpos($image_64, ',')+1); 

			$image      = str_replace($replace, '', $image_64); 
			$image      = str_replace(' ', '+', $image); 
			$imageName  =  $folder.$filename.'.'.$extension;
			
			Storage::disk('local')->put($imageName, base64_decode($image), 'public');
			
			$image 		= 'storage/'.str_replace('public/', '', $imageName);

			return $image;


		}
		catch (\Throwable $th)
		{

			Alert::error( __('creatives.error'), __('creatives.upload_image_error') );
		}
	}

}
