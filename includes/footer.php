<div id="footer">
<div id="top"><p>Those Apple Guys  &raquo; About | Apple Computer Repair, Mac Computer Repair, Apple Computer Specialist, Mac Computer Specialist</p></div>
<p>&copy; <?php echo date("Y") ?> Those Apple Guys | <a href="mailto:info@thoseappleguys.com" title="General Inquires for Those Apple Guys">info@thoseappleguys.com</a> | Site by <a href="http://www.maxnanis.com" title="Max Nanis" target="_blank">Max Nanis</a></p>
</div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
  (function($) {
    $('#intro_detail.services_detail').show();
    var services_list = $('#services_list');

    function navChange(chapter) {
      $('.services_detail').hide();
      var chapter = "#" + chapter + "_detail";
      $(chapter).show();
    };

    function selectimo(chapter) {
      $('.selected').removeClass('selected');
      chapter.addClass('selected');
    };

    $('h1#intro').on('click', function() {
      navChange($(this).attr("id"));
    });

    services_list.children('li').on('click', function() {
      var $this = $(this);
      selectimo($this);
      navChange($this.attr("id"));
    });

  })(jQuery);
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-8887550-1");
pageTracker._setDomainName(".thoseappleguys.com");
pageTracker._trackPageview();
} catch(err) {}</script>
