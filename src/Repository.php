<?php
namespace Shetabit\Base;

use App\Traits\Images;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Repository
{
    // use Images;

    public $model;
    private $app;

    public function __construct(App $app)
    {
        $this->app = $app;
        $this->makeModel();
    }


    public function all()
    {
        return $this->model->all();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function update($model, array $data)
    {
        foreach ($data as $key => $value) {
            $model->{$key} = $value;
        }

        $model->save();

        return $model;
    }

    public function delete($model)
    {
        return $model->delete();
    }

    public function makeModel()
    {
        if (method_exists($this, 'model')) {
            $model = app($this->model());

            if ($model instanceof Model || $model instanceof \Illuminate\Foundation\Auth\User) {
                return $this->model = $model;
            } else {
                throw new \Exception("Class {$this->model()} must be an instance of Model");
            }
        }
    }

    public function storeFile($file, $dir)
    {
        $filename = md5(generateRandomCharacters(5)) . '.' . $file->getClientOriginalExtension();
        Storage::disk('public_files')->PutFileAs($dir, $file, $filename);
        return $filename;
    }

    public function deleteFile($file)
    {
        return Storage::disk('public_files')->delete($file);
    }
}