<?php

function reink_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );
}
add_action( 'after_setup_theme', 'reink_setup' );

function reink_enqueue_scripts() {
    if ( is_page( 'lp' ) ) {
        wp_enqueue_style( 're-ink-lp-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600&family=Noto+Sans+JP:wght@300;400;500;700&family=Noto+Serif+JP:wght@300;400;500;600;700&family=Cinzel:wght@400;500;600&display=swap', [], null );
        wp_enqueue_style( 're-ink-lp-reset', 'https://unpkg.com/scss-reset/reset.css', [], null );
        $lp_css = get_template_directory() . '/assets/css/lp.css';
        wp_enqueue_style( 're-ink-lp', get_template_directory_uri() . '/assets/css/lp.css', [ 're-ink-lp-reset' ], filemtime( $lp_css ) );
        return;
    }

    $theme_style = get_template_directory() . '/style.css';
    wp_enqueue_style( 're-ink-theme-style', get_stylesheet_uri(), [], filemtime( $theme_style ) );

    if ( is_front_page() ) {
        $top_css = get_template_directory() . '/assets/css/top.css';
        if ( file_exists( $top_css ) ) {
            wp_enqueue_style( 're-ink-top-style', get_template_directory_uri() . '/assets/css/top.css', [ 're-ink-theme-style' ], filemtime( $top_css ) );
        }
    } else {
        $tone_css = get_template_directory() . '/assets/css/subpage-tone.css';
        if ( file_exists( $tone_css ) ) {
            wp_enqueue_style( 're-ink-subpage-tone', get_template_directory_uri() . '/assets/css/subpage-tone.css', [ 're-ink-theme-style' ], filemtime( $tone_css ) );
        }

        $pages_css = get_template_directory() . '/assets/css/pages.css';
        if ( file_exists( $pages_css ) ) {
            wp_enqueue_style( 're-ink-pages', get_template_directory_uri() . '/assets/css/pages.css', [ 're-ink-subpage-tone' ], filemtime( $pages_css ) );
        }
    }

    $js_ver = filemtime( get_template_directory() . '/assets/js/main.js' );
    wp_enqueue_script( 're-ink-main', get_template_directory_uri() . '/assets/js/main.js', [], $js_ver, true );

    if ( is_page( 'gallery' ) ) {
        wp_localize_script( 're-ink-main', 'reinkWorks', [
            'ajaxUrl' => admin_url( 'admin-ajax.php' ),
            'nonce'   => wp_create_nonce( 'reink_load_more_works' ),
        ] );
    }
}
add_action( 'wp_enqueue_scripts', 'reink_enqueue_scripts' );

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );

// ===== カスタム投稿タイプ =====
function reink_register_cpt() {
    register_post_type( 'gallery_work', [
        'labels'       => [
            'name'                => 'Works',
            'singular_name'       => '作品',
            'add_new'             => '画像を一括追加',
            'add_new_item'        => '画像を一括追加',
            'edit_item'           => '作品を編集',
            'featured_image'      => '作品写真',
            'set_featured_image'  => '作品写真を設定',
            'remove_featured_image' => '作品写真を削除',
            'use_featured_image'  => '作品写真として使用',
        ],
        'public'       => true,
        'has_archive'  => false,
        'show_in_rest' => true,
        'supports'     => [ 'title', 'thumbnail' ],
        'menu_icon'    => 'dashicons-format-image',
    ] );

    register_post_type( 'artist', [
        'labels'       => [
            'name'                  => 'アーティスト',
            'singular_name'         => 'アーティスト',
            'add_new_item'          => 'アーティストを追加',
            'edit_item'             => 'アーティストを編集',
            'featured_image'        => 'アーティスト写真',
            'set_featured_image'    => 'アーティスト写真を設定',
            'remove_featured_image' => 'アーティスト写真を削除',
            'use_featured_image'    => 'アーティスト写真として使用',
        ],
        'public'       => true,
        'has_archive'  => false,
        'show_in_rest' => true,
        'supports'     => [ 'title', 'thumbnail', 'excerpt', 'page-attributes' ],
        'menu_icon'    => 'dashicons-admin-users',
    ] );
}
add_action( 'init', 'reink_register_cpt' );

// ===== Works 用カスタムタクソノミー =====
function reink_register_taxonomies() {
    register_taxonomy( 'tattoo_style', 'gallery_work', [
        'labels'       => [ 'name' => 'スタイル', 'singular_name' => 'スタイル' ],
        'hierarchical' => false,
        'show_in_rest' => true,
    ] );
    register_taxonomy( 'tattoo_size', 'gallery_work', [
        'labels'       => [ 'name' => 'サイズ', 'singular_name' => 'サイズ' ],
        'hierarchical' => false,
        'show_in_rest' => true,
    ] );
}
add_action( 'init', 'reink_register_taxonomies' );

function reink_render_work_card( $post_id, $idx = 1 ) {
    $style_terms = get_the_terms( $post_id, 'tattoo_style' );
    $size_terms  = get_the_terms( $post_id, 'tattoo_size' );

    $style_label = ( $style_terms && ! is_wp_error( $style_terms ) ) ? $style_terms[0]->name : '';
    $style_slug  = ( $style_terms && ! is_wp_error( $style_terms ) ) ? $style_terms[0]->slug : '';
    $size_label  = ( $size_terms && ! is_wp_error( $size_terms ) ) ? strtoupper( $size_terms[0]->slug ) : '';
    $size_slug   = ( $size_terms && ! is_wp_error( $size_terms ) ) ? $size_terms[0]->slug : '';
    $fi_d        = 'fi-d' . ( ( ( $idx - 1 ) % 4 ) + 1 );

    if ( ! has_post_thumbnail( $post_id ) ) {
        return;
    }
    ?>
<div class="gallery-item fi <?php echo esc_attr( $fi_d ); ?>" data-style="<?php echo esc_attr( $style_slug ); ?>"
    data-size="<?php echo esc_attr( $size_slug ); ?>">
    <?php echo get_the_post_thumbnail( $post_id, 'large', [ 'alt' => 'tattoo work' ] ); ?>
    <div class="gallery-overlay">
        <div class="gallery-meta">
            <?php if ( $size_label ) : ?>
            <span class="gallery-size-badge"><?php echo esc_html( $size_label ); ?></span>
            <?php endif; ?>
            <?php if ( $style_label ) : ?>
            <p class="gallery-style"><?php echo esc_html( $style_label ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php
}

function reink_load_more_works() {
    check_ajax_referer( 'reink_load_more_works', 'nonce' );

    $page = isset( $_POST['page'] ) ? max( 1, absint( $_POST['page'] ) ) : 1;

    $works_query = new WP_Query( [
        'post_type'      => 'gallery_work',
        'posts_per_page' => 12,
        'paged'          => $page,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
    ] );

    ob_start();

    if ( $works_query->have_posts() ) {
        $idx = ( ( $page - 1 ) * 12 ) + 1;
        while ( $works_query->have_posts() ) {
            $works_query->the_post();
            reink_render_work_card( get_the_ID(), $idx );
            $idx++;
        }
        wp_reset_postdata();
    }

    wp_send_json_success( [
        'html'     => ob_get_clean(),
        'maxPages' => (int) $works_query->max_num_pages,
    ] );
}
add_action( 'wp_ajax_reink_load_more_works', 'reink_load_more_works' );
add_action( 'wp_ajax_nopriv_reink_load_more_works', 'reink_load_more_works' );

// ===== アーティスト メタボックス =====
function reink_artist_meta_box() {
    add_meta_box( 'artist_details', 'アーティスト詳細', 'reink_artist_meta_box_html', 'artist', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'reink_artist_meta_box' );

function reink_artist_meta_box_html( $post ) {
    wp_nonce_field( 'reink_artist_meta', 'reink_artist_nonce' );
    $specialty = get_post_meta( $post->ID, '_artist_name_ja', true );
    $instagram = get_post_meta( $post->ID, '_artist_instagram', true );
    ?>
<table class="form-table">
    <tr>
        <th>アーティスト名</th>
        <td>上部のタイトル欄に入力してください。例: <code>OHINA</code></td>
    </tr>
    <tr>
        <th>アーティスト写真</th>
        <td>右サイドバーの「アーティスト写真」から設定してください。</td>
    </tr>
    <tr>
        <th>プロフィール文</th>
        <td>「抜粋」欄に入力してください。</td>
    </tr>
    <tr>
        <th><label for="artist_name_ja">専門スタイル</label></th>
        <td><input type="text" id="artist_name_ja" name="artist_name_ja" value="<?php echo esc_attr( $specialty ); ?>"
                class="regular-text" placeholder="Fine line / One point / Korean style"></td>
    </tr>
    <tr>
        <th><label for="artist_instagram">Instagramユーザーネーム</label></th>
        <td><input type="text" id="artist_instagram" name="artist_instagram"
                value="<?php echo esc_attr( $instagram ); ?>" class="regular-text" placeholder="@reink_ohina"></td>
    </tr>
</table>
<p class="description">並び順は「ページ属性 → 順序」で制御できます。</p>
<?php
}

function reink_save_artist_meta( $post_id ) {
    if ( ! isset( $_POST['reink_artist_nonce'] ) || ! wp_verify_nonce( $_POST['reink_artist_nonce'], 'reink_artist_meta' ) ) return;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;

    foreach ( [ 'artist_name_ja', 'artist_instagram' ] as $field ) {
        if ( isset( $_POST[ $field ] ) ) {
            update_post_meta( $post_id, '_' . $field, sanitize_text_field( $_POST[ $field ] ) );
        }
    }
}
add_action( 'save_post_artist', 'reink_save_artist_meta' );

// ===== Works 一括追加 =====
function reink_gallery_bulk_add_menu() {
    add_submenu_page(
        'edit.php?post_type=gallery_work',
        '画像を一括追加',
        '画像を一括追加',
        'upload_files',
        'reink-gallery-bulk-add',
        'reink_gallery_bulk_add_page'
    );
}
add_action( 'admin_menu', 'reink_gallery_bulk_add_menu' );

function reink_gallery_bulk_add_page() {
    ?>
<div class="wrap reink-gallery-bulk-add">
    <h1>Works画像を一括追加</h1>
    <p>複数の画像を選択すると、それぞれを「作品」として作成し、作品写真に設定します。</p>

    <p>
        <button type="button" class="button button-primary button-hero" id="reink-select-gallery-images">
            画像を選択して一括追加
        </button>
    </p>

    <div id="reink-gallery-bulk-result" aria-live="polite"></div>
</div>
<?php
}

function reink_gallery_bulk_add_admin_assets( $hook ) {
    if ( 'gallery_work_page_reink-gallery-bulk-add' !== $hook ) {
        return;
    }

    wp_enqueue_media();
    wp_enqueue_script( 'jquery' );

    wp_add_inline_style(
        'wp-admin',
        '.reink-gallery-bulk-add #reink-gallery-bulk-result{margin-top:20px}.reink-gallery-bulk-add .notice{max-width:720px}'
    );

    wp_add_inline_script(
        'jquery',
        'jQuery(function($){
            const $button = $("#reink-select-gallery-images");
            const $result = $("#reink-gallery-bulk-result");
            let frame;

            function showNotice(type, message) {
                $result.html(`<div class="notice notice-${type} is-dismissible"><p>${message}</p></div>`);
            }

            $button.on("click", function() {
                if (frame) {
                    frame.open();
                    return;
                }

                frame = wp.media({
                    title: "Worksに追加する画像を選択",
                    button: { text: "この画像で作品を作成" },
                    library: { type: "image" },
                    multiple: true
                });

                frame.on("select", function() {
                    const attachments = frame.state().get("selection").toJSON();

                    if (!attachments.length) {
                        showNotice("warning", "画像が選択されていません。");
                        return;
                    }

                    $button.prop("disabled", true).text("追加中...");
                    $result.html("<p>作品を作成しています...</p>");

                    $.post(ajaxurl, {
                        action: "reink_create_gallery_works",
                        nonce: "' . esc_js( wp_create_nonce( 'reink_create_gallery_works' ) ) . '",
                        attachment_ids: attachments.map((attachment) => attachment.id)
                    }).done(function(response) {
                        if (!response.success) {
                            showNotice("error", response.data && response.data.message ? response.data.message : "追加に失敗しました。");
                            return;
                        }

                        showNotice("success", `${response.data.created}件の作品を作成しました。<br><a href=\"edit.php?post_type=gallery_work\">Works一覧を見る</a>`);
                    }).fail(function() {
                        showNotice("error", "通信エラーで追加できませんでした。");
                    }).always(function() {
                        $button.prop("disabled", false).text("画像を選択して一括追加");
                    });
                });

                frame.open();
            });
        });'
    );
}
add_action( 'admin_enqueue_scripts', 'reink_gallery_bulk_add_admin_assets' );

function reink_create_gallery_works() {
    check_ajax_referer( 'reink_create_gallery_works', 'nonce' );

    if ( ! current_user_can( 'upload_files' ) ) {
        wp_send_json_error( [ 'message' => '画像をアップロードする権限がありません。' ], 403 );
    }

    $attachment_ids = isset( $_POST['attachment_ids'] ) ? array_map( 'absint', (array) $_POST['attachment_ids'] ) : [];
    $attachment_ids = array_filter( array_unique( $attachment_ids ) );
    $created        = 0;

    if ( empty( $attachment_ids ) ) {
        wp_send_json_error( [ 'message' => '画像が選択されていません。' ], 400 );
    }

    foreach ( $attachment_ids as $attachment_id ) {
        if ( ! wp_attachment_is_image( $attachment_id ) ) {
            continue;
        }

        $attachment = get_post( $attachment_id );
        $title      = $attachment && $attachment->post_title ? $attachment->post_title : 'Work';
        $post_id    = wp_insert_post( [
            'post_type'   => 'gallery_work',
            'post_status' => 'publish',
            'post_title'  => $title,
        ], true );

        if ( is_wp_error( $post_id ) ) {
            continue;
        }

        set_post_thumbnail( $post_id, $attachment_id );

        $created++;
    }

    wp_send_json_success( [ 'created' => $created ] );
}
add_action( 'wp_ajax_reink_create_gallery_works', 'reink_create_gallery_works' );

function reink_gallery_admin_default_to_bulk_add() {
    global $submenu;

    if ( isset( $submenu['edit.php?post_type=gallery_work'] ) ) {
        foreach ( $submenu['edit.php?post_type=gallery_work'] as $index => $item ) {
            if ( isset( $item[2] ) && 'post-new.php?post_type=gallery_work' === $item[2] ) {
                unset( $submenu['edit.php?post_type=gallery_work'][ $index ] );
            }
        }
    }
}
add_action( 'admin_menu', 'reink_gallery_admin_default_to_bulk_add', 999 );

function reink_redirect_gallery_new_post_to_bulk_add() {
    global $pagenow;

    if ( 'post-new.php' !== $pagenow ) {
        return;
    }

    $post_type = isset( $_GET['post_type'] ) ? sanitize_key( $_GET['post_type'] ) : '';

    if ( 'gallery_work' === $post_type ) {
        wp_safe_redirect( admin_url( 'edit.php?post_type=gallery_work&page=reink-gallery-bulk-add' ) );
        exit;
    }
}
add_action( 'admin_init', 'reink_redirect_gallery_new_post_to_bulk_add' );
