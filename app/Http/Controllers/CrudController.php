<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directoryfile = storage_path() . '/app/public/data_blog.json';
        // dd($path);
        $getdata = file_get_contents($directoryfile);
        $data = json_decode($getdata, true);
        // return $data;
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'content' => 'required',
        ]);
        // return $request;
        $dir = file_get_contents(storage_path() . '/app/public/data_blog.json');
        $datas = json_decode($dir);
        $id[] = $datas;
        // return count($datas);
        $data = [
            'id' => count($datas) + 1,
            'title' => $request['title'],
            'author' => $request['author'],
            'content' => $request['content'],
        ];
        if ($datas != null) {
            array_push($datas, $data);
        } else {
            $datas = $data;
        }
        try {
            $save = json_encode($datas, JSON_PRETTY_PRINT);
            file_put_contents(storage_path() . '/app/public/data_blog.json', stripslashes($save));
            $path = storage_path() . '/app/public/data_blog.json';
            $res = file_get_contents($path);
            $data = json_decode($res, true);

            return view('index', compact('data'));
        } catch (\Throwable $th) {
            return $th;
            return view('form');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ds = file_get_contents(storage_path() . '/app/public/data_blog.json');
        $datas = json_decode($ds);
        $data = array();
        foreach ($datas as $item) {
            if ($item->id == $id) {
                $data['id'] = $item->id;
                $data['title'] = $item->title;
                $data['content'] = $item->content;
                $data['author'] = $item->author;
            }
        }
        return view('show_id', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ds = file_get_contents(storage_path() . '/app/public/data_blog.json');
        $datas = json_decode($ds);
        $data = array();
        foreach ($datas as $item) {
            if ($item->id == $id) {
                $data['id'] = $item->id;
                $data['title'] = $item->title;
                $data['content'] = $item->content;
                $data['author'] = $item->author;
            }
        }
        return view('editform', compact('data'));
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
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'content' => 'required'
        ]);

        $ds = file_get_contents(storage_path() . '/app/public/data_blog.json');
        $datas = json_decode($ds);
        $input['title'] = $request['title'];
        $input['author'] = $request['author'];
        $input['content'] = $request['content'];
        foreach ($datas as $item) {
            if ($item->id == $id) {

                $item->title = $input['title'];
                $item->content = $input['content'];
                $item->author = $input['author'];
            }
        }

        try {
            $save = json_encode($datas, JSON_PRETTY_PRINT);
            file_put_contents(storage_path() . '/app/public/data_blog.json', stripslashes($save));
            $path = storage_path() . '/app/public/data_blog.json';
            $res = file_get_contents($path);
            $data = json_decode($res, true);
            return view('index', compact('data'));
        } catch (\Throwable $th) {
            return $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = Storage::get("public/data_blog.json");
        $data = json_decode($file, true);

        unset($data[$id - 1]);

        $file = Storage::put("public/data_blog.json", $data);
        $data = json_encode($data, JSON_PRETTY_PRINT);

        return redirect('/');
    }
}
