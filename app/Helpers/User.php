<?php
namespace App\Helpers\Users;
 
use Illuminate\Support\Facades\DB;
 
class UserInfo {
    /**
     * @param int $user_id User-id
     * 
     * @return string
     */
    public static function get_company($user_id) {
        $user = DB::table('users')->where('id', $user_id)->first();
         
        return (isset($user->company) ? $user->company : '');
    }
}