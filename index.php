<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>主页</title>
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="JavaScript/index.js"></script>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/main.css" />
    <link rel="stylesheet" href="assets/swiper.min.css" />
    <link href="assets/index.css" rel="stylesheet" />
    <link href="assets/swiper-3.4.2.min.css" rel="stylesheet" />
    <script src="JavaScript/swiper-3.4.2.jquery.min.js"></script>
    <script src="JavaScript/myscript.js"></script>
</head>

<body data-offset="30" data-target="#container" data-spy="scroll">
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <!--导航栏-->
                <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="container">
                    <div class="navbar-header" id="header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a class="navbar-brand" href="index.html">
                            <h4>直流店</h4>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li> <a href="#selling">电子书</a></li>
                            <li> <a href="#searching">学习资源</a></li>
                        </ul>
                        <form class="navbar-form navbar-left" role="search" id="search_btn">
                            <div class="form-group">
                                搜索
                                <input class="form-control" type="text" />
                            </div>
                            <!--在此处将button改为input-->
                            <button type="submit" class="btn btn-default btn-xm"><a href="search.html">Go</a> </button>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li> <a href="login.html">登录</a></li>
                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">我的信息 <strong class="caret"></strong></a>
                                <ul class="dropdown-menu">
                                    <li> <a href="sell.html">上传</a></li>
                                    <li> <a href="mystore.html">编辑</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!--main-->
                <div class="col-md-12 column" id="main">
                    <!--正在出售-->
                    <div>
                        <div class="row">
                            <div class="page-header col-md-4" id="selling">
                                <h1>电子书</h1>
                            </div>
                        </div>
                        <div class="row" id="sell-all">
                            <div class="col-md-2" id="sell">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/fengmian/fengmian1.jpg" id="sell-img" />
                                    <div class="caption" id="jieshao">
                                        <h4><small>JavaScript权威指南</small></h4><hr />
                                        <p>标签：编程书籍</p>
                                      
                                        <p> <a class="btn btn-primary" href="detail.html">查看详情</a> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2" id="sell">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/fengmian/fengmian2.jpg" id="sell-img" />
                                    <div class="caption" id="jieshao">
                                        <h4>电子书</h4>
                                        <p>标签：编程书籍</p>
                                        <p>这里有一些简单介绍</p>
                                        <p> <a class="btn btn-primary" href="detail.html">查看详情</a> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2" id="sell">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/fengmian/fengmian3.jpg" id="sell-img" />
                                    <div class="caption" id="jieshao">
                                        <h4>电子书</h4>
                                        <p>标签：编程书籍</p>
                                        <p>这里有一些简单介绍</p>
                                        <p> <a class="btn btn-primary" href="detail.html">查看详情</a> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2" id="sell">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/fengmian/fengmian4.jpg" id="sell-img" />
                                    <div class="caption" id="jieshao">
                                        <h4>电子书</h4>
                                        <p>标签：编程书籍</p>
                                        <p>这里有一些简单介绍</p>
                                        <p> <a class="btn btn-primary" href="detail.html">查看详情</a> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2" id="sell">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/fengmian/fengmian5.jpg" id="sell-img" />
                                    <div class="caption" id="jieshao">
                                        <h4>电子书</h4>
                                        <p>标签：编程书籍</p>
                                        <p>这里有一些简单介绍</p>
                                        <p> <a class="btn btn-primary" href="detail.html">查看详情</a> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2" id="sell">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/fengmian/fengmian6.jpg" id="sell-img" />
                                    <div class="caption" id="jieshao">
                                        <h4>电子书</h4>
                                        <p>标签：编程书籍</p>
                                        <p>这里有一些简单介绍</p>
                                        <p> <a class="btn btn-primary" href="detail.html">查看详情</a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="sell-all">
                            <div class="col-md-2" id="sell">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/fengmian/fengmian7.jpg" id="sell-img" />
                                    <div class="caption" id="jieshao">
                                        <h4>电子书</h4>
                                        <p>标签：名著</p>
                                        <p>这里有一些简单介绍</p>
                                        <p> <a class="btn btn-primary" href="detail.html">查看详情</a> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2" id="sell">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/fengmian/fengmian8.jpg" id="sell-img" />
                                    <div class="caption" id="jieshao">
                                        <h4>电子书</h4>
                                        <p>标签：名著</p>
                                        <p>这里有一些简单介绍</p>
                                        <p> <a class="btn btn-primary" href="detail.html">查看详情</a> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2" id="sell">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/fengmian/fengmian9.jpg" id="sell-img" />
                                    <div class="caption" id="jieshao">
                                        <h4>电子书</h4>
                                        <p>标签：名著</p>
                                        <p>这里有一些简单介绍</p>
                                        <p> <a class="btn btn-primary" href="detail.html">查看详情</a> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2" id="sell">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/fengmian/fengmian10.jpg" id="sell-img" />
                                    <div class="caption" id="jieshao">
                                        <h4>电子书</h4>
                                        <p>标签：名著</p>
                                        <p>这里有一些简单介绍</p>
                                        <p> <a class="btn btn-primary" href="detail.html">查看详情</a> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2" id="sell">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/fengmian/fengmian11.jpg" id="sell-img" />
                                    <div class="caption" id="jieshao">
                                        <h4>电子书</h4>
                                        <p>标签：名著</p>
                                        <p>这里有一些简单介绍</p>
                                        <p> <a class="btn btn-primary" href="detail.html">查看详情</a> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2" id="sell">
                                <div class="thumbnail">
                                    <img alt="300x200" src="img/fengmian/fengmian12.jpg" id="sell-img" />
                                    <div class="caption" id="jieshao">
                                        <h4>电子书</h4>
                                        <p>标签：名著</p>
                                        <p>这里有一些简单介绍</p>
                                        <p> <a class="btn btn-primary" href="detail.html">查看详情</a> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--分页-->
                        <div id="pagination">
                            <ul class="pagination ">
                                <li> <a href="#">前一页</a></li>
                                <li> <a href="#">1</a></li>
                                <li> <a href="#">2</a></li>
                                <li> <a href="#">3</a></li>
                                <li> <a href="#">4</a></li>
                                <li> <a href="#">5</a></li>
                                <li> <a href="#">后一页</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--正在寻找-->
                    <div>
                        <div class="page-header" id="searching">
                            <h1>学习资源</h1>
                        </div>
                        <div class="col-md-12 column">
                            <div class="col-md-3 column">
                                <h2>高等代数期末试题</h2>
                                <p>标签：高等代数</p>
                                <p>描述：北京大学数学学院2017高等代数期末试题</p>
                                <p> <a class="btn" href="get-detail.html">详情&raquo;</a></p>
                            </div>
                            <div class="col-md-3 column">
                                <h2>高等代数期末试题</h2>
                                <p>标签：高等代数</p>
                                <p>描述：北京大学数学学院2017高等代数期末试题</p>
                                <p> <a class="btn" href="get-detail.html">详情&raquo;</a></p>
                            </div>
                            <div class="col-md-3 column">
                                <h2>高等代数期末试题</h2>
                                <p>标签：高等代数</p>
                                <p>描述：北京大学数学学院2017高等代数期末试题</p>
                                <p> <a class="btn" href="get-detail.html">详情&raquo;</a></p>
                            </div>
                            <div class="col-md-3 column">
                                <h2>高等代数期末试题</h2>
                                <p>标签：高等代数</p>
                                <p>描述：北京大学数学学院2017高等代数期末试题</p>
                                <p> <a class="btn" href="get-detail.html">详情&raquo;</a></p>
                            </div>
                        </div>
                        <div class="col-md-12 column">
                            <div class="col-md-3 column">
                                <h2>高等代数期末试题</h2>
                                <p>标签：高等代数</p>
                                <p>描述：北京大学数学学院2017高等代数期末试题</p>
                                <p> <a class="btn" href="get-detail.html">详情&raquo;</a></p>
                            </div>
                            <div class="col-md-3 column">
                                <h2>高等代数期末试题</h2>
                                <p>标签：高等代数</p>
                                <p>描述：北京大学数学学院2017高等代数期末试题</p>
                                <p> <a class="btn" href="get-detail.html">详情&raquo;</a></p>
                            </div>
                            <div class="col-md-3 column">
                                <h2>高等代数期末试题</h2>
                                <p>标签：高等代数</p>
                                <p>描述：北京大学数学学院2017高等代数期末试题</p>
                                <p> <a class="btn" href="get-detail.html">详情&raquo;</a></p>
                            </div>
                            <div class="col-md-3 column">
                                <h2>高等代数期末试题</h2>
                                <p>标签：高等代数</p>
                                <p>描述：北京大学数学学院2017高等代数期末试题</p>
                                <p> <a class="btn" href="get-detail.html">详情&raquo;</a></p>
                            </div>
                        </div>
                        <!--分页------>
                        <div id="pagination">
                            <ul class="pagination ">
                                <li> <a href="#">前一页</a></li>
                                <li> <a href="#">1</a></li>
                                <li> <a href="#">2</a></li>
                                <li> <a href="#">3</a></li>
                                <li> <a href="#">4</a></li>
                                <li> <a href="#">5</a></li>
                                <li> <a href="#">后一页</a></li>
                            </ul>
                        </div>
                        <hr>
                        <!--资源分类------>
                        <div class="tabbable" id="tabs-18554">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#panel-441535" data-toggle="tab">电子书</a>
                                </li>
                                <li>
                                    <a href="#panel-876256" data-toggle="tab">学习资源</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="panel-441535">
                                    <p>
                                        <ul class="nav nav-pills">
                                            <li class="active">
                                                <a href="#"> <span class="badge pull-right">111</span>编程书籍</a>
                                            </li>
                                            <li>
                                                <a href="#"> <span class="badge pull-right">222</span>名著</a>
                                            </li>
                                        </ul>
                                    </p>
                                </div>
                                <div class="tab-pane" id="panel-876256">
                                    <p>
                                        <ul class="nav nav-pills">
                                            <li class="active">
                                                <a href="#"> <span class="badge pull-right">33333</span>考试资源</a>
                                            </li>
                                            <li>
                                                <a href="#"> <span class="badge pull-right">44444</span>课件</a>
                                            </li>
                                            <li>
                                                <a href="#"> <span class="badge pull-right">55555</span>笔记</a>
                                            </li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="scroll" id="scroll" style="display:none;">
        回到顶部
    </div>
    <!--采用container-fluid，使得整个页尾的宽度为100%，并设置它的背景色-->
    <div class="footer">
        &copy;&nbsp;Zhiliu&nbsp;&nbsp;&nbsp;2017
        <ul class=" pull-right">
            <li><a href="about_us.html">关于我们</a> </li>
            <li><a href="link.html">联系我们</a></li>
            <li><a href="help.html">使用说明</a></li>
        </ul>
    </div>
</body>

</html>