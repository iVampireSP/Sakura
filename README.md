Sakura🌸: A Wonderful WordPress Theme
===

![Sakura](https://view.moezx.cc/images/2018/05/26/sakura.png)

![PHP version](https://img.shields.io/badge/PHP-7.1+-4F5B93.svg?style=flat-square)
![WP version](https://img.shields.io/badge/WordPress-5.0+-0073aa.svg?style=flat-square)
[![GitHub release](https://img.shields.io/github/release/mashirozx/Sakura.svg?style=flat-square)](https://github.com/mashirozx/Sakura/releases/latest)
[![Github commits (since latest release)](https://img.shields.io/github/commits-since/mashirozx/Sakura/latest.svg?style=flat-square)](https://github.com/mashirozx/Sakura/commits/)
[![](https://data.jsdelivr.com/v1/package/gh/moezx/cdn/badge)](https://www.jsdelivr.com/package/gh/moezx/cdn)

在 Louie 基于 Fuzzz 的 [Akina](http://www.akina.pw/themeakina) 主题修改的主题 [Siren](https://github.com/louie-senpai/Siren) 修改的主题[Sakura](https://github.com/mashirozx/Sakura) 基础上再修改 =.=
前三位前辈已经做的很好的，或许我只能再弄乱代码吧



注意：建议 `git clone` 下载（[简易 Git 使用指南](https://github.com/ivampiresp/Sakura/wiki/Git-%E4%B8%8B%E8%BD%BD%E3%80%81%E6%9B%B4%E6%96%B0%E6%8C%87%E5%8D%97)）；如果选择下载压缩包，解压后记得把文件夹名改回 `Sakura`，也即保证主题路径为 `/wp-content/themes/Sakura/`；请安装必装插件 [WP Statistics](https://wordpress.org/plugins/wp-statistics/)；请留意主题说明里的其他注意事项。
主题新加：<https://ivampiresp.com/theme-sakurafull/>
原主题使用说明见：<https://2heng.xin/theme-sakura/>
注意，请将以下代码添加到主题自定义CSS中！

#banner_wave_1 {
    width:auto;
    height:65px;
    background:url("https://cdn.jsdelivr.net/gh/honjun/cdn@1.6/img/other/wave1.png") repeat-x;
    _filter:alpha(opacity=80);
    position:absolute;
    bottom:0;
    width:1000%;
    left:0px;
    z-index:1;
    opacity:1;
    transiton-property:opacity,bottom;
    transition-duration:.4s,.4s
}
#banner_wave_2 {
    width:auto;
    height:80px;
    background:url("https://cdn.jsdelivr.net/gh/honjun/cdn@1.6/img/other/wave2.png") repeat-x;
    _filter:alpha(opacity=80);
    position:absolute;
    bottom:0;
    width:1000%;
    left:0;
    z-index:0;
    opacity:1;
    transiton-property:opacity,bottom;
    transition-duration:.4s,.4s
}
.banner_wave_hide,.banner_wave_hide_fit_skin {
    opacity:0 !important;
    bottom:-999px !important
}
.headertop-down {
    position:absolute;
    bottom:50px;
    left:calc(50% - 14px);
    cursor:pointer;
    z-index:5
}
@media(max-width:860px) {
    .headertop-down {
    display:none
}
}.headertop-down i {
    font-size:28px;
    color:#fff;
    -ms-transform:scale(1.5,1);
    -webkit-transform:scale(1.5,1);
    transform:scale(1.5,1)
}

原主题仓库国内镜像：<https://gitee.com/mashirozx/Sakura>

希望你喜欢！

### 打赏支持~
原作者：[微信支付](https://view.moezx.cc/images/2018/05/28/WeChanQR.png) | [支付宝](https://view.moezx.cc/images/2018/05/28/AliPayQR.jpg) | [PayPal](https://paypal.me/mashirozx)
默默跟在后面。。。
[微信支付](https://static.ivampiresp.com/2019/04/e1556357765199.png) | [支付宝](https://static.ivampiresp.com/2019/04/67CBA74E-7B26-47B5-91B6-3ED4FC720D5C.jpeg)

### 需要服务器吗？
<a href="https://www.vultr.com/?ref=7674346"><img src="https://www.vultr.com/media/banner_3.png" width="300" height="250"></a>
