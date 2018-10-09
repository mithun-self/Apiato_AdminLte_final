<?php

namespace App\Containers\Fee\UI\WEB\Controllers;

use App\Containers\Fee\UI\WEB\Requests\CreateFeeRequest;
use App\Containers\Fee\UI\WEB\Requests\DeleteFeeRequest;
use App\Containers\Fee\UI\WEB\Requests\GetAllFeesRequest;
use App\Containers\Fee\UI\WEB\Requests\FindFeeByIdRequest;
use App\Containers\Fee\UI\WEB\Requests\UpdateFeeRequest;
use App\Containers\Fee\UI\WEB\Requests\StoreFeeRequest;
use App\Containers\Fee\UI\WEB\Requests\EditFeeRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;
use Illuminate\Http\Request;
use App\Containers\Fee\Notifications\SomethingHappenedNotification;

/**
 * Class Controller
 *
 * @package App\Containers\Fee\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllFeesRequest $request
     */
    public function index(GetAllFeesRequest $request)
    {
        $fees = Apiato::call('Fee@GetAllFeesAction', [$request]);
        return view('fee::all_fees')->with(compact('fees'));
        // ..
    }

    /**
     * Show one entity
     *
     * @param FindFeeByIdRequest $request
     */
    public function show(FindFeeByIdRequest $request)
    {
        if($request->account_id > 0 || $request->id){
            $fee = Apiato::call('Fee@FindFeeByIdAction', [$request]);
        }else{
            $fee = Apiato::call('Accounts@GetAllAccountsForMerchantAction', [$request]);
        }
        return $fee;
        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateFeeRequest $request
     */
    public function create(CreateFeeRequest $request)
    {
        // ..
    }

    /**
     * Add a new entity
     *
     * @param StoreFeeRequest $request
     */
    public function store(StoreFeeRequest $request)
    {
        $fee = Apiato::call('Fee@CreateFeeAction', [$request]);
        return $fee;
        // ..
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditFeeRequest $request
     */
    public function edit(EditFeeRequest $request)
    {
        $fee = Apiato::call('Fee@GetFeeByIdAction', [$request]);
        return $fee;
        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateFeeRequest $request
     */
    public function update(UpdateFeeRequest $request)
    {
        $fee = Apiato::call('Fee@UpdateFeeAction', [$request]);
        \Notification::send($fee, new SomethingHappenedNotification('Fee Updated apiato'));
        return $fee;
        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteFeeRequest $request
     */
    public function delete(DeleteFeeRequest $request)
    {
         $result = Apiato::call('Fee@DeleteFeeAction', [$request]);
         return $result;
         // ..
    }

    public function checknotification() {
        return View('fee::notification');
    }

    public function testwebhook(Request $request){

        $user = $request->user();

        $user->notify(new SomethingHappenedNotification('Fee Created'));

        //\Notification::send($user, new SomethingHappenedNotification('Fee Created apiato'));

        return redirect()
            ->back()
            ->with('status','You will be notified by webhook');
    }
}
