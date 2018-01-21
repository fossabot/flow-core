<?php
namespace App\Helpers\Navigation;
 
use Illuminate\Support\Facades\DB;
 
class NavBuilder {
    /**
     * @param int $user_id User-id
     * 
     * @return string
     */
    public static function build_nav($id) {

    	$dd = DB::table('company_modules')->where('company_id', $id)->get();

    	$nav = array(
    		array('Accounts', '/accounts'),
    		array('Sales', '/sales')
    	);

    	return $dd;
    }
}