<!doctype html>
<html lang="ja">
  <head>
    <title>todo list</title>
  <!-- 必要なメタタグ -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="{{ mix('/js/app.js') }}"></script>
  </head>
  <body>
    <!-- <div id="test" class="container" style="margin-top:50px;">
    <h1>Todoリスト追加</h1>

     <form action='{{ url('/todos')}}' method="post">
      {{csrf_field()}} 
   <div class="form-group">
    <label >やることを追加してください</label>
    <input type="text" name="body"class="form-control" placeholder="todo list" style="max-width:1000px;">
  </div>
  <button type="submit" class="btn btn-primary">追加する</button>  </form> 

    <h1 style="margin-top:50px;">Todoリスト</h1>
    <table class="table table-striped" style="max-width:1000px; margin-top:20px;">
     <thead>
    <tr>
      <th></th><th></th><th></th>
    </tr>
  </thead> 
  <tbody>
    @foreach ($todos as $todo)
    <tr>
      <td>{{$todo->body}}</td>
      <td><form action="{{ action('TodosController@edit', $todo) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('get') }}
          <button type="submit" class="btn btn-primary">編集</button>
      </form>
      </td>

     
      <td><form action="{{url('/todos', $todo->id)}}" method="post">
          {{ csrf_field() }}
          {{ method_field('delete') }}
          <button type="submit" class="btn btn-danger">削除</button>
      </form>
      </td>

      
       <td><a class="del" data-id="{{ $todo->id }}" href="#">削除</a>
        <form method="post" action='{{ url('/todos', $todo->id) }}' id="form_{{ $todo->id}}">
          {{ csrf_field() }}
          {{ method_field('delete') }}
        </form>
      </td> 
    </tr>
    @endforeach -->
  
    <div id="test" class="container">
        <h1>todo list</h1>
        <ul>
            <li v-for="(test, index) in tests">
            @{{ test }}
            <span @click="deleteTest(index)" class="btn btn-primary">削除</span>
            <span @click="showEditTest" class="btn btn-primary">編集</span>
            <input type="text" v-model="editComment" v-show="showTest">
            <span @click="updateTest(index)" v-show="showTest" class="btn btn-primary">完了</span>
            </li>
        </ul>
        <form @submit.prevent="addTest">
            <input type="text" v-model="tests" >
            <input type="submit" class="btn btn-primary" value="追加">
            
        </form>
        
    </div>
    <script src="{{ mix('/js/test.js') }}"></script>
  </body>
</html>