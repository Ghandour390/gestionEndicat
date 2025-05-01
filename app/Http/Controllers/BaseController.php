<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected $model;
    protected $relations = [];
    protected $columns = [];
    protected $viewPath = 'liste';
    protected $routePrefix;

    public function index()
    {
        $data = $this->model::with($this->relations)->get();
        $thead = array_keys($this->columns);
        
        return view($this->viewPath, [
            'data' => $data,
            'thead' => $thead,
            'column' => $this->columns,
            'route' => $this->routePrefix,
            'title' => class_basename($this->model)
        ]);
    }

    public function edit($id)
    {
        $item = $this->model::with($this->relations)->findOrFail($id);
        
        return view('edit-form', [
            'item' => $item,
            'column' => $this->columns,
            'route' => $this->routePrefix,
            'title' => 'Modifier ' . class_basename($this->model)
        ]);
    }

    public function update(Request $request, $id)
    {
        $item = $this->model::findOrFail($id);
        $validated = $request->validate($this->getValidationRules());
        
        $item->update($validated);
        
        return redirect($this->routePrefix)
            ->with('success', 'L\'élément a été modifié avec succès.');
    }

    protected function getValidationRules()
    {
        $rules = [];
        foreach ($this->columns as $field => $type) {
            if (is_array($type) && isset($type['select'])) {
                $rules[$field] = 'required|exists:'.strtolower(class_basename($this->model)).'s,id';
            } elseif ($type === 'email') {
                $rules[$field] = 'required|email';
            } else {
                $rules[$field] = 'required';
            }
        }
        return $rules;
    }
}