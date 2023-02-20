<style>
body{
    background: #f5f5f5;
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
.home{
    margin-left:10px;
    margin-top:10px;
}
.b{
    display: flex;
    justify-content: right;
    margin-right: 20px;
}
.tsubub{
    width: 100px;
    margin-left: 20px;
    margin-bottom: 10px;
}
.tsubuyaki{
    position: center;
}
.container{

}

</style>


@extends('layouts.app')
@section('title', '')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
            <h2></h2>


                <form class="card" action="{{ action('SnsController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                         <ul>
                             @foreach($errors->all() as $e)
                                 <li>{{ $e }}</li>
                             @endforeach
                         </ul>
                    @endif
                     <div class="home">ホーム</div>
                      <div class="form-group row">
                        <div class="col-md-10">
                            <textarea class="col-sm-12 col-form-label ml-5" name="body" rows="1" placeholder="いまどうしてる？">{{ old('body') }}</textarea>
                        </div>
                      </div>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    {{ csrf_field() }}
                    <div class="b">
                    <input type="submit" class="tsubub" value="つぶやく">
                    </div>
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
                    @endif
                </div>         
                   @endif
                  @endforeach
                 @endforeach
            </div>
        </div>
    </div>
@endsection

