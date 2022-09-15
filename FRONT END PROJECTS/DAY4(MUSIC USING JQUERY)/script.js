<script type="text/javascript">
		<script type="text/javascript">
	$("document").ready(function(){
$('.play').click(function(){
    var $this = $(this);
    var id = $this.attr('id').replace(/btn/, '');
    $this.toggleClass('active');
    if($this.hasClass('active')){
        $this.text('pause'); 
        $('audio[id^="sound"]')[id-1].play();        
    } else {
        $this.text('play');
        $('audio[id^="sound"]')[id-1].pause();
    }
});
	});

</script>