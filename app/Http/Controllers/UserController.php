<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Imports\ChildImport;
use App\Imports\UsersImport;
use App\Jobs\ImportJob;
use App\Models\Account;
use App\Models\Invoice;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */
    public function index(Request $request):View
    {
        $users = User::whereNotNull('approved_at')->get();
        $users=$users->filter(function($value,$key){
            return ! $value->hasRole('admin');
        });

        return view('user.index', compact('users'));
    }

    /**
     * @param Request $request
     * @return View
     */
    public function create(Request $request):View
    {
        return view('user.create');
    }

    /**
     * @param UserStoreRequest $request
     * @return RedirectResponse
     */
    public function store(UserStoreRequest $request):RedirectResponse
    {

        $user = User::create($request->validated());


        $user->accounts()->save(new Account($request->only('owner','account_number')));
        dd($request->children);
        $request->session()->flash('user.id', $user->id);

        return redirect()->route('user.index');
    }

    /**
     * @param Request $request
     * @param User $user
     * @return View
     */
    public function show(Request $request, User $user):View
    {

        $invoice=Invoice::where('user_id',$user->id)->first();
        return view('user.show',[
            'user'=>User::whereId($user->id)->with(['children','partner','account'])->first(),
            'invoice'=>$invoice->id,
        ]);
    }

    /**
     * @param Request $request
     * @param User $user
     * @return Response
     */
    public function edit(Request $request, User $user):View
    {
        return view('user.edit', [
            'user'=>User::whereId($user->id)->with(['children','partner'])->first()
        ]);
    }

    /**
     * @param \App\Http\Requests\UserUpdateRequest $request
     * @param User $user
     * @return Response
     */
    public function update(UserUpdateRequest $request, User $user):RedirectResponse

    {
        $user->update($request->validated());

        $request->session()->flash('user.id', $user->id);

        return redirect()->route('user.index');
    }

    /**
     * @param Request $request
     * @param User $user
     * @return Response
     */
    public function destroy(Request $request, User $user):RedirectResponse
    {
        $user->delete();

        return redirect()->route('user.index');
    }


    /**
     * get_improved_user
     * get all improved user
     * @return View
     */
    public function get_improved_user():View{

        return view('user.improved',[
            'users'=>User::where('approved_at',null)->get()
        ]);
    }


    public function improve_user(Request $request,User $user):RedirectResponse{
        try {

            $user->approved_at=Carbon::now()->toDateTimeString();
            $user->save();
            $request->session()->flash('message','user approved with success');
            return redirect()->route('user.improved');
        }catch (\Exception $e){
            dd($e);
        }
    }

    /**
     * get all improved user
     * @return View
     */
    public function get_unimproved_users():View{
        $users=User::whereNull('approved_at')->get();

        return view('user.improved',[
            'users'=>$users->filter(function($value,$key){
                return !$value->hasRole('admin');
            }),
        ]);
    }


    /**
     * member_dashboard
     *
     * @return void
     */
    public function member_dashboard():View{
        $user=Auth::user();
        $user->hasRole('member');
        return view('members.index',[
            'user'=>$user,
            'invoices'=>DB::table('invoices')->select('invoices.*','plans.price')
                                                  ->join('plans','invoices.plan_id','plans.id')
                                                ->where('user_id', Auth::user()->id)

                                                   ->get()
        ]);
    }


    public function approve_all(Request $request):RedirectResponse{
        $request->validate(['user_id'=>'required']);
        $users=User::all();
        $users=$users->filter(function ($value,$key)use ($request){
            if(in_array($value->id,$request->user_id)){
                $value->approved_at=now();
                $value->save();
                return $value;
            }
        });
        $request->session()->flash('message','users was approved with sucess');
        return redirect()->route('user.improved');
    }

    public function import(Request $request):RedirectResponse{

        if($request->file('member') && $request->file('children')){
            //
            try {
                Excel::import(new UsersImport,$request->file('member') );
                Excel::import(new ChildImport,$request->file('children'));
                $request->session()->flash('message','we take care about your files');
                return redirect()->route('importe');
            }catch(\Exception $e){
                dd('nonnn'.$e->getMessage());

            }

        }
        /*
         *
        */

    }

    /**
     * @return View
     */
    public function profile():View{

        return \view('profile.index',[
            'user'=>User::whereId(Auth::user()->id)->with('children')->with('partner')->first(),
        ]);
    }


}
