<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * 商品一覧
     */
    public function index()
    {
        // 商品一覧取得
        $items = Item::all();

        return view('item.index', compact('items'));
    }

    /**
     * リップ一覧
     */
    public function lip()
    {
        //リップ取得
        $lip='リップ';
        $items=Item::where('type',$lip)
            ->orderbydesc("created_at")->get();
        return view('item.lip',compact('items'));
    }

    /**
     * アイ一覧
     */
    public function eye()
    {
        //アイ取得
        $eye='アイメイク';
        $items=Item::where('type',$eye)
            ->orderbydesc("created_at")->get();
        return view('item.eye',compact('items'));
    }

    /**
     * ベース一覧
     */
    public function base()
    {
        //ベース取得
        $base='ベース';
        $items=Item::where('type',$base)
            ->orderbydesc("created_at")->get();
        return view('item.base',compact('items'));
    }

        /**
     * スキンケア一覧
     */
    public function skin()
    {
        //スキンケア取得
        $skin='スキンケア';
        $items=Item::where('type',$skin)
            ->orderbydesc("created_at")->get();
        return view('item.skin',compact('items'));
    }

        /**
     * ツール一覧
     */
    public function tool()
    {
        //ツール取得
        $tool='ツール';
        $items=Item::where('type',$tool)
            ->orderbydesc("created_at")->get();
        return view('item.tool',compact('items'));
    }

    public function all()
    {
        //商品取得
        $items=Item::orderbydesc("created_at")->get();
        return view('item.all',compact('items'));
    }

    /**
     * 商品登録
     */
    public function add(Request $request)
    {
        // POSTリクエストのとき
        if ($request->isMethod('post')) {
            // バリデーション
            $this->validate($request, [
                'name' => 'required|max:100',
                'type' => 'required',
                'detail' => 'required|max:500',
            ]);

            // 商品登録
            Item::create([
                'user_id' => Auth::user()->id,
                'name' => $request->name,
                'type' => $request->type,
                'detail' => $request->detail,
            ]);

            return redirect('/items/all');
        }

        return view('item.add');
    }
        /*商品編集*/
        public function edit(Request $request,$id
        )
        {
            if ($request->isMethod('post')) {
                // バリデーション
                $this->validate($request, [
                    'name' => 'required|max:100',
                    'type' => 'required',
                    'detail' => 'required|max:500',
                ]);
    
                // 商品登録
                Item::find($id)->update([
                    'user_id' => Auth::user()->id,
                    'name' => $request->name,
                    'type' => $request->type,
                    'detail' => $request->detail,
                ]);
    
                return redirect('/items/all');
            }
            $item = Item::find($id);
            return view('item.edit',['item'=>$item]);
        }
        
        //商品削除
        public function destroy(Request $request,$id)
        {
            $item = Item::find($id)->delete();
            return redirect('/items/all');
        }
    
}
