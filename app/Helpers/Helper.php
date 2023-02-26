<?php
//DB
// use Illuminate\Support\Facades\DB;
if(!function_exists('get_settings')){
    function get_settings($key){
        return App\Models\Setting::value($key);
    }
}


?>
