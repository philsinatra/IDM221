<link rel="stylesheet" href="http://cdn.philsinatra.com/projects/hayden/tags/master/css/screen.css">

<script>
	(function() {
		// Optimization for Repeat Views
		if( sessionStorage.foutFontsLoaded ) {
			document.documentElement.className += " fonts-loaded";
			return;
		}
	})();
</script>
<script src="http://cdn.philsinatra.com/projects/hayden/tags/master/js/fontfaceobserver.js"></script>
<script>
  var fontA = new FontFaceObserver('SourceSansPro');
  Promise.all([fontA.load()]).then(function () {
    document.documentElement.className += " fonts-loaded";
    sessionStorage.foutFontsLoaded = true;
  });
</script>

<script>document.createElement('picture');</script>
<!-- Picturefill polyfill needed for IE11 `picture` support. -->
<script src="http://cdn.philsinatra.com/projects/hayden/tags/master/js/picturefill.min.js"></script>
<!-- Babel polyfill for IE11 ES6 support. -->
<script src="http://cdn.philsinatra.com/projects/hayden/tags/master/js/polyfill.min.js"></script>
