<style>
header {
    width: auto; 
    height: 80px;
    background: white; /* 背景色にグレーを指定 */
    /* position: fixed; ウィンドウを基準に画面に固定 */
    top: 0; 
    left: 250px;
    right: 250px;
    display: flex;
    align-items: center;
    padding-left: 100px;
    display: none;
}

header .menu li {
    list-style: none; /* リストの[・]を消す */
}

header .menu li + li {
    margin-left: 40px; /* メニューそれぞれに間隔をあけるため */
}
.mutter{
    margin-right: 0px;
    display: none;
}
body{
    background: #f5f5f5;
}
.spacer{
    height: 80px;
    background: #f5f5f5;
}
.menu{
    margin-left: 400px;
    display: none;
}
.user_name{
    padding-right: 10px;
    position: left;
   -moz-appearance: none;
   -webkit-appearance: none;
    appearance: none;
    outline: none;
    border: solid 0px grey;
    background-image: linear-gradient(45deg, transparent 50%, rgba(100,90,92,0.9) 50%),  linear-gradient(135deg, rgba(100,90,92,0.9) 50%, transparent 50%);
    background-size: 10px 10px, 10px 10px;
    background-position: calc(100% - 10px) 50%, calc(100% - 0.5px) 50%;
    background-repeat: no-repeat;
} 
.tsubuyaku{
    background: white;
    border: solid 1px grey;
    height: auto;
    width: 500px;
    color: grey;
    display: flex;
    flex-flow: column;
}
.form-control{
    width: 300px;
}
.tsubuyaki{
    position: center;
}
.container{

}

</style>


@extends('layouts.app')
{{-- layouts/admin.blade.phpを読み込む --}}

{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ニュースの新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
            <h2>ニュース新規作成</h2>


                <form class="card" action="{{ action('SnsController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div>ホーム</div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="1" placeholder="いまどうしてる？">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-secondary" value="つぶやく">
                </form>



            <div class="tsubuyaki">
                 @foreach($posts as $post)
                  @foreach($users as $user)
                  @if($user->id == $post->user_id)
                <div class="card p-3">
                    <div>{{ $user->name }}</div>
                    <div class="text-right">{{ $post->created_at }}</div>
                    <div>{{ $post->body }}</div>
                 
                    @if(Auth::id() == $post->user_id)
                    <div class="text-right">
                    <a href="{{ action('SnsController@delete', ['id' => $post->id]) }}">削除</a>
                </div>
                </div>
                    @endif         
                   @endif
                  @endforeach
                 @endforeach

            </div>
            </div>
        </div>
    </div>

@endsection

