
<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('frontend.head')
</head>


<script>
			function startTime() {
				var today = new Date();
				var h = today.getHours();
				var m = today.getMinutes();
				var s = today.getSeconds();
				m = checkTime(m);
				s = checkTime(s);
				document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
				var t = setTimeout(startTime, 500);
			}
			function checkTime(i) {
				if (i < 10) {i = "0" + i};
				return i;
			}
		</script>


<body onload="startTime()">

    @include('frontend.banner')

    @include('frontend.menu')

    @include('frontend.mereklaris')

     @include('frontend.berita')

    @include('frontend.footer')

    @include('frontend.script')
        
</body>

</html>