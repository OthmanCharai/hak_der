<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChildStoreRequest;
use App\Http\Requests\ChildUpdateRequest;
use App\Models\Child;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ChildController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */
    public function index(Request $request):View
    {
        $children = Child::all();
        $children= $children->filter(function($item){
            if($item->age<=17){
                return $item;
            };
        });
        
        return view('child.index', compact('children'));
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function create(Request $request)
    {
        return view('child.create');
    }

    /**
     * @param \App\Http\Requests\ChildStoreRequest $request
     * @return Response
     */
    public function store(ChildStoreRequest $request)
    {
        $child = Child::create($request->validated());

        $request->session()->flash('child.id', $child->id);

        return redirect()->route('child.index');
    }

    /**
     * @param Request $request
     * @param \App\Models\Child $child
     * @return Response
     */
    public function show(Request $request, Child $child)
    {
        return view('child.show', compact('child'));
    }

    /**
     * @param Request $request
     * @param \App\Models\Child $child
     * @return Response
     */
    public function edit(Request $request, Child $child)
    {
        return view('child.edit', compact('child'));
    }

    /**
     * @param \App\Http\Requests\ChildUpdateRequest $request
     * @param \App\Models\Child $child
     * @return Response
     */
    public function update(ChildUpdateRequest $request, Child $child)
    {
        $child->update($request->validated());

        $request->session()->flash('child.id', $child->id);

        return redirect()->route('child.index');
    }

    /**
     * @param Request $request
     * @param \App\Models\Child $child
     * @return Response
     */
    public function destroy(Request $request, Child $child)
    {
        $child->delete();

        return redirect()->route('child.index');
    }
}
