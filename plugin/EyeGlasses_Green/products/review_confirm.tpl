<!--{*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2008 LOCKON CO.,LTD. All Rights Reserved.
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
 *}-->
<!--{include file="`$smarty.const.TEMPLATE_DIR`popup_header.tpl" subtitle="お客様の声書き込み（確認ページ）"}-->
<!--[if IE 7]>
	<style type="text/css">
      div#title2 span {
        margin-top: -17px;
      }
    </style>
<![endif]-->
  <div id="windowarea">
    <div id="title2">
    　<span class="left"><img src="<!--{$TPL_DIR}-->img/products/review_title.jpg" width="160" height="30" alt="お客様の声書き込み" /></span>
      <span class="right"><img src="<!--{$TPL_DIR}-->img/common/right3.jpg" width="12" height="30" alt="" /></span> 
    </div>

    <form name="form1" method="post" action="<!--{$smarty.server.PHP_SELF|escape}-->">
      <input type="hidden" name="mode" value="complete" />
        <!--{foreach from=$arrForm key=key item=item}-->
        <!--{if $key ne "mode"}-->
        <input type="hidden" name="<!--{$key|escape}-->" value="<!--{$item|escape}-->" /><!--{/if}-->
        <!--{/foreach}-->
        <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
<br /><br />
        <table summary="お客様の声書き込み">
          <tr>
            <th>商品名</th>
            <td><!--{$arrForm.name|escape}--></td>
          </tr>
          <tr>
            <th>投稿者名<span class="attention">※</span></th>
            <td><!--{$arrForm.reviewer_name|escape}--></td>
          </tr>
          <tr>
            <th>メールアドレス</th>
            <td><!--{$arrForm.reviewer_url|escape}--></td>
          </tr>
          <tr>
            <th>性別</th>
            <td><!--{if $arrForm.sex eq 1 }-->男性<!--{elseif $arrForm.sex eq 2 }-->女性<!--{/if}--></td>
          </tr>
          <tr>
            <th>おすすめレベル<span class="attention">※</span></th>
            <td><span class="attention"><!--{$arrRECOMMEND[$arrForm.recommend_level]}--></span></td>
          </tr>
          <tr>
            <th>タイトル<span class="attention">※</span></th>
            <td><!--{$arrForm.title|escape}--></td>
          </tr>
          <tr>
            <th>コメント<span class="attention">※</span></th>
            <td><!--{$arrForm.comment|escape|nl2br}--></td>
          </tr>
        </table>
        <div class="btn">
          <input type="image" onclick=" mode.value='return';" onmouseover="chgImgImageSubmit('<!--{$TPL_DIR}-->img/common/b_back_on.gif',this)" onmouseout="chgImgImageSubmit('<!--{$TPL_DIR}-->img/common/b_back.gif',this)" src="<!--{$TPL_DIR}-->img/common/b_back.gif" class="box150" alt="戻る"  name="back" id="back" />
          <input type="image" onmouseover="chgImgImageSubmit('<!--{$TPL_DIR}-->img/common/b_send_on.gif',this)" onmouseout="chgImgImageSubmit('<!--{$TPL_DIR}-->img/common/b_send.gif',this)" src="<!--{$TPL_DIR}-->img/common/b_send.gif" class="box150" alt="送信"  name="send" id="send" />
        </div>
      </form>

    </div>

<!--{include file="`$smarty.const.TEMPLATE_DIR`popup_footer.tpl"}-->
