<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\CategoryRequestRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rows'] = Category::all();
        return view('category/index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('icon');
        if ($request->hasFile("icon")) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/icon'), $fileName);
            $request->request->add(['categoryIcon' => $fileName]);
        }

        $row = Category::create($request->all());
        if ($row) {
            $request->session()->flash('success', 'Category Created Successfully');
        } else {
            $request->session()->flash('error', 'Category Creation failed');

        }
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['row'] = Category::find($id);
        if(!$data['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('category.index');
        }
        return view('category.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['row'] = category::find($id);
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('category.index');
        }
        return view('category.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data['row'] = Category::find($id);
        if(!$data ['row']){
            request()->session()->flash('error','Invalid Request');
            return redirect()->route('category.index');
        }
        if ($data['row']->update($request->all())) {
            $request->session()->flash('success', 'Category update Successfully');
        } else {
            $request->session()->flash('error', 'Category Update failed');

        }
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data['row'] = Category::find($id);
        if ($data['row']) {
            if ($data['row']->delete()) {
                request()->session()->flash('success', 'Category Deleted Successfully');

            } else {
                request()->session()->flash('error', 'Category Deletion failed');
            }
        } else {
            request()->session()->flash('error', 'Invalid request');
        }
        return redirect()->route('category.index');
    }

    public function changeUserStatus(Request $request)
    {
        $categories = Category::find($request->id);
        $categories->status = $request->isPrimary;
        $categories->save();

        return response()->json(['success'=>'User status change successfully.']);
    }

}
