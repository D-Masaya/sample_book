<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function show($id)
    {
        // モデルを使ってProfileを取得する
        $profile = Profile::query()->find($id);

        // データがない場合はエラーを表示する
        if (!profile) {
            die('プロフィールが未登録です。');
            exit;
        }

        // プロフィールがある場合はviewを表示する
        return view('profiles.show', ['profile' => $profile]);
    }

    public function create()
    {
        // viewファイルを表示させる
        return view('profiles.create');
    }

    public function store(Request $request)
    {
        try {
            $profile = DB::transaction(function () use ($request) {
                $data = $request->all();    // allを使うことでPOSTされてきたデータを配列にできる
                $data['user_id'] = Auth::id();
                $profile = Profile::query()->create($data); // データを登録
                return $profile;    // ここでreturnすることで外側の$profileに値が入る
            });
        } catch (\Exception $e) {
            die('プロフィール登録に失敗しました。');
            exit;
        }

        // 登録が完了したらshowのページへリダイレクト
        return redirect('profiles.show', ['profile' => $profile->id]);
    }

    public function edit($id)
    {
        // ログインしているユーザーを取得
        $user = Auth::user();
        $profile =$user->profile;   // relationから取得できる

        // $profileがnull、つまりデータがない場合はcreateの画面に飛ばす
        if (!$profile) {
            return redirirect(route('profiles.create'));
        }

        // ログインしているユーザーのIDとProfileのIDが一致していない場合エラーにする
        if ($user->id !== $profile->user_id) {
            die('ユーザーが一致しません');
            exit;
        }
        
        // エラーがなければ表示する
        return view('user_profiles.edit', ['profile' => $user]);
    }

    public function update(Request $request, $id)
    {
        // ログインしているユーザーを取得
        $user = Auth::user();

        // ログインしているユーザーとURLの$idが一致していない場合エラーにする
        if ($user->id !== $id) {
            die('ユーザーが一致しません');
            exit;
        }

        // データベースに保存
        try {
            DB::transaction(function () use ($request, $user) {
                $profile = $user->profile;
                // updateOrCreateであれば更新、なければ新規登録
                $profile->updateOrCreate(
                    ['user_id' => $user->id],   // user_idがログインユーザーのものを検索
                    $request->all() // 登録するデータ
                );
            });
        } catch (\Exception $e) {
            // エラーが発生したら処理を止める
            die('プロフィールの更新に失敗しました。');
            exit;
        }

        // 問題なく処理が完了したらリダイレクト
        return redirect(route('profiles.show', ['user' => $user->id]));
    }
}
