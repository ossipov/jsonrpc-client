<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\JsonRpcClient;

class PagesController extends Controller
{
    protected $client;

    public function __construct(JsonRpcClient $client)
    {
        $this->client = $client;
    }

    public function index()
    {
        $data = $this->client->send('getPages',[]);

        return view('pages.list', [
            'data' => $data
        ]);
    }

    public function edit(Request $request)
    {
        $data = $this->client->send('getPage',[
            'page_uid' => $request->page_uid
        ]);

        return view('pages.edit', [
            'page_uid' => $request->page_uid,
            'page_fields' => $data
        ]);        
    }

    public function update(Request $request)
    {
        $data = $this->client->send('updPage',[
            'page_title' => $request->title,
            'page_description' => $request->description,
            'page_uid' => $request->page_uid,
        ]);

        $flash = $data ? [
            'type' => 'success',
            'msg' => 'Page was updated successfully'
        ] : [
            'type' => 'error',
            'msg' => 'Could not update the Page'
        ];

        return redirect('/view/'.$request->page_uid)->with($flash['type'], $flash['msg']);
    }

    public function view(Request $request)
    {
        $data = $this->client->send('getPage',[
            'page_uid' => $request->page_uid
        ]);

        return view('pages.view', [
            'page_uid' => $request->page_uid,
            'page_fields' => $data
        ]);        
    }
}
