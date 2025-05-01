<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function toggleForm(Request $request)
    {
        if ($request->session()->has('show_form')) {
            $request->session()->forget('show_form');
        } else {
            $request->session()->put('show_form', true);
        }
        
        return back();
    }

    public function edit($id)
    {
        $model = $this->getModelFromRoute();
        $item = $model::findOrFail($id);
        
        return view('edit-form', [
            'item' => $item,
            'route' => $this->getRoutePrefix(),
            'column' => $this->getColumns($model)
        ]);
    }

    protected function getModelFromRoute()
    {
        $segments = request()->segments();
        $modelName = ucfirst(rtrim(end($segments), 's'));
        $modelClass = "App\\Models\\{$modelName}";
        
        if (!class_exists($modelClass)) {
            abort(404);
        }
        
        return $modelClass;
    }

    protected function getRoutePrefix()
    {
        return '/'.request()->segment(1);
    }

    protected function getColumns($modelClass)
    {
        $model = new $modelClass;
        return $model->getFillable();
    }
}