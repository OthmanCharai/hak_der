<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlanStoreRequest;
use App\Http\Requests\PlanUpdateRequest;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $plans = Plan::all();

        return view('plan.index', compact('plans'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('plan.create');
    }

    /**
     * @param \App\Http\Requests\PlanStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlanStoreRequest $request)
    {
        $plan = Plan::create($request->validated());

        $request->session()->flash('plan.id', $plan->id);

        return redirect()->route('plan.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Plan $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Plan $plan)
    {
        return view('plan.show', compact('plan'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Plan $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Plan $plan)
    {
        return view('plan.edit', compact('plan'));
    }

    /**
     * @param \App\Http\Requests\PlanUpdateRequest $request
     * @param \App\Models\Plan $plan
     * @return \Illuminate\Http\Response
     */
    public function update(PlanUpdateRequest $request, Plan $plan)
    {
        $plan->update($request->validated());

        $request->session()->flash('plan.id', $plan->id);

        return redirect()->route('plan.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Plan $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Plan $plan)
    {
        $plan->delete();

        return redirect()->route('plan.index');
    }
}
