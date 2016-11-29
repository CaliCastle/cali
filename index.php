<?php
require_once('functions.php');

include_once ('inc/setLang.php');
$domain = 'cali';
bindtextdomain ($domain , "./locale/");
bind_textdomain_codeset($domain, 'UTF-8' );
textdomain($domain); 

?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <meta name="keywords" content="Mr.Cali,Cali,Cali Castle,Launchpad,凯尔尼克,Calnic,CALNIC, Abletive, Ableton Live, Ableton">
    <meta name="description" content="Cali Castle的个人网站，Ableton Live音乐社区站长，电子音乐制作，网页设计与开发，编程，热爱Apple Products">
    <meta name="author" content="Cali">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Cali Castle">
    <meta property="og:title" content="Cali Castle - 主页">
    <meta property="og:url" content="http://www.calicastle.com/">
    <meta property="og:image" content="img/Samaritan-Launchpad.jpg">
    <meta property="og:description" content="Cali Castle的个人网站，Ableton Live音乐社区站长，电子音乐制作，网页设计与开发，编程，热爱Apple Products">
    <title>Cali Castle - <?php echo _("主页"); ?></title>
    <link href="img/favicon.ico" type="image/x-icon" rel="icon">
    <link href="img/favicon.ico" type="image/x-icon" rel="shortcut icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet" >
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/queries.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <script type="text/javascript" src="https://tajs.qq.com/stats?sId=49913615" charset="UTF-8"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
      <body id="top">
        <header id="home">
          <nav>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                  <nav class="pull">
                    <ul class="top-nav">
                      <li><a href="#intro"><?php echo _("自我介绍"); ?> <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#features"><?php echo _("热衷"); ?> <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#experience"><?php echo _("经历"); ?> <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#portfolio"><?php echo _("作品"); ?> <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#friend"><?php echo _("朋友"); ?> <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                      <li><a href="#contact"><?php echo _("关于我"); ?> <span class="indicator"><i class="fa fa-angle-right"></i></span></a></li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </nav>
          <section class="hero" id="hero">
            <div class="container section-foreground">
              <div class="row">
                <div class="col-md-12 text-right navicon">
                  <a id="nav-toggle" class="nav_slide_button" href="#"><span></span></a>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center inner" id="welcome">
                  <h1 class="animated fadeInDown"><?php echo _("欢迎光临<span>Cali</span>的小站"); ?></h1>
                    <p class="animated fadeInUp delay-05s"><?php echo _("继续往下滑动"); ?> <i class="fa fa-chevron-down"></i></p>
                </div>
              </div>
              <div class="row" id="desc">
                <div class="col-md-6 col-md-offset-3 text-center">
                  <p class="animated fadeInRight delay-1s"><?php echo _("Abletive创始人"); ?></p>
                </div>
              </div>

            </div>
            <div class="section-background fixed">
                <div class="fixed" style="pointer-events: auto; -webkit-filter: blur(0px); opacity: 1; transform: scale3d(1,1,1);">
                   <?php if (!is_mobile_request()) {
    echo '<video src="video/banner-vid.mp4" autoplay loop></video>'; } ?>
                    <div class="video-thumb"></div>
                </div>
              </div>
          </section>
        </header>
        <section class="intro text-center section-padding" id="intro">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2 wp1">
                <h1 class="arrow"><?php echo _("Hi, 打声招呼，先自我介绍一下"); ?></h1>
                <p><?php echo _("我叫Cali, 全名是"); ?><strong>Cali Castle</strong>, <?php echo _("今年"); ?><script type="text/javascript">var d = new Date(); var m = d.getMonth(); var y = d.getFullYear(); document.write(m>=11?y-1995:y-1996);</script><?php echo _('岁，身高...好像有哪里不对...总之你看到的"<strong>Mr.Cali</strong>"就是我，不过那是我比较早期的名字了。嗯。。。中文名呢，是“<strong>郭晓楠</strong>”，就告诉一下你啦，毕竟大家都还是叫我Cali,或者拼音读法：<strong>擦力/擦里</strong> 等等奇葩的叫法(都归功于各位朋友). 关于我的更多详情，请继续往下看哦 '); ?>O(∩_∩)O</p>
              </div>
            </div>
          </div>
        </section>
        <section class="features text-center section-padding" id="features">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow"><?php echo _("我热衷于"); ?></h1>
                <div class="features-wrapper">
                  <div class="col-md-4 wp2">
                    <div class="icon">
                      <i class="fa fa-music shadow"></i>
                    </div>
                    <h2><?php echo _("音乐"); ?></h2>
                      <p><?php echo _("小时候学会了二胡与萨克斯，但从初二开始我买了第一个电容麦，开始在家里用Au翻唱，在此之前比较喜欢的是<strong>Eminem</strong> 等人的Hip Hop/Rap风格歌曲，直到高考之际无意间听到了<strong>Skrillex</strong> 的歌并且接触了<strong>Launchpad与Ableton Live</strong>. 就此开始了制作电子乐的旅途。目前为止已经发表多张EP与2张专辑."); ?></p>
                  </div>
                  <div class="col-md-4 wp2 delay-05s">
                    <div class="icon">
                      <i class="fa fa-code shadow"></i>
                    </div>
                    <h2><?php echo _("编程"); ?></h2>
                    <p><?php echo _("通俗说就是敲代码，不过我更喜欢解决问题的过程与享受结果的喜悦。选的大学专业是<strong>软件技术</strong>，我在不会编程的时候就开始喜欢上了编程，慢慢的领悟了许许多多的编程奥秘。逐渐掌握<strong>C, C++, C#, Objective-C, Swift</strong>等基本语言，还有<strong>PHP, ASP(VB)</strong>等服务器端脚本语言. 最后<strong>HTML,CSS,Javascript</strong>网页前端三剑客也是在投入了大量的时间精力后换取到的."); ?></p>
                  </div>
                  <div class="col-md-4 wp2 delay-1s">
                    <div class="icon">
                      <i class="fa fa-apple shadow"></i>
                    </div>
                    <h2><?php echo _("苹果"); ?></h2>
                    <p><?php echo _("其实我已经算是果粉了，从最初开始买了iPhone 4的那一天起，我就被<strong>iOS</strong>的独特魅力深深吸引住了（甚至我会很在意别人大小写拼写），后陆续入的产品有<strong>iPod nano 7, iPad Air, MacBook Air与Apple Watch</strong>. 现在才发现每一系列都集齐了! 最后<strong>Mac OS X</strong>操作系统更是喜欢<strong>Unix</strong>的稳定与<strong>Apple</strong>的酷炫UI&amp;交互相结合，再与Trackpad手势在一起使用简直大赞."); ?></p>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="text-center" id="experience">
          <div class="container-fluid nopadding experience-services">
            <div class="wrapper">
              <div class="exp-photo">
                <div class="wp3"></div>
              </div>
              <div class="fluid-white"></div>
            </div>
            <div class="container designs">
              <div class="row">
                <div class="col-md-5 col-md-offset-7">
                  <div id="servicesSlider">
                    <ul class="slides">
                      <li>
                        <h1 class="arrow"><?php echo _("现场表演经历"); ?></h1>
                        <p><?php echo _("曾在各种嘻哈/电音派对担任DJ"); ?> </p>
                        <p>
                        <?php echo _("2014年在深圳职业技术学院计算机工程学院举办的计震四座大赛中表演的古典与现代的结合《神话》获得了最佳人气奖。"); ?>
                        </p>
                        <p><?php echo _("Launchpad是我表演的必备工具，还有Allen &amp; Heath Xone K2也少不了。"); ?></p>
                        <p><?php echo _("2014年6月受邀共赴成都参加首届Eminem歌迷会，表演歌曲《Seduction》，《Cinderella Man》，《Renegade》，并献唱即将发行的首张MIXTAPE混音专辑《C.A.L.N.I.C》中的歌曲《Sing 4 the Moment》，反响热烈，得到成都Eminem粉丝们的极大欢迎和支持；"); ?></p>
                      </li>
                      <li>
                        <h1 class="arrow"><?php echo _("成长经历"); ?></h1>
                        <p><?php echo _("2010开始在网络上发表翻唱视频，后来在2013年独立发行了《Start of the Road》嘻哈专辑 ，2014年与IverNick搭档组合成了电音说唱组合凯尔尼克（Calnic）"); ?></p>
                        <p><?php echo _("在此之前很多歌曲也有许多人参加了合作，例如香港的Holcomb,美国的Izzo,加拿大的JimBuffy以及同深圳的Ivernick和同中国的iShadow，与Ivernick组合成Calnic发行新合作专辑，也即将于iShadow组合成Big Chaos发行新合作电子EP专辑。"); ?></p>
                        <p><?php echo _("接触了Novation Launchpad, Ableton Live，开始了电子音乐创作，并在网上发布了大量Launchpad有关视频，其中有《Inspirin' Daft Virus》，《Skill The Nero》，《Scary Monsters &amp; Nice Sprites》和《K-Pop Culture Cali Remix》等，然后制作了Cali Live 9教程并免费提供大家学习."); ?></p>
                      </li>
                      <li>
                          <h1 class="arrow"><?php echo _("受影响艺人"); ?></h1>
                          <p><?php echo _("音乐偶像："); ?>Skrillex, Lindsey Stirling, Christina Grimmie, Macklemore &amp; Ryan Lewis, Virtual Riot, Eminem, Yelawolf, Royce Da 5'9'', Cro, Twenty One Pilots</p>
                          <p><?php echo _("影视偶像："); ?>Zooey Deschanel, Shailene Woodley, Michael Emerson, James Caviezel, Scarlett Johansson</p>
                          <p><?php echo _("其他偶像："); ?>Ryan Higa, Stefanie Giesinger</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="swag text-center">
          <div class="container">
           <div class="swag-background">
               <img src="img/keyboard-bg.jpg">
           </div>
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                    <h1><?php echo _("不断超越自己 才能更完美"); ?></h1>
                  <h1><span><?php echo _("我的作品 我的态度"); ?></span></h1>
                  <h3 class="link link--nukun">My att<span>i</span>t<span>u</span>de</h3>
                <a href="#portfolio" class="down-arrow-btn"><i class="fa fa-chevron-down"></i></a>
              </div>
            </div>
          </div>
        </section>
        <section class="portfolio text-center section-padding" id="portfolio">
          <div class="container">
            <div class="row">
              <div id="portfolioSlider">
                <ul class="slides">
                  <li>
                    <div class="col-md-4 wp4">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/electric-2014.jpg" alt="Electric 2014">
                          <div class="overlay">
                            <a href="http://www.xiami.com/album/1520466495" class="expand" target="_blank"><i class="fa xiami" style="padding:10px;border-radius:50%;-webkit-border-radius:50%;">虾</i><br><?php echo _("点击试听"); ?></a>
                          </div>
                        </div>
                      </div>
                      <h2>Electric 2014</h2>
                      <p><?php echo _("2014年的电子乐EP，在<strong>Ableton Live</strong>环境下制作完成. 与<strong>Steo Le Panda</strong>合作完成了中国版《<strong>Harder Better Faster Stronger</strong>》,其中还收录了我Remix的<strong>克罗地亚狂想曲</strong> 得到比较多的好评。个人推荐歌曲：<strong>Galaxy, Hyper与Red Alert</strong>(红色警戒)"); ?></p>
                    </div>
                    <div class="col-md-4 wp4 delay-05s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/calnic-mixtape.jpg" alt="C.A.L.N.I.C">
                          <div class="overlay">
                            <a href="http://www.xiami.com/album/922889662" class="expand" target="_blank"><i class="fa xiami" style="padding:10px;border-radius:50%;-webkit-border-radius:50%;">虾</i><br><?php echo _("点击试听"); ?></a>
                          </div>
                        </div>
                      </div>
                      <h2>C.A.L.N.I.C</h2>
                      <p><?php echo _("整张专辑融合<strong>Eminem, Bruno Mars, Skylar Grey, Nate Ruess, Cee-lo Green, Kid Rock, Eric Turner</strong>等顶级欧美大牌之声，歌曲由<strong>IverNick</strong>操刀填词，<strong>Cali</strong>混音制作，融合Pop, R&amp;B,混合EDM和Rap, 重新定义New-School Hip Hop, 一定带给你前所未有的听觉盛宴！"); ?></p>
                    </div>
                    <div class="col-md-4 wp4 delay-1s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/daynnight.jpg" alt="Day n night">
                          <div class="overlay">
                            <a href="http://www.xiami.com/album/321057672" class="expand" target="_blank"><i class="fa xiami" style="padding:10px;border-radius:50%;-webkit-border-radius:50%;">虾</i><br><?php echo _("点击试听"); ?></a>
                          </div>
                        </div>
                      </div>
                      <h2>Day 'N' Nite (Cali Remix)</h2>
                      <p><?php echo _("Day 'N' Night是<strong>Kid Cudi</strong>大火大热的歌曲，Cali在原曲Acapella的基础上进行了重新混音.风格Genre: <strong>Dubstep</strong>"); ?></p>
                    </div>
                  </li>
                  <li>
                    <div class="col-md-4 wp4">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/reborn.jpg" alt="Reborn">
                          <div class="overlay">
                            <a href="http://www.xiami.com/album/1407473997" class="expand" target="_blank"><i class="fa xiami" style="padding:10px;border-radius:50%;-webkit-border-radius:50%;">虾</i><br><?php echo _("点击试听"); ?></a>
                          </div>
                        </div>
                      </div>
                      <h2>Reborn EP</h2>
                      <p><?php echo _("<strong>Cali </strong>与 <strong>iShadow</strong> 成立的组合<strong>Big Chaos</strong>，
耗时数月带来了首张电子乐专辑《<strong>Reborn EP</strong>》。
专辑以<strong>Dubstep</strong>曲风为主，同时也有<strong>Progressive House、Electro House、Glitch Hop</strong>等.推荐曲目：<strong>Reborn, Sleepy Hollow, Want Me To.</strong>"); ?></p>
                    </div>
                    <div class="col-md-4 wp4 delay-05s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/startoftheroad.jpg" alt="Start of the Road">
                          <div class="overlay">
                            <a href="http://www.xiami.com/album/2007471233" class="expand" target="_blank"><i class="fa xiami" style="padding:10px;border-radius:50%;-webkit-border-radius:50%;">虾</i><br><?php echo _("点击试听"); ?></a>
                          </div>
                        </div>
                      </div>
                      <h2>Start of the Road</h2>
                      <p><?php echo _("15岁的时候（2010）第一次听到了阿姆的专辑《<strong>Recovery</strong>》，被深深的吸引以后爱上了嘻哈说唱，开始了自己的录音室建设，翻唱，原创以及MV都在不断的进步。《<strong>Start of the Road</strong>》收录了Mr.Cali自2011年大部分的翻唱及原创作品，作为自己的成长之路的开始。同时很多歌曲也有许多人参加了合作"); ?>.</p>
                    </div>
                    <div class="col-md-4 wp4 delay-1s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/idv.jpg" alt="Inspirin' Daft Virus">
                          <div class="overlay">
                            <a href="http://www.tudou.com/programs/view/R9_HALiTO70/" class="expand" target="_blank"><i class="fa fa-film"></i><br><?php echo _("点击观看"); ?></a>
                          </div>
                        </div>
                      </div>
                      <h2>Inspirin' Daft Virus</h2>
                      <p><?php echo _("我的第一个Launchpad视频作品，工程命名来自<strong>Inspire – Throttle, Daft from Daft Punk, Virus – M4Sonic</strong>.工程可前往官方Abletive社区搜索下载"); ?></p>
                    </div>
                  </li>
                  <li>
                    <div class="col-md-4 wp4">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/smns.jpg" alt="SMNS">
                          <div class="overlay">
                            <a href="http://www.tudou.com/programs/view/rwdSFQItHAQ/" class="expand" target="_blank"><i class="fa fa-film"></i><br><?php echo _("点击观看"); ?></a>
                          </div>
                        </div>
                      </div>
                      <h2>Scary Monsters &amp; Nice Sprites</h2>
                      <p><?php echo _("来自<strong>SKrillex</strong>的《<strong>Scary Monsters &amp; Nice Sprites</strong>》想必很多人都耳熟能详，我特地做成了多轨工程并带教学轨分享给大家，工程教程等可在Abletive社区找到。"); ?></p>
                    </div>
                    <div class="col-md-4 wp4 delay-05s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/skillthenero.jpg" alt="Skill The Nero">
                          <div class="overlay">
                            <a href="http://www.tudou.com/programs/view/okZ4DTKhRcE/" class="expand" target="_blank"><i class="fa fa-film"></i><br><?php echo _("点击观看"); ?></a>
                          </div>
                        </div>
                      </div>
                      <h2>Skill The Nero (Mashup)</h2>
                      <p><?php echo _("这是一个<strong>Mashup</strong>，意思是很多歌曲混合成了一首，由标题可以看出采样来自了<strong>Skrillex, Kill The Noise与Nero</strong>等，不是很难弹但是比较考验Session节拍乐感的掌握能力。"); ?></p>
                    </div>
                    <div class="col-md-4 wp4 delay-1s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/tetrisherocali.jpg" alt="Inspirin' Daft Virus">
                          <div class="overlay">
                            <a href="http://www.tudou.com/programs/view/GaupXQrTa-s/" class="expand" target="_blank"><i class="fa fa-film"></i><br><?php echo _("点击观看"); ?></a>
                          </div>
                        </div>
                      </div>
                      <h2>Tetris Hero 98% Expert</h2>
                      <p><?php echo _("比较难的一个工程之一，工程来自<strong>Nev</strong>.进过我稍微改编终于练成，工程可前往官方Abletive社区搜索下载。歌曲由俄罗斯方块的旋律与<strong>Los Angeles Hero</strong>的Drop结合在一起"); ?></p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <div class="ignite-cta text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <a href="javascript:void(0)" class="like-btn" id="like"><?php echo _("喜欢？点个赞吧"); ?></a>
              </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1 style="color:#EEE;"><?php echo _("已有"); ?><span id="likes-num" class="liked"><?php echo getLikes(); ?></span><?php echo _("人点赞了呢"); ?> \(^o^)/~</h1>
                </div>
            </div>
          </div>
        </div>
        <section class="friend text-center section-padding " id="friend">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                  <h1 class="arrow"><?php echo _("我的朋友"); ?></h1>
              </div>
            </div>
            <div class="row">
              <div class="friend-wrapper">
                <div id="friendSlider">
                  <ul class="slides">
                    <li>
                      <div class="col-md-4 wp5">
                        <img src="img/3ASiC-avatar.jpg" alt="3ASiC Avatar">
                        <h2 class="link link--takiri" style="text-transform:none;">3ASiC</h2>
                          <p><?php echo _('来自南京的DJ、制作人，<abbr title="Project Sync">同步计划</abbr>电子音乐厂牌主理人，国内低音音乐与电子舞曲代表人物之一。已在<strong>iTunes、Beatport</strong>等国外各大音乐售卖网站发行多首单曲以及两张EP，目前主要致力于低音音乐的制作。3ASiC近期发布了他的新专辑《<strong>THIS ALBUM MADE MY FRIENDS BASSICK</strong>》，流派主要是<strong>Trap/Future Bass/Drum and Bass</strong>.'); ?></p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="http://weibo.com/236178990" class="social-btn weibo" target="_blank"><i class="fa fa-weibo"></i></a></li>
                            <li><a href="https://www.facebook.com/3ASiC" class="social-btn facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="mailto:3asic@projectsync.info" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                            <li><a href="http://i.xiami.com/the3asic" class="social-btn xiami" target="_blank"><i class="fa">虾</i></a></li>
                          </ul>
                        </div>
                      </div>

                      <div class="col-md-4 wp5 delay-05s">
                        <img src="img/anti-general.jpg" alt="friend Member">
                        <h2 class="link link--takiri">Anti-General</h2>
                        <p><?php echo _("中国<strong>Trap、Moombahton</strong>制作人，喜欢发掘小众音乐文化，擅长将欧美电子与异域民族音乐相结合，追求与众不同的创作理念和模式，
创建了厂牌<strong>Mavericks</strong>，希望将特立独行音乐精神发扬于世."); ?></p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="http://weibo.com/908067823" class="social-btn weibo" target="_blank"><i class="fa fa-weibo"></i></a></li>
                            <li><a href="https://soundcloud.com/anti-general" class="social-btn soundcloud" target="_blank"><i class="fa fa-soundcloud"></i></a></li>
                            <li><a href="http://i.xiami.com/anti-general" target="_blank" class="social-btn xiami"><i class="fa">虾</i></a></li>
                            <li><a href="mailto:ziqizhong@qq.com" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-4 wp5 delay-1s">
                        <img src="img/skey.png" alt="Skey">
                        <h2 class="link link--takiri">Skey</h2>
                        <p><?php echo _("山东人，制作人/DJ，<strong>Monstapiece</strong>独立电子音乐厂牌发起人/主理人。主要风格<strong>House、Drum &amp; Bass、Trap、Downtempo</strong>。05年开始接触并尝试电子音乐制作。14年与好友一同发起<strong>Monstapiece</strong>地下厂牌。15年初受邀为伦敦政经中国发展论坛制作开场视频配乐。15年5月受邀参加太湖迷笛电子音乐节。"); ?></p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="http://weibo.com/345940507" class="social-btn weibo" target="_blank"><i class="fa fa-weibo"></i></a></li>
                            <li><a href="http://i.xiami.com/skey" class="social-btn xiami" target="_blank"><i class="fa">虾</i></a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="col-md-4 wp5">
                        <img src="img/edjean.jpg" alt="EDJean">
                        <h2 class="link link--takiri" style="text-transform:none;">EDJean(炫宇)</h2>
                        <p><?php echo _("95年新晋电子音乐制作人、3MIX独立厂牌创始人、3MIX原创音乐工作室：曲作者/编曲。作品曾多次登上网易云原创榜，《<strong>No Money,No Honey</strong>》更成为乐视票选人气铃声。他的作品风格多变，而相对得心应手的风格为<strong>House/Complextro</strong>"); ?></p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="http://music.163.com/?spm=a1z1s.6632057.389823137.4.LCgmV3#/artist?id=966153" class="social-btn weibo" target="_blank"><i class="fa fa">易</i></a></li>
                            <li><a href="http://i.xiami.com/hyunyu" class="social-btn xiami" target="_blank"><i class="fa">虾</i></a></li>
                            <li><a href="mailto:451304232@qq.com" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                            <li><a href="http://weibo.com/edjhyunyu" class="social-btn weibo" target="_blank"><i class="fa fa-weibo"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-4 wp5 delay-05s">
                        <img src="img/zbreak.jpg" alt="ZBreak">
                        <h2 class="link link--takiri">ZBreak</h2>
                        <p><?php echo _("外号叫赵总，常用ID为Zbreak，93年陕西人，现在暂住英国读大学，以前经常在斗鱼直播宣传<strong>Launchpad</strong>和社区网站，虽然算不上厉害，但是自己也很用心的练习"); ?></p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="tencent://AddContact/?fromId=45&fromSubId=1&subcmd=all&uin=375507360" class="social-btn twitter" target="_blank"><i class="fa fa-qq"></i></a></li>
                            <li><a href="http://www.douyutv.com/zbreak" class="social-btn xiami" target="_blank"><i class="fa">鱼</i></a></li>
                            <li><a href="mailto:evanszz93@hotmail.com" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-4 wp5 delay-1s">
                        <img src="img/boluo.jpg" alt="椒盐菠萝P">
                        <h2 class="link link--takiri"><?php echo _("椒盐菠萝"); ?></h2>
                        <p><?php echo _("黑龙江省的中学生，电音爱好者,<strong>BILIBILI</strong>弹幕视频网年轻的UP主。擅长使用<strong>Launchpad</strong>配合<strong>Ableton Live</strong>进行演奏，代表作品有《<strong>Summer Ashes</strong>》《<strong>Give My Regards! </strong>》"); ?></p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="tencent://AddContact/?uin=1472336740&fromId=45&fromSubId=1&subcmd=all" class="social-btn twitter"><i class="fa fa-qq"></i></a></li>
                            <li><a href="http://space.bilibili.com/162955#!/index" class="social-btn facebook" target="_blank"><i class="fa">bi</i></a></li>
                            <li><a href="mailto:1472336740@qq.com" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="col-md-4 wp5">
                        <img src="img/colorlight.jpg" alt="Color Light">
                        <h2 class="link link--takiri">Color Light</h2>
                        <p><?php echo _("00后彩灯，精通live的基础操作，乐于帮助新人，但耐心欠缺。正在学习DJ技术中..."); ?></p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="tencent://AddContact/?uin=997643500&fromId=45&fromSubId=1&subcmd=all" class="social-btn twitter" target="_blank"><i class="fa fa-qq"></i></a></li>
                            <li><a href="mailto:colorfullll@abletive.com" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                            <li><a href="http://weibo.com/u/3836365159" class="social-btn weibo" target="_blank"><i class="fa fa-weibo"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-4 wp5 delay-05s">
                        <img src="img/steo.jpg" alt="Steo Le Panda">
                        <h2 class="link link--takiri">Steo Le Panda</h2>
                        <p><?php echo _("Steo Le Panda将古筝，笙等乐器的音素与电子音乐相结合。
这种多元素的阴阳结合让你想到了大熊猫：黑白兼备，野性而又温顺，乐观却又忧愁.."); ?></p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="http://steolepanda.com" class="social-btn" target="_blank"><i class="fa fa-globe"></i></a></li>
                            <li><a href="http://i.xiami.com/steolepanda" class="social-btn xiami" target="_blank"><i class="fa">虾</i></a></li>
                            <li><a href="https://twitter.com/steolepanda" class="social-btn twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.youtube.com/user/steorganisation" class="social-btn youtube" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="https://www.facebook.com/steolepanda" class="social-btn facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-4 wp5 delay-1s">
                        <img src="img/kevin.jpg" alt="Kevin">
                        <h2 class="link link--takiri">Kevin</h2>
                        <p><?php echo _("一个苦逼的launchpad中学生玩家。我玩pad大概快有一年了（和菠萝同时玩）目前是pads模式，但是我仍然是手残_(:з」∠)_ 。。。一心想做出有炫酷<strong>Light Show</strong>的工程。除了那些好听的电音，我也热衷于acg系列的曲子，所以我也是一个穿梭在二次元的逗比～(￣▽￣～)~"); ?></p>
                        <div class="social">
                          <ul class="social-buttons">
                            <li><a href="tencent://AddContact/?uin=451921352&fromId=45&fromSubId=1&subcmd=all" class="social-btn twitter"><i class="fa fa-qq"></i></a></li>
                            <li><a href="http://space.bilibili.com/7645235#!/index" class="social-btn facebook" target="_blank"><i class="fa">bi</i></a></li>
                            <li><a href="mailto:451921352@qq.com" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="subscribe text-center">
          <div class="container">
              <ul>
                  <li>
                      <h1><i class="fa fa-paper-plane"></i><br><?php echo _("喜欢吗？订阅 获取更多资讯"); ?></h1>
                    <form id="subscribe" class="has-error">
                     <label class="control-label error" for="inputError" id="subscribe-info"></label>
                      <input type="email" name="email" id="email-field" value="" placeholder="<?php echo _("输入您的邮箱地址..."); ?>" required>
                      <input type="button" value="<?php echo _("订阅"); ?>" id="subscribe-btn">
                    </form>
                  </li>
                  <li style="position: absolute; top: 0px; left: 100%; width: 100%; height: auto;">
                      <h1><i class="fa fa-smile-o"></i><br><?php echo _("订阅成功，感谢您的关注"); ?></h1>
                      <h1>Thanks for subscribing!</h1>
                  </li>
              </ul>
          </div>
        </section>
        <section class="dark-bg text-center section-padding contact-wrap" id="contact">
          <a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow"><?php echo _("我的网站"); ?></h1>
              </div>
            </div>
            <div class="row contact-details">
              <div class="col-md-4">
                <div class="light-box box-hover">
                   <img src="img/AbletiveBBS.jpg">
                    <h2><i class="fa fa-forumbee"></i></h2>
                    <h3><?php echo _("Abletive论坛"); ?></h3>
                  <p><?php echo _("中国电子乐爱好者交流平台"); ?></p>
                  <span><?php echo _("2015-09-15号正式开放，中国电子乐爱好者聚集地，edm-china.cn/bbs.abletive.com"); ?></span>
                  <a href="http://bbs.abletive.com" target="_blank"><?php echo _("点击前往"); ?></a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="light-box box-hover">
                 <img src="img/Abletive3.0.jpg">
                  <h2><i class="fa fa-connectdevelop"></i></h2>
                    <h3><a href="http://abletive.com" target="_blank"><?php echo _("Abletive社区"); ?></a></h3>
                  <p><?php echo _("中国最大的Ableton Live音乐社区，成立于2014-12-10.<br />先已华丽升级为v3.1，社交账号绑定、VIP系统、自由投稿与全新改变的个人中心等功能等你来体验！尽在 abletive.com"); ?></p>
                  <a href="http://abletive.com" target="_blank"><?php echo _("点击前往"); ?> | </a>
                  <a href="http://koubei.baidu.com/s/abletive.com" target="_blank"><?php echo _("给个好评"); ?></a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="light-box box-hover">
                  <img src="img/calnic-website.jpg" alt="Calnic">
                  <h2><i class="fa fa-music"></i></h2>
                    <h3><a href="http://calnic.calicastle.com" target="_blank">凯尔尼克 (Calnic)</a></h3>
                  <p><?php echo _("凯尔尼克创建于2013年，由IverNick和Cali组成的嘻哈电子音乐组合。组合成员Cali是一名音乐制作人，软件工程师和DJ，而IverNick是一名Rapper，作词人和视觉摄影师，两人凭着对音乐的热爱和执着，并发布了首张专辑《C.A.L.N.I.C》。"); ?></p>
                  <a href="http://calnic.calicastle.com" target="_blank"><?php echo _("点击前往"); ?></a>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow" id="follow"><?php echo _("关注更多平台"); ?></h1>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <ul class="social-buttons">
                  <li><a href="https://twitter.com/CaliCastleMusic" class="social-btn twitter" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="mailto:cali@calicastle.com" class="social-btn"><i class="fa fa-envelope"></i></a></li>
                  <li><a href="https://www.youtube.com/channel/UCKpWU1CvR8qFvZAWyv1GDWg" class="social-btn youtube" target="_blank" title="YouTube"><i class="fa fa-youtube"></i></a></li>
                  <li><a href="https://www.facebook.com/calicastlemusic" class="social-btn facebook" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="http://weixin.calicastle.com/" class="social-btn wechat shadow" target="_blank" title="微信"><i class="fa fa-wechat"></i></a></li>
                    <li><a href="http://weibo.calicastle.com/" class="social-btn weibo" target="_blank" title="新浪微博"><i class="fa fa-weibo"></i></a></li>
                  <li><a href="https://instagram.com/calicastlemusic/" class="social-btn" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://soundcloud.com/calicastlemusic" class="social-btn soundcloud" target="_blank" title="SoundCloud"><i class="fa fa-soundcloud"></i></a></li>
                    <li><a href="http://www.kanjian.com/cali" class="social-btn kanjian" target="_blank" title="看见音乐"><i class="fa fa-user"></i></a></li>
                    <li><a href="http://i.xiami.com/calicastlemusic" class="social-btn xiami" target="_blank" title="虾米音乐">虾</a></li>
                    <li><a href="http://baike.baidu.com/link?url=R0VSLts_wil63IsMU1din5UOcSfAIEX67U_EF8r7w8z35oFGwxBSKnWWv1Bt0-FzTqaGQNkG-NRj5TT5va4vt_" class="social-btn facebook" target="_blank" title="百度百科"><i class="fa fa-paw"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <ul class="legals">
                  <li>CaliCastle.com </li>
                  <li>&copy; 2014 - <script type="text/javascript">var d = new Date(); document.write(d.getFullYear());</script>. All Rights Reserved. 粤ICP备15090834号</li>
                </ul>
              </div>
              <div class="col-md-6 credit">
                <p><?php echo _("设计 &amp; 开发 by"); ?> <a href="http://bbs.abletive.com/@calicastle" target="_blank">Cali Castle</a>. <?php echo _('<a href="http://abletive.com" target="_blank">Abletive社区</a>'); ?> <?php echo _("站长"); ?></p>
              </div>
            </div>
          </div>
        </footer>
        <div class="lang-changer">
            <i class="fa fa-language"></i>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/jquery-2.1.4.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/modernizr.js"></script>
      </body>
    </html>
