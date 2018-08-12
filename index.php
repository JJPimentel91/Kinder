<?php
require('layout/header.php');
?>

  <div class="jumbotron" id="mainpicdiv">

<?php
require('layout/menu.php');
?>

  </div>

  <div class="container-fluid recent-news"><!--START OF RECENT NEWS-->
    <div class="text-center">
      <p class="news-title">NOTICIAS RECIENTES</p>
    </div>

    <div class="container-fluid news-boxes"><!--START OF NEWS BOXES-->

      <div class="col-sm-4 news-box-one"><!--START OF NEWS BOX 1-->
        <div class="layer-box layer-white">
          <div id="text1">
            <p>Texto predeterminado para noticia 1</p>
            <span id="text2">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem voluptate deserunt consequatur velit, alias ullam fuga aspernatur, ut doloremque eos fugiat quo a accusamus minus distinctio quasi, recusandae excepturi molestiae.
            </span>
          </div>
        </div>
      </div><!--END OF NEWS BOX 1-->

      <div class="col-sm-4 news-box-two"><!--START OF NEWS BOX 2-->
        <div class="layer-box layer-white">
          <div id="text1">
            <p>Texto predeterminado para noticia 2</p>
            <span id="text2">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem voluptate deserunt consequatur velit, alias ullam fuga aspernatur, ut doloremque eos fugiat quo a accusamus minus distinctio quasi, recusandae excepturi molestiae.
            </span>
          </div>
        </div>
      </div><!--END OF NEWS BOX 2-->

      <div class="col-sm-4 news-box-three"><!--START OF NEWS BOX 3-->
        <div class="layer-box layer-white">
          <div id="text1">
            <p>Texto predeterminado para noticia 3</p>
            <span id="text2">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem voluptate deserunt consequatur velit, alias ullam fuga aspernatur, ut doloremque eos fugiat quo a accusamus minus distinctio quasi, recusandae excepturi molestiae.
            </span>
          </div>
        </div>
      </div><!--END OF NEWS BOX 3-->

    </div><!--END OF NEWS BOXES-->
    
    <div class="container div-button-news">
      <div class="col-sm-5"></div>
      <div class="col-sm-2">
        <button class="button-news">MAS NOTICIAS</button>
      </div>
      <div class="col-sm-5"></div>
    </div>

  </div><!--END OF RECENT NEWS-->

  <div class="container-fluid recent-news"><!--START OF EVENTS & MEDIA-->

    <div class="col-sm-6"><!--START OF EVENTS-->
      <div class="text-center">
        <p class="news-title">PROXIMOS EVENTOS</p>
      </div>
      <div class="container-fluid"><!--START OF ALL CALENDAR-->

        <div class="row calendar"><!--START OF 1ST ROW-->

          <div class="col-sm-6">
            <div class="container-fluid">
              <div class="col-sm-5 circleBase type1">
                <p class="circle-title">LUN | AGO<br>
                <span class="circle-number">13</span></p>
              </div>
              <div class="col-sm-7"><p><b>Texto predetermindo para evento 1</b></p></div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="container-fluid">
              <div class="col-sm-5 circleBase type1">
                <p class="circle-title">MAR | AGO<br>
                <span class="circle-number">14</span></p>
              </div>
              <div class="col-sm-7"><p><b>Texto predetermindo para evento 2</b></p></div>
            </div>
          </div>

        </div><!--END OF 1ST ROW-->

        <div class="row calendar-two"><!--END OF 2ND ROW-->

          <div class="col-sm-6">
            <div class="container-fluid">
              <div class="col-sm-5 circleBase type1">
                <p class="circle-title">MIE | AGO<br>
                <span class="circle-number">15</span></p>
              </div>
              <div class="col-sm-7"><p><b>Texto predetermindo para evento 3</b></p></div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="container-fluid">
              <div class="col-sm-5 circleBase type1">
                <p class="circle-title">JUE | AGO<br>
                <span class="circle-number">16</span></p>
              </div>
              <div class="col-sm-7"><p><b>Texto predetermindo para evento 4</b></p></div>
            </div>
          </div>

        </div><!--END OF 2ND ROW-->

      </div><!--END OF ALL CALENDAR-->
    </div><!--END OF EVENTS-->

      <div class="col-sm-6"><!--START OF MEDIA-->
        <div class="text-center">
          <p class="news-title">CONOCE MAS</p>
        </div>
      </div><!--END OF MEDIA-->

    </div><!--END OF EVENTS & MEDIA-->

  <a href="subsites/teachers.html">
  <div class="col-sm-4" id="mainpicdiv1">
    <div class="layer layer-green">
      <div id="line1">
        <h2 class="white title">Trainers</h2>
      </div>
      <div id="text1">
        <p class="white">Get to know the experts</p>
      </div>
    </div>
  </div>
  </a>
  
  <a href="subsites/students.html">
  <div class="col-sm-8" id="mainpicdiv2">
    <div class="layer layer-red">
      <div id="line1">
        <h2 class="white title">Training Schedule</h2>
      </div>
      <div id="text1">
        <p class="white">When and where is the next training</p>
      </div>
    </div>
  </div>
  </a>

  <div class="container-fluid" id="text-main">
    <div class="col-sm-5 standard">
      <h2 class="blue" id="title1">Share & Train</h2>
      <p class="blue">From here you can nominate employees for trainings. You can also get to know the trainers, their experience and certifications.</p>
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-4">
      <div class="row"><!--start of stickey note-->
        <ul class="notes">
          <li>
          <div class="rotate-1 yellow-bg">
            <!--<small>12:03:28 12-04-2014</small>-->
            <h4>Want to be a trainer? Have an idea for a training? Contact:</h4>
            <p><span class="glyphicon glyphicon-user"></span> Ramesh Kumar  S<br>
            <span class="glyphicon glyphicon-envelope"></span> rameshkumar4.s<br>@tcs.com<br>
            <span class="glyphicon glyphicon-pushpin"></span> 305788</p>
          </div>
          </li> 
        </ul>
      </div><!--end of stickey note-->
    </div>
  </div>

  <!--FOOTER-->
  <section class="index-link">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="link-area">
            <h3>Share & Train</h3>
            <p class="white">"<i>A place where you can gain knowledge, created for sharing with others."</i></p>
          </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-2">
          <div class="link-area">
            <h3>Site</h3>
            <ul>
              <li><a href="#"> Home</a></li>>
            </ul>
          </div>
        </div>
        <div class="col-md-2">
          <div class="link-area">
            <h3></h3>
            <ul>
              <li><a href="#" class="invisible"> Trainers</a></li>
              <li><a href="subsites/teachers.html"> Trainers</a></li>
              <li><a href="#" class="invisible"> Schedule</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-2">
          <div class="link-area">
            <h3 class="invisible">Learn More</h3>
            <ul>
              <li><a href="subsites/students.html"> Schedule</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="index-social">
    <div class="container">
      <div class="row index-social-link text-center">
        <p class="copy-c">JJ Pimentel</p>
      </div>
    </div>
  </section>
  <!--END OF FOOTER-->

</body>
</html>