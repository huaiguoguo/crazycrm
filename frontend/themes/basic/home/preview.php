<?php
/**
 * Created by PhpStorm.
 * Author: 火柴<290559038@qq.com>
 * Date: 2017/12/5
 * Time: 20:05
 */


//dump($_SERVER);
//dump($_SERVER['REQUEST_URI']);
//dump(parse_url("http://www.baidu.com/".$_SERVER['QUERY_STRING']));
//dump(pathinfo("http://www.baidu.com/index.php".$_SERVER['QUERY_STRING']));


?>


<div class="row">
    <div class="col-md-3" role="complementary">
        <nav data-spy="affix" data-offset-top="60" data-offset-bottom="200">

            <ul class="nav bs-docs-sidenav">
                <li class="">
                    <a href="#download">下载</a>
                </li>
                <li class="">
                    <a href="#whats-included">包含的内容</a>
                    <ul class="nav">
                        <li class=""><a href="#whats-included-precompiled">预编译版</a></li>
                        <li class=""><a href="#whats-included-source">Bootstrap 源码</a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="#grunt">编译 CSS 和 JavaScript 文件</a>
                    <ul class="nav">
                        <li class=""><a href="#grunt-installing">安装 Grunt</a></li>
                        <li class=""><a href="#grunt-commands">可以使用的 Grunt 命令</a></li>
                        <li class=""><a href="#grunt-troubleshooting">除错</a></li>
                    </ul>
                </li>
                <li class="">
                    <a href="#template">基本模板</a>
                </li>
                <li class="">
                    <a href="#template">基本模板</a>
                </li>
                <li class="">
                    <a href="#template">基本模板</a>
                </li>
                <li class="">
                    <a href="#template">基本模板</a>
                </li>
                <li class="">
                    <a href="#template">基本模板</a>
                </li>
                <li class="">
                    <a href="#template">基本模板</a>
                </li>
                <li class="">
                    <a href="#template">基本模板</a>
                </li>
            </ul>

        </nav>

    </div>
    <div class="col-md-9" role="main">
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>
asdfasdfasdfasdfadfasdfasdfasdfasdfasdfasd<br/>

    </div>
</div>

<script>

    <?php $this->beginBlock('test');?>
    $('#myAffix').affix({
        offset: {
            top: 100,
            bottom: function () {
                return (this.bottom = $('.footer').outerHeight(true))
            }
        }
    })
    <?php $this->endBlock();?>
</script>

<?php //$this->registerJs($this->blocks['test'], \yii\web\View::POS_END);?>
