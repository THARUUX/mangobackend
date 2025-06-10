<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryType;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = Category::orderBy('created_at', 'desc')->get();
        $categoryTypes = CategoryType::all();
        $status = Status::all();
        $totalCategories = $categories->count();
        $activeCategories = $categories->where('status', '1')->count();
        $inactiveCategories = $categories->where('status', '0')->count();

        return view('backend.pages.category.index')->with('datas', $categories)
            ->with('totalCategories', $totalCategories)
            ->with('activeCategories', $activeCategories)
            ->with('inactiveCategories', $inactiveCategories)
            ->with('categoryTypes', $categoryTypes)
            ->with('statuses', $status);
    }

    public function edit($id)
    {
        $data = Category::find($id);
        return response()->json(['success' => true, 'data' => $data]);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'type' => 'required|not_in:0',
            'status' => 'required',
        ], [
            'name.required' => 'The name field is required.',
            'type.required' => 'The type field is required.',
            'type.not_in' => 'Please select a valid type.',
            'status.required' => 'The status field is required.',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }

        $category = new Category();
        $category->name = $request->name;
        $category->category_type_id = $request->type;
        $category->status_id = $request->status;
        $category->save();

        return response()->json(['success' => true, 'message' => 'Category added successfully.']);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'type' => 'required|not_in:0',
            'status' => 'required',
        ], [
            'name.required' => 'The name field is required.',
            'type.required' => 'The type field is required.',
            'type.not_in' => 'Please select a valid type.',
            'status.required' => 'The status field is required.',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'message' => $validator->errors()->first()]);
        }

        $category = Category::find($request->categoryId);

        if (!$category) {
            return response()->json(['success' => false, 'message' => 'Category not found']);
        }

        $category->name = $request->name;
        $category->category_type_id = $request->type;
        $category->status_id = $request->status;
        $category->save();

        return response()->json(['success' => true, 'message' => 'Category updated successfully.']);
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return response()->json(['success' => true, 'message' => 'Category deleted successfully.']);
    }
}
