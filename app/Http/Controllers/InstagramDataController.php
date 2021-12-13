<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Phpfastcache\Helper\Psr16Adapter;

class InstagramDataController extends Controller
{
    public function index()
    {
        $instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client(), 'wazid_hussain_92', 'Pass4{Wazid@Insta}', new Psr16Adapter('Files'));
        $instagram->login(); // will use cached session if you want to force login $instagram->login(true)
        $instagram->saveSession();  //DO NOT forget this in order to save the session, otherwise have no sense
        $account = $instagram->getAccount('wazid_hussain_92');
        $accountMedias = $account->getMedias(); 
        foreach ($accountMedias as $key  => $accountMedia) {
            if ($key === 5) {
                break;
            }
            $images[$key] = str_replace("&amp;","&", $accountMedia->getimageHighResolutionUrl());     
            $path = $images[$key];
            $imageName = $key.'.png';
            $img = public_path('insta/images/') . $imageName;
            file_put_contents($img, file_get_contents($path));
        }
        return view('instagram', compact('images'));
    }
}
