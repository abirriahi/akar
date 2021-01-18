<?php


function getSetting ($settingname = 'sitename'){
    return \App\SiteSetting::where('namesetting' , $settingname)->get()[0]->value;
}

function checkIfImageIsexist($imageName , $pathImage = '/public/website/bu_images/' , $url = '/website/bu_images/'){
    if($imageName != ''){
        $path = base_path().$pathImage.$imageName;
        if(file_exists($path)){
            return Request::root().$url.$imageName;
        }
    }else{
         return getSetting('no_image');
    }

}

function uploadImage($request , $path = '/public/website/bu_images/' , $width ='500' , $height = '362', $deleteFileWithName = ''){
    if($deleteFileWithName != ''){
        deletimage(base_path().$path.'/'.$deleteFileWithName);
    }
    $dim = getimagesize($request);
    $fileName = $request->getClientOriginalName();
    $request->move(
        base_path().$path , $fileName
    );
    if($width == '500' && $height == '362'){
        $thumbPath = base_path().'/public/website/thumb/';
        $thumbPathNew = $thumbPath.$fileName;
        \Intervention\Image\Facades\Image::make(base_path().$path.'/'.$fileName)->resize('500', '362')->save($thumbPathNew , 100);
        if($deleteFileWithName != ''){
            deletimage($thumbPath.$deleteFileWithName);
        }
    }
    return $fileName;
}

function deletimage($deleteFileWithName)
{
    if(file_exists($deleteFileWithName)){
        \Illuminate\Support\Facades\File::delete($deleteFileWithName);
    }
}

function setActive($array , $class = "active")
{
    if(!empty($array)){
        $seg_array = [];
        foreach($array as $key => $url){
            if(Request::segment($key+1) == $url){
                $seg_array[] = $url;
            }
        }
        if(count($seg_array) == count(Request::segments())){
            if(isset($seg_array[0])){
                return $class;
            }
        }
    }
}

function buforuserCount($user_id , $status){
    return \App\Bu::where('bu_status' , $status)->where('user_id' , $user_id)->count();
}

function countAllBuAppendTostatus($status){
    return \App\Bu::where('bu_status' , $status)->count();
}

function getNotActiveBu(){
    return \App\Bu::where('bu_status' , 0)->get();
}

function bu_type()
{
    $array = [
        "0" => trans('home.appartement'),
        "1" => trans('home.villa'),
        "2" => trans('home.maison'),
        "3" => trans('home.loceauxmommerciaux'),

    ];
    return $array;
}

function bu_rent(){
    $array = [
        "0"=>trans('home.location'),
        "1"=>trans('home.vente'),
        
    ];
    return $array;
}

function status(){
    $array = [
       "valider"=>trans('home.valider'),
       "refuser"=>trans('home.refuser'),
       'غير مفعل',
        'مفعل',
    ];
    return $array;
}
 function roomnumber(){
     $array = [];
     for($i = 2;$i <= 10;$i++){
         $array[$i] = $i;
     }
     return $array;
 }



function searchnameFiled(){
    return [
        'bu_price' => '  سعر العقار ',
        'bu_plcae'=> ' منطقة العقار  ',
        'rooms'=> ' عدد الغرف  ',
        'bu_type'=> ' نوع العقار  ',
        'bu_rent'=> '  نوع العملية ',
        'bu_square'=> '  المساحة ',
        'bu_price_to'=> '   السعر الي ',
        'bu_price_from'=> '  السعر من ',

    ];
}

function contact(){
    $array = [

        "1" =>  trans('home.1') ,
        "2" =>trans('home.2'),
        "3" => trans('home.3'),
        "4" => trans('home.4'),
];
    return $array;
}

function unreadMessage(){
    return \App\ContactUs::where('view'  , 0)->get();
}

function countunreadMessage(){
    return \App\ContactUs::where('view'  , 0)->count();
}





function bu_place()
{
    $array = [

        "n-1" =>  trans('home.n-1') ,
        "n-2" =>trans('home.n-2'),
        "n-3" => trans('home.n-3'),
        "n-4" => trans('home.n-4'),
        "n-5" => trans('home.n-5'),
        "n-6" => trans('home.n-6'),
        "n-7" => trans('home.n-7'),
        "n-8" => trans('home.n-8'),
        "n-9" => trans('home.n-9'),
        "n-10" => trans('home.n-10'),
        "n-11" => trans('home.n-11'),
        "n-12" => trans('home.n-12'),
        "n-13" => trans('home.n-13'),
        "n-14" => trans('home.n-14'),
        "n-15" => trans('home.n-15'),
        "n-16" => trans('home.n-16'),
        "n-17" => trans('home.n-17'),
        "n-18" => trans('home.n-18'),
        "n-19" => trans('home.n-19'),
        "n-20" => trans('home.n-20'),
        "n-21" => trans('home.n-21'),
        "n-22" => trans('home.n-22'),
        "n-23" => trans('home.n-23'),
        "n-24" => trans('home.n-24'),


    ];
    return $array;
}



