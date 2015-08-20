

<script type="text/javascript">

function SubmitForm()
{
document.getElementById("form1").submit();
}
</script>
<style type="text/css">.bimg{
  -moz-border-image: url(/files/frame3.png) 95 95 95 95 stretch;
  -webkit-border-image: url(/files/frame3.png) 95 95 95 95 stretch;
  -o-border-image: url(/files/frame3.png) 95 95 95 95 stretch;
  border-image: url(/files/frame3.png) 95 95 95 95 stretch;
  border-style: groove;
}
</style>
</head>
<body>

<form id="form1" action="page2.htm" method="post">
<legend> <h2> Form Pemilihan </h2> </legend>


<div style="width:900px">

<div style="float:left;">
<img src="inc_imgmhs_b.jpg" class="bimg">
<br></br>
<input type="radio" name="pil" value="1">
				<?php if (isset($pil) && $pil=="1") echo "checked";?>
				Susilo Bambang Yudhoyono - Budiono
</div>		

<div style="float:left; margin-left:20px;">
<img src="inc_imgmhs_b2.jpg" class="bimg">
<br></br>
<input type="radio" name="jk" value="0">
				<?php if (isset($pil) && $pil=="0") echo "checked";?>
				Prabowo Subianto - Hatta Rajasa
</div>

</div>


<div  style="margin-top:500px; margin-left:300px">
<input type="submit" name="submit" value="Pilih" />
</div>

</form>
