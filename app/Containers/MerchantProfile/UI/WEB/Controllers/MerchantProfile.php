<?php

namespace App\Containers\MerchantProfile\UI\WEB\Controllers;

use App\Ship\Parents\Controllers\WebController;
use App\Containers\User\Models\User;
//use App\Containers\Fee\Data\Repositories\FeeRepository;
use Yajra\DataTables\Facades\DataTables;
use DB;
use Illuminate\Http\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use Artisan;

class MerchantProfile extends WebController
{
	/*protected $repository;

    public function __construct(FeeRepository $feerepository){
        $this->feerepository = $feerepository;
    }*/

	public function GetUsers(){
		return View('merchantprofile::users_table');
		//$users = Apiato::call('Customer@GetAllUsersAction', [$request]);

	}

	public function GetUsersList(){
		$users = Apiato::call('User@GetAllUsersAction');
		//return Datatables::of($users)->make(true);
		return $users;
	}

	public function GetRolesList(){
		return View('merchantprofile::roles_table');
	}

	public function RolesToTable(){
		return Datatables::of(DB::table('roles'))->make(true);
	}

	public function MerchantAccountUser(){
		return View('merchantprofile::merchant_account_user');
	}

	public function ConnectedUserAccounts(){
		return View('merchantprofile::connected_account_user');
	}

	public function ProcessingLimits(){
		return View('merchantprofile::processing_limits');
	}

	public function MerchantManagement(){
		return View('merchantprofile::merchant_management');
	}

	public function GetCustomers(){
		return View('merchantprofile::customers_table');
	}

	public function GetSubscriptions(){
		return View('merchantprofile::subscription_table');
	}

	public function GetSubscriptionPlans(){
		return View('merchantprofile::subscription_plans');
	}

	public function GetSubscriptionCoupons(){
		return View('merchantprofile::subscription_coupons');
	}

	public function GetSubscriptionInvoices(){
		return View('merchantprofile::subscription_invoices');
	}

	public function GetCustomerDetails(){
		return View('merchantprofile::customer_details');
	}

	public function SubscriptionDetails(){
		return View('merchantprofile::subscription_detail');
	}

	public function PlanDetails(){
		return View('merchantprofile::plan_details');
	}

	public function CouponDetails(){
		return View('merchantprofile::coupon_details');
	}

	public function InvoiceDetails(){
		return View('merchantprofile::invoice_details');
	}

	public function paymentlist(){
		return View('merchantprofile::payments');
	}

	public function disputes(){
		return View('merchantprofile::disputes');
	}

	public function paymentdetails(){
		return View('merchantprofile::payment_details')->with('old',
			\Config::get('credentials.APP_ENV'));
	}

	public function getbalance(){
		return View('merchantprofile::balance');
	}

	public function getpayouts(){
		return View('merchantprofile::payouts');
	}

	public function gettransactions(){
		return View('merchantprofile::transactions');
	}

	public function getpayoutdetails(){
		return View('merchantprofile::payoutdetails');
	}

	public function getaudit(){

		// Get first available Article$this->repository->all();
		//$article = $this->feerepository->first();
		// Get all associated Audits
		//$all = $article->audits;
		return View('merchantprofile::audit');
	}

	public function getauditlist(){

		// Get first available Article$this->repository->all();
		//$article = $this->feerepository->first();
		// Get all associated Audits
		//$all = $article->audits;
		$audits = Apiato::call('MerchantProfile@GetAllAuditsAction');
		return $audits;
		//return Datatables::of(\OwenIt\Auditing\Models\Audit::all())->make(true);
	}

































	/*public function getenv(Request $request){
		$key = $request->input('app_env');
		$value = $request->input('app_env_value');
		$this->setenv($key, $value);
	}
*/
	/*public function setenv($key, $value){
		\Artisan::call('config:clear');
		$old=\Config::get('credentials.APP_ENV');
		$path = base_path('.env');
		if(is_bool(env($key)))
    	{
        	$old = env($key)? 'true' : 'false';
    	}

		if (file_exists($path)) {
	        file_put_contents($path, str_replace(
	            "$key=".$old, "$key=".$value, file_get_contents($path)
	        ));
    	}
    	
    	//\Artisan::call('config:cache');
	}*/

}

