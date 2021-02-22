
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <title>FS6 Login Panel | @fs6ah</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bulma.min1.css">
  <link rel="stylesheet" href="./css/style2.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <section class="hero is-fullheight">
    <div class="hero-body">
      <div class="container">
        <div class="columns">
          <div class="column is-3 is-flex">
            <div class="column-child sidebar shadow">
              <div class="sidebar-header has-text-centered"><br>
                <div class="photo"><img src="./png/logo.png" width="250px"></div>
                <h5><br>./FS6</h5>
              </div>
            </div>
          </div>
          <div class="column is-flex">
            <div class="column-child terminal shadow">
              <div class="terminal-bar dark-mode">
                <div class="icon-btn close"></div>
                <div class="icon-btn min"></div>
                <div class="icon-btn max"></div>
                <div class="terminal-bar-text is-hidden-mobile dark-mode-text">root@fs6ah:~#


</div>
              </div>
              <div class="terminal-window primary-bg" onclick="document.getElementById(&#39;dummyKeyboard&#39;).focus();">
                <div class="terminal-output" id="terminalOutput">
                </div>
                <div class="terminal-line">
                    <div class="siimple-form">
                      <span class="help-msg">FS6 Login Panel<span class="code"></span> </span>
                      <br><br>
     <p>Login</p>

    <form action="authenticate.php" method="post">
				<input type="text" name="username" placeholder="Username" id="username" required>
				<br>
                <br>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<br>
                <br>
            <button type="submit" id="btn" name="login" default>login</button> 
                
            </form>
        </div>
        
                      </div>
                    </div>
                  
             
              </div>
              <br>
              
            </div>
          </div>
        </div>
      </div>
    
    <footer class="footer">
      <div class="content has-text-centered">
                          <p>      <a href="https://instagram.com/fs6ah/">
 
                <p>
                    instagram:@fs6ah <svg class="svg-inline--fa fa-heart fa-w-16 icon" aria-hidden="true" data-prefix="fas" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d=""></path></svg><!-- <i class="fas fa-heart icon"></i> --> </p>
            </div>

    </footer>
  </section>
  <script language="javascript">
    document.onmousedown=disableclick;
    status="";
    function disableclick(event)
    {
      if(event.button==2)
       {
         alert(status);
         return false;    
       }
    }
    
    
    document.onkeydown = function(e) {
      if(event.keyCode == 123) {
         return false;
      }
      if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
         return false;
      }
      if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
         return false;
      }
      if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
         return false;
      }
      if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
         return false;
      }
    }
    
    </script>



</body></html>