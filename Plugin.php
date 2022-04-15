<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
/**
 * 网页鼠标点击特效
 *
 * @package CursorEffect
 * @author WoL
 * @link https://blog.wol1.cf/
 * @version 1.0.0
 */
class CursorEffect_Plugin implements Typecho_Plugin_Interface
{
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     * 注意，直接抛出异常
     *
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate()
    {
        Typecho_Plugin::factory('Widget_Archive')->footer = array('CursorEffect_Plugin', 'footer');
    }

    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     *
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate()
    {
    }

    /**
     * 获取插件配置面板
     *
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form)
    {
    }

    /**
     * 个人用户的配置面板
     *
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form)
    {
    }

/**
     * 输出底部
     *
     * @access public
     * @return void
     */
     public static function footer()
    {
        echo '<style>
        .fireworks {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
    <canvas class="fireworks" style="position:fixed;left:0;top:0;z-index:99999999;pointer-events:none;"></canvas>
    <script src="/usr/plugins/CursorEffect/anime.min.js"></script>
    <script src="/usr/plugins/CursorEffect/cursor.js"></script>
    <script type="text/javascript">
        fireworks.setCanvasSize();
    </script>';
        echo '<!--author:https://github.com/WoLeo-Z-->';
    }
}
