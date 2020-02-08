<?php

namespace App\Http\Controllers;

use App\Agent;
use Illuminate\Http\Request;
use Psy\Util\Str;

class AgentController extends Controller
{
    public function home()
    {
        return view('agent.home');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $agents = Agent::all();
        return view('agent.index', compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('agent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function store(Request $request)
    {
        $validatedData = $this->validateRequest($request);
        $validatedData['password'] = bcrypt($validatedData['password']);

        // TODO: Change the code according to business requirement.
        $validatedData['code'] = strtoupper(\Illuminate\Support\Str::random(6));
        // TODO: Change comission according to Agent level or Admin/Agent ::class.
        $validatedData['commission'] = 25;

        $agent = new Agent($validatedData);
        $agent->save();

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        $imagePath = 'uploads/' . $imageName;
        request()->image->move(public_path('uploads'), $imageName);

        $agent->image()->create([
            'url' => $imagePath
        ]);

        return redirect()->route('admin.agent.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(Agent $agent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit(Agent $agent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agent $agent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agent  $agent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agent $agent)
    {
        //
    }

    public function validateRequest(Request $request) {
        return $request->validate([
            'name' => 'required',
            'email' => 'required|unique:agents',
            'password' => 'required|confirmed|min:6',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'mobile_no' => 'required'
        ]);
    }
}
