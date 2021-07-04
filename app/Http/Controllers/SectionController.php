<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSectionRequest;
use App\Models\Section;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Section $section)
    {
        $sections = $section->get();
        return view('sections.index', compact('sections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreSectionRequest $request
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store(StoreSectionRequest $request)
    {
        Section::create(
            array_merge(
                $request->validated(),
                [
                    'user_id' => auth()->id()
                ]
            )
        );
        session()->flash('Add',__('section.Created successfully'));
        return redirect(route('sections.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Section $section
     * @return Response
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Section $section
     * @return Response
     */
    public function edit(Section $section)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param \App\Section $section
     * @return Response
     */
    public function update(Request $request, Section $section)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Section $section
     * @return Response
     */
    public function destroy(Section $section)
    {
        //
    }
}
