<!--{*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2007 LOCKON CO.,LTD. All Rights Reserved.
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
<!--[if IE 7]>
	<style type="text/css">
      div#rss {
        margin-left: -17px;
      }
      div#newsarea .newslink {
        margin-bottom: 15px;
      }
    </style>
<![endif]-->
<div id="newsareaborder">
<div id="newsarea">
 <div id="newstitle">  
  <span class="left"><img src="<!--{$TPL_DIR}-->img/top/news.png" width="110" height="34" alt="新着情報" /></span>
  <span class="right"><img src="<!--{$TPL_DIR}-->img/top/newsright.png" width="17" height="34" alt="" /></span>
 </div>
 <div id="rss"><a href="<!--{$smarty.const.URL_DIR}-->rss/index.php" target="_blank"><img src="<!--{$TPL_DIR}-->img/top/rss.jpg" width="47" height="24" alt="rss" /></a></div>
 <div class="newscontents">
<!--{section name=data loop=$arrNews}-->
  <dl>
    <dt></dt>
    <dd>
      <p class="date"><!--{$arrNews[data].news_date_disp|date_format:"%Y&#24180;%m&#26376;%d&#26085;"}--></p>
      <p class="newslink">
      <!--{if $arrNews[data].news_url}-->
      <a href="<!--{$arrNews[data].news_url}-->"
        <!--{if $arrNews[data].link_method eq "2"}-->
        target="_blank"
        <!--{/if}-->>
      <!--{/if}-->
      <!--{$arrNews[data].news_title|escape|nl2br}-->
        <!--{if $arrNews[data].news_url}-->
      </a>
        <!--{/if}--></p>
        <!--{$arrNews[data].news_comment|escape|nl2br}-->
     </dd>
  </dl>
<!--{/section}-->
</div>
</div>
</div>