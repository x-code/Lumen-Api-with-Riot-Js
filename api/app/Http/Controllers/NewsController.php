<?php 

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Validator;

class NewsController extends Controller {

    public function __construct(News $news) {
        $this->news = $news;
    }

    public function index() {
        $data = $this->news->query()->get();
        // $result = array('data' => $data);
        return response($data);
    }

    public function create(Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
        ]);
        if ($validator->fails()) {
            return response(['error' => $validator->errors()->all()], 422);
        }
        $news = new $this->news;
        $news->title = $request->input('title');
        $news->content = $request->input('content');
        $news->save();
        
        return response($news, 201);
    }

    public function get($id) {
        $news = $this->news->query()->find($id);
        if($news) {
            return response($news);
        }
        else {
            return response(['error' => 'Not found news for ID '. $id], 404);
        }
    }

    public function update(Request $request, $id) {
        $news = $this->news->query()->find($id);
        if($news) {
            $validator = Validator::make($request->all(), [
                'title' => 'required',
            ]);
            if ($validator->fails()) {
                return response(['error' => $validator->errors()->all()], 422);
            }
            else {
                $news = $this->news->query()->find($id);
                $news->title = $request->input('title');
                $news->content = $request->input('content');
                $news->save();

                return response($news);
            }
        }
        else {
            return response(['error' => 'Not found news for ID '. $id], 404);
        }
    }

    public function delete($id) {
        $news = $this->news->query()->find($id);
        if($news) {
            $this->news->query()->findOrFail($id)->delete();
            return response(['id' => $id]);
        }
        else {
            return response(['error' => 'Not found news for ID '. $id], 404);
        }
    }

}