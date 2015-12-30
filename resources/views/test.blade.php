<style media="screen">

#svg{
}

#svg circle {
stroke-dashoffset: 0;
transition: stroke-dashoffset 1s linear;
stroke: #666;
stroke-width: 1em;

}
#svg #bar {
stroke: #E94B4A;
}
#cont {
display: block;
height: 200px;
width: 200px;
margin: 2em auto;
border-radius: 100%;
position: relative;
background-color: purple;

}
#cont:after {
position: absolute;
display: block;
height: 160px;
width: 160px;
left: 50%;
top: 50%;
content: attr(data-pct)"%";
margin-top: -80px;
margin-left: -80px;
border-radius: 100%;
line-height: 160px;
font-size: 2em;
text-shadow: 0 0 0.5em black;
}

body {  text-align: center;}

</style>

<div id="cont" data-pct="100">
  <svg id="svg" height="200" viewPort="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
    <circle r="90" cx="100" cy="100" fill="transparent" stroke-dasharray="565.48" stroke-dashoffset="0"></circle>
    <circle id="bar" r="90" cx="100" cy="100" fill="transparent" stroke-dasharray="565.48" stroke-dashoffset="0"></circle>
  </svg>
</div>

<label for="percent">Type a percent!</label>
<input id="percent" name="percent">


<script src="http://code.jquery.com/jquery-2.1.4.min.js">
</script>

<script type="text/javascript">
  $('#percent').on('change', function(){
  var val = parseInt($(this).val());
  var $circle = $('#svg #bar');

  if (isNaN(val)) {
   val = 0;
  }
  else{
    var r = $circle.attr('r');
    var c = Math.PI*(r*2);

    if (val < 0) { val = 0;}
    if (val > 100) { val = 100;}

    var pct = ((100-val)/100)*c;

    $circle.css({ strokeDashoffset: pct});

    $('#cont').attr('data-pct',val);
  }
  });
</script>
