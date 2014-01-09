<?php
/*
 * Plugin Name: JT old browser alert
 * Plugin URI: http://www.studio-jt.co.kr
 * Description: 오래된 브라우저로 접속했을시 사이트 상단에 최신 브라우저로 업데이트를 권하는 알림창을 띄웁니다.
 * Version: 1.0.1
 * Author: 스튜디오 제이티 (support@studio-jt.co.kr)
 * Author URI: studio-jt.co.kr
*/


/*----------------------------------------------------------------------------
 * Add Action
 ---------------------------------------------------------------------------*/
add_action('wp_footer', 'jt_old_browser_script');
add_action('wp_head', 'jt_old_browser_alert');


/*----------------------------------------------------------------------------
 * Script & Stylesheet
 ---------------------------------------------------------------------------*/
function jt_old_browser_script(){
    wp_enqueue_script('jt-old-browser-alert-script', Plugins_url('/js/jt-jquery.js', __FILE__), array('jquery'), '1.0.0', true);
    wp_enqueue_style('jt-old-browser-alert-style', Plugins_url('/css/jt-style.css', __FILE__), false, '1.0.0');
}


/*----------------------------------------------------------------------------
 * HTML
 ---------------------------------------------------------------------------*/
function jt_old_browser_alert(){
    $jt_html =('<!--[if lte IE 7]>
    <div id="old_browser_popup">
        <div id="old_browser_container">
            <img src="' . Plugins_url('/img/old_browser.png', __FILE__) . '" alt="현제 부라우저에서는 정상적인 이용이 불가능 합니다." />
            <p>
                브라우저를 업데이트 해주세요. 현재 브라우저에서는 정상적인 이용이 불가능 합니다.<br />
                최신 브라우저 다운로드 : 
                <a href="http://ie.microsoft.com/testdrive/Info/Downloads/" target="_blank">Explorer</a>
                <a href="https://www.google.com/intl/ko/chrome/browser/" target="_blank">Chrome</a>
                <a href="http://support.apple.com/ko_KR/downloads/#safari" target="_blank">Safari</a>
                <a href="http://www.mozilla.or.kr/ko/" target="_blank">Firefox</a>
            </p>
        </div>
        <img id="old_browser_close" src="' . Plugins_url('/img/oldbrowser_close.png', __FILE__) . '" alt="브라우저 경고창 닫기" />
    </div>
<![endif]-->
    ');
    
    echo $jt_html;
}


?>