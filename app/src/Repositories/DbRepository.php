<?php namespace App\Repositories;

use Illuminate\Support\Facades\DB;

abstract class DbRepository
{

    public function getAll()
    {
        $data = $this->model->get();
        
        // $list = DB::table($this->table)->get();
        return $data;
    }

    public function get()
    {
        return $this->model->get();
    }

    public function getModel()
    {
        return $this->model();
    }

    public function findById($id)
    {
        return $this->model->find($id);
    }

    public function save($model)
    {
//        $this->model = $model;
//        try
//        {
//            
//            $this->model->save();
//            
//        } catch (Exception $e) 
//        {
//           throw
//        }
        

       
    }

    public function getSelectable($displayName)
    {
        return $this->model->lists($displayName, 'id');
    }

    public function orderByAndPaginate($sortBy, $order, $perPage)
    {

        return $this->model->orderBy($sortBy, $order)->paginate($perPage);
    }

}
