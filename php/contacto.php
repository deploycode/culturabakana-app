<div style=" width: 100%;text-align: center;	">
	<div  class="mediano" style="margin-right: 4em;" >
		<?php
							$s="select * from empresa WHERE titulo_empresa='contacto'";
						$r=mysql_query($s) or die(mysql_error());
						while($rw=mysql_fetch_assoc($r))
						{
							echo "<div ><textarea readonly='readonly' cols='100%' rows='10%'>$rw[texto_empresa]</textarea></div>";

						}
		?>



	</div>

	<div class="mediano" >
					<!-- Do not change the code! -->
<a id="foxyform_embed_link_266905" href="http://es.foxyform.com/">foxyform</a>
<script type="text/javascript">
(function(d, t){
   var g = d.createElement(t),
       s = d.getElementsByTagName(t)[0];
   g.src = "http://es.foxyform.com/js.php?id=266905&sec_hash=7a143c5782c&width=350px";
   s.parentNode.insertBefore(g, s);
}(document, "script"));
</script>
<!-- Do not change the code! -->
	</div>
</div>
