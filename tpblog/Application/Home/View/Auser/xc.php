<!DOCTYPE HTML>
<html>
<head>
	<title><?php echo $grzl['nc'];?>_相册</title>
	<script src="http://localhost/tpblog/public/js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/chuang.css" />
  <link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/style.css" />
  <link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/index.auser.css" />
  <link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/xc/component.css" />
  <link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/xc/demo.css" />
  <link rel="stylesheet" href="http://localhost/tpblog/public/bootstrap/css/xc/normalize.css" />
	<script src="http://localhost/tpblog/public/bootstrap/js/bootstrap.js"></script>
  <script src="http://localhost/tpblog/public/bootstrap/js/enroll.js"></script>
</head>
<body>
  <?php include(THEME_PATH . "nav.php");?>
  <div class="container">
    
    	  <div class="jumbotron">
          <h2><?php echo $grzl['nc'];?>的相册</h2>
          <h4><?php echo $grzl['bz'];?></h4>
          <p><a href="#" class="r">博客认证<span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a></p>
        </div>	

        <ol class="breadcrumb">
          <li><a href="<?php echo U("/Home/Index/index");?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp博客首页</a></li>
          <li><a href="<?php echo U("/Home/Auser/index");?>">返回博客</a></li>
        </ol>

        

        <div class="col-md-12">
            <div class="panel panel-default">

                  <div class="panel-heading">
                        个人相册
                        <a href="<?php echo U("/Home/Auser/xcadd");?>" style="float:right;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp上传相片</a>
                  </div>

                  <div class="panel-body">
                          <div class="grid">
                              <figure class="effect-lily">
                                  <img src="" alt=""/>
                                  <figcaption>
                                      <h2>Nice <span>Lily</span></h2>
                                      <p><?php echo $xp['xpsm'];?></p>
                                      <a href="http://www.lanrentuku.com/" target="_blank">View more</a>
                                  </figcaption>     
                              </figure>
                              <figure class="effect-sadie">
                                  <img src="http://localhost/xc/2.jpg" alt="img02"/>
                                  <figcaption>
                                      <h2>Holy <span>Sadie</span></h2>
                                      <p>Sadie never took her eyes off me. <br>She had a dark soul.</p>
                                      <a href="http://www.lanrentuku.com/" target="_blank">View more</a>
                                  </figcaption>     
                              </figure>
                              <figure class="effect-honey">
                                  <img src="http://localhost/xc/3.jpg" alt="img07"/>
                                  <figcaption>
                                      <h2>Dreamy <span>Honey</span> <i>Now</i></h2>
                                      <a href="http://www.lanrentuku.com/" target="_blank">View more</a>
                                  </figcaption>     
                              </figure>
                              <figure class="effect-layla">
                                  <img src="http://localhost/xc/4.jpg" alt="img04"/>
                                  <figcaption>
                                      <h2>Crazy <span>Layla</span></h2>
                                      <p>When Layla appears, she brings an eternal summer along.</p>
                                      <a href="http://www.lanrentuku.com/" target="_blank">View more</a>
                                  </figcaption>     
                              </figure>
                              <figure class="effect-zoe">
                                  <img src="http://localhost/xc/5.jpg" alt="img14"/>
                                  <figcaption>
                                      <h2>Creative <span>Zoe</span></h2>
                                      <span class="icon-heart"></span>
                                      <span class="icon-eye"></span>
                                      <span class="icon-paper-clip"></span>
                                      <p>Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
                                      <a href="http://www.lanrentuku.com/" target="_blank">View more</a>
                                  </figcaption>     
                              </figure>
                              <figure class="effect-oscar">
                                  <img src="http://localhost/xc/6.jpg" alt="img08"/>
                                  <figcaption>
                                      <h2>Warm <span>Oscar</span></h2>
                                      <p>Oscar is a decent man. He used to clean porches with pleasure.</p>
                                      <a href="http://www.lanrentuku.com/" target="_blank">View more</a>
                                  </figcaption>     
                              </figure>
                              <figure class="effect-marley">
                                  <img src="http://localhost/xc/7.jpg" alt="img09"/>
                                  <figcaption>
                                      <h2>Sweet <span>Marley</span></h2>
                                      <p>Marley tried to convince her but she was not interested.</p>
                                      <a href="http://www.lanrentuku.com/" target="_blank">View more</a>
                                  </figcaption>     
                              </figure>
                              <figure class="effect-ruby">
                                  <img src="http://localhost/xc/8.jpg" alt="img10"/>
                                  <figcaption>
                                      <h2>Glowing <span>Ruby</span></h2>
                                      <p>Ruby did not need any help. Everybody knew that.</p>
                                      <a href="http://www.lanrentuku.com/" target="_blank">View more</a>
                                  </figcaption>     
                              </figure>
                              <figure class="effect-roxy">
                                  <img src="http://localhost/xc/9.jpg" alt="img03"/>
                                  <figcaption>
                                      <h2>Charming <span>Roxy</span></h2>
                                      <p>Roxy was my best friend. She'd cross any border for me.</p>
                                      <a href="http://www.lanrentuku.com/" target="_blank">View more</a>
                                  </figcaption>     
                              </figure>
                              <figure class="effect-bubba">
                                  <img src="http://localhost/xc/10.jpg" alt="img06"/>
                                  <figcaption>
                                      <h2>Fresh <span>Bubba</span></h2>
                                      <p>Bubba likes to appear out of thin air.</p>
                                      <a href="http://www.lanrentuku.com/" target="_blank">View more</a>
                                  </figcaption>     
                              </figure>
                              <figure class="effect-romeo">
                                  <img src="http://localhost/xc/11.jpg" alt="img05"/>
                                  <figcaption>
                                      <h2>Wild <span>Romeo</span></h2>
                                      <p>Romeo never knows what he wants. He seemed to be very cross about something.</p>
                                      <a href="http://www.lanrentuku.com/" target="_blank">View more</a>
                                  </figcaption>     
                              </figure>
                              <figure class="effect-dexter">
                                  <img src="http://localhost/xc/12.jpg" alt="img12"/>
                                  <figcaption>
                                      <h2>Strange <span>Dexter</span></h2>
                                      <p>Dexter had his own strange way. You could watch him training ants.</p>
                                      <a href="http://www.lanrentuku.com/" target="_blank">View more</a>
                                  </figcaption>     
                              </figure>
                              <figure class="effect-sarah">
                                  <img src="http://localhost/xc/13.jpg" alt="img13"/>
                                  <figcaption>
                                      <h2>Free <span>Sarah</span></h2>
                                      <p>Sarah likes to watch clouds. She's quite depressed.</p>
                                      <a href="http://www.lanrentuku.com/" target="_blank">View more</a>
                                  </figcaption>     
                              </figure>
                              <figure class="effect-chico">
                                  <img src="http://localhost/xc/14.jpg" alt="img15"/>
                                  <figcaption>
                                      <h2>Silly <span>Chico</span></h2>
                                      <p>Chico's main fear was missing the morning bus.</p>
                                      <a href="http://www.lanrentuku.com/" target="_blank">View more</a>
                                  </figcaption>     
                              </figure>
                              <figure class="effect-milo">
                                  <img src="http://localhost/xc/15.jpg" alt="img11"/>
                                  <figcaption>
                                      <h2>Faithful <span>Milo</span></h2>
                                      <p>Milo went to the woods. He took a fun ride and never came back.</p>
                                      <a href="http://www.lanrentuku.com/" target="_blank">View more</a>
                                  </figcaption>     
                              </figure>
                          </div>
                  </div>
            </div>
        </div>
  </div>
</body>
</html>