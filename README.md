# vue-docker

1.phpコンテナに入る
```
docker exec -it laravel_vue_php bash
```

2.laravelをインストール
```
composer global require laravel/installer
```

3.laravelのプロジェクト作成
```
composer create-project --prefer-dist laravel/laravel laravel_vue
```

4.composerを入れる
```
composer install
```

5.loginを追加
```
composer require laravel/ui
```

6.
```
php artisan ui vue --auth
npm install
npm run dev
```

.envを書き換える
```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel_vue
DB_USERNAME=docker
DB_PASSWORD=docker
```

sequelproのurl http://sequelpro.com/
