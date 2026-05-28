# WordPress 本番環境 SSH / WP-CLI 作業テンプレート

本番環境のレンタルサーバーへ SSH 接続し、WordPress テーマのアップロードや WP-CLI での固定ページ作成を行うための汎用テンプレートです。

## 1. 接続情報を整理する

作業前に、レンタルサーバーの管理画面で以下を確認します。

```text
SSHホスト名: <SSH_HOST>
SSHユーザー名: <SSH_USER>
SSHポート番号: <SSH_PORT>
秘密鍵パス: ~/.ssh/<PRIVATE_KEY_FILE>
WordPress設置パス: ~/<DOMAIN>/public_html
テーマ名: <THEME_NAME>
ローカルテーマパス: /path/to/local/theme/
```

公開鍵認証の場合、公開鍵はサーバー側に登録し、Mac 側では秘密鍵を使って接続します。

## 2. 秘密鍵の権限を整える

```bash
chmod 600 ~/.ssh/<PRIVATE_KEY_FILE>
```

## 3. SSH 接続する

```bash
ssh -p <SSH_PORT> -i ~/.ssh/<PRIVATE_KEY_FILE> <SSH_USER>@<SSH_HOST>
```

初回接続時にホスト確認が出た場合、接続先が正しければ `yes` を入力します。

## 4. WordPress の設置場所を探す

SSH 接続後、テーマフォルダを探します。

```bash
find . -type d -path "*/wp-content/themes" 2>/dev/null
```

例:

```text
./<DOMAIN>/public_html/wp-content/themes
```

見つかったら WordPress ルートへ移動します。

```bash
cd ~/<DOMAIN>/public_html
```

## 5. WP-CLI が使えるか確認する

```bash
wp --info
```

WordPress の投稿一覧が取得できるかも確認します。

```bash
wp post list --post_type=page --fields=ID,post_title,post_name,post_status
```

## 6. テーマをアップロードする

SSH から一度抜けます。

```bash
exit
```

Mac 側で `rsync` を実行します。

```bash
rsync -av -e "ssh -p <SSH_PORT> -i ~/.ssh/<PRIVATE_KEY_FILE>" \
  /path/to/local/theme/ \
  <SSH_USER>@<SSH_HOST>:~/<DOMAIN>/public_html/wp-content/themes/<THEME_NAME>/
```

2 回目以降にローカルと本番を完全同期したい場合だけ `--delete` を追加します。

```bash
rsync -av --delete -e "ssh -p <SSH_PORT> -i ~/.ssh/<PRIVATE_KEY_FILE>" \
  /path/to/local/theme/ \
  <SSH_USER>@<SSH_HOST>:~/<DOMAIN>/public_html/wp-content/themes/<THEME_NAME>/
```

注意: `--delete` は本番側にだけ存在するファイルを削除します。初回や不安がある場合は付けません。

## 7. 固定ページを作成する

再度 SSH 接続します。

```bash
ssh -p <SSH_PORT> -i ~/.ssh/<PRIVATE_KEY_FILE> <SSH_USER>@<SSH_HOST>
cd ~/<DOMAIN>/public_html
```

固定ページを作成します。

```bash
wp post create --post_type=page --post_status=publish --post_title="<PAGE_TITLE>" --post_name="<PAGE_SLUG>"
```

複数ページを作る例:

```bash
wp post create --post_type=page --post_status=publish --post_title="Access" --post_name="access"
wp post create --post_type=page --post_status=publish --post_title="Artists" --post_name="artists"
wp post create --post_type=page --post_status=publish --post_title="About" --post_name="about"
wp post create --post_type=page --post_status=publish --post_title="Gallery" --post_name="gallery"
wp post create --post_type=page --post_status=publish --post_title="Pricing" --post_name="pricing"
wp post create --post_type=page --post_status=publish --post_title="FAQ" --post_name="faq"
```

## 8. 作成結果を確認する

```bash
wp post list --post_type=page --fields=ID,post_title,post_name,post_status
```

パーマリンクを再生成します。

```bash
wp rewrite flush
```

## 9. 管理画面と公開 URL を確認する

WordPress 管理画面でテーマを有効化します。

```text
外観 > テーマ > <THEME_NAME> を有効化
```

公開 URL を確認します。

```text
https://<DOMAIN>/<PAGE_SLUG>/
```

## よく使うコマンド早見表

```bash
# SSH 接続
ssh -p <SSH_PORT> -i ~/.ssh/<PRIVATE_KEY_FILE> <SSH_USER>@<SSH_HOST>

# WordPress ルートへ移動
cd ~/<DOMAIN>/public_html

# 固定ページ一覧
wp post list --post_type=page --fields=ID,post_title,post_name,post_status

# 固定ページ作成
wp post create --post_type=page --post_status=publish --post_title="<PAGE_TITLE>" --post_name="<PAGE_SLUG>"

# テーマ一覧
wp theme list

# テーマ有効化
wp theme activate <THEME_NAME>

# パーマリンク再生成
wp rewrite flush
```
