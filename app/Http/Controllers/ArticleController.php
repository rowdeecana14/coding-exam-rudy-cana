<?php

namespace App\Http\Controllers;

use App\Model\ArticleModel;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    protected function list() {
        $articles = ArticleModel::all();
        return view('article.list', compact('articles'));
    }

    protected function create() {
        return view('article.create');
    }

    protected function delete($id) {
        ArticleModel::destroy($id);
        return redirect()->route('article.list');
    }

    protected function edit($id) {
        $article = ArticleModel::find($id);
        return view('article.edit', compact('article'));
    }

    protected function show($id) {
        $article = ArticleModel::find($id);
        return view('article.show', compact('article'));
    }

    protected function update(Request $request, $id) {
        ArticleModel::find($id)->update($request->all());
        return redirect()->route('article.list');
    }
    
    protected function store(Request $request) {
        $data = $request->all();
        $data['votes'] = 0;
        ArticleModel::create($data);
        return redirect()->route('article.list');
    }
}
