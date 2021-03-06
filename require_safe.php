<?php
/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2011 LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

/**
 * 必要最低限の require を行うファイル.
 * このファイルを使用した場合は, DBアクセスを伴わない.
 * 主に, エラー画面などに使用する.
 */

if (!defined('DATA_REALDIR')) {
    define('DATA_REALDIR', HTML_REALDIR . HTML2DATA_DIR);
}

// アプリケーションの初期化処理
require_once DATA_REALDIR . 'app_initial.php';

// 各種クラス読み込み
require_once DATA_REALDIR . 'require_classes.php';
?>
