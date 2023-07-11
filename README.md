# Laravel_Sample

基本アーキテクチャー
docker  Version: 20.10.12
PHP　v8.2.7
Laravel Framework 10.14.1
mysql  Ver 8.0.32 

その他アーキテクチャー
sail art about


起動時のコマンド
 ./vendor/bin/sail up -d 

・PHP文法に準拠しているか確認
 全体
    echo "{\n\t\"preset\": \"psr12\"\n}" > pint.json

 プルリク
    sail pint --dirty

・configファイル更新
   php artisan config:clear
・キャッシュをクリアにする
　　php artisan cache:clear
・DBのデータ更新
　　php artisan migrate:refresh --seed


起動時の確認

ユーザ側画面：
管理画面：