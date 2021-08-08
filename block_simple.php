<html>
  <head>
    <title>website blocked by pi-hole!</title>
  </head>
    <body>
      <p style="text-align: center;"><img style="display: block; margin-left: auto; margin-right: auto;" src="https://upload.wikimedia.org/wikipedia/commons/0/00/Pi-hole_Logo.png" alt="PiHoleLogo" width="256" height="243" /><span style="font-size: xx-large;">WEBSITE BLOCKED!</span></p>
        <div style="text-align: center;">
          <form action="mailto:your@mail.xyz?subject=Pi-hole: Whitelist Request! &body=<?php echo $_SERVER['SERVER_NAME'];?>" method="post">
	    <input type="submit" value="request whitelist" />
	    <input type="hidden" />
          </form>
	</div>
    </body>
</html>
