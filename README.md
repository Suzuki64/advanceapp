# 概要  
本アプリ「Rese」は、飲食店の予約を管理するためのアプリです。飲食店の予約や予約状況の確認をインターネット上で行うことができます。  

## URL  
http://18.177.138.165:8000/  

## リポジトリ  
・github
https://github.com/Suzuki64/advanceapp

## 機能一覧   
・会員登録機能  
・ログイン機能  
・ユーザ情報取得機能  
・店舗情報取得機能  
・店舗お気に入り追加・削除機能  
・予約情報追加・削除・修正機能  
・店舗評価機能  
・店舗、ユーザー権限編集機能  
・メール送信機能  
・リマインダメール送信機能  

## 使用技術  
laravel 8.83.23  
docker 19.03.12  

## 環境構築  
本アプリはdockerを使用しています。docker Engineがインストールされた環境で以下の項目を実行してください。  

◆ソースコードの取得  
  「git clone https://github.com/Suzuki64/advanceapp」
  上記コマンドで任意のディレクトリにリポジトリを複製してください。  

◆dockerイメージの構築  
  「docker compose build」でdockerイメージを構築してください。サーバーコンテナ（laravel_app）とデータベースコンテナ（Laravel_db）の2つのコンテナが作成されます。  
    
◆dockerコンテナの起動  
　「dokcer-compose up -d」でコンテナを起動してください。
      「cgroups: cannot find cgroup mount destination: unknown.」のエラーが発生しましたら、一旦コンテナを削除し、下記のコマンドを実行の上、再度dockerイメージの構築から行ってください。  
      「sudo mkdir /sys/fs/cgroup/[任意のディレクトリ名]」  
      「sudo mount -t cgroup -o none,name=systemd cgroup /sys/fs/cgroup/[任意のディレクトリ名]」  

◆.envファイルの作成  
  srcフォルダまたは、サーバーコンテナ（larabel_app）のlaravelappディレクトリに移動後、「cp .env.example .env」を実行し、.envファイルを作成してください。  

◆PHP関連パッケージの取得  
  サーバーコンテナ（larabel_app）のlaravelappディレクトリに移動後、「composer install」を実行してPHP関連パッケージを取得してください。  

◆APP＿KEYの設定  
  サーバーコンテナ（larabel_app）にて、「php artisan key:generate」「php artisan config:clear」を実行してください。  

◆.envファイルの編集（DB連携）  
  .envファイルのDB接続項目を下記の通りに編集してください。  
    DB_CONNECTION=mysql  
    DB_HOST=laravel_db  
    DB_PORT=3306  
    DB_DATABASE=laravel_db  
    DB_USERNAME=laravel_user  
    DB_PASSWORD=laravel_pass  

◆テーブルの作成  
  「php artisan migrate」を実行してください。  

◆pubicとstorageとのシンボリックリンクの作成  
  「php artisan storage:link」を実行してください。  

## ER図  
reservesystem.drawio.png 参照  
