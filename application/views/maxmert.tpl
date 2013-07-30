<body class="_responsive_">
		<div class="-container">
<a class="-btn -disabled-">Disabled button</a>
<a class="-btn -dark-">Dark</a>
<a class="-btn -error-">Error</a>
<a class="-btn -primary-">Primary</a>
<a class="-btn -warning-">Warning</a>
<a class="-btn -info-">Info</a>
<a class="-btn -success-">Success</a>
<br><br><br><br>
<a class="-btn -disabled- _loading_">Loading</a>
<a class="-btn _loading_">Loading</a>
<a class="-btn -dark- _loading_">Loading</a>
<a class="-btn -error- _loading_">Loading</a>
<a class="-btn -primary- _loading_">Loading</a>
<a class="-btn -warning- _loading_">Loading</a>
<a class="-btn -info- _loading_">Loading</a>
<a class="-btn -success- _loading_">Loading</a>
<br><br><br><br>
<a class="-btn -disabled- _active_">Active</a>
<a class="-btn _active_">Active</a>
<a class="-btn -dark- _active_">Active</a>
<a class="-btn -error- _active_">Active</a>
<a class="-btn -primary- _active_">Active</a>
<a class="-btn -warning- _active_">Active</a>
<a class="-btn -info- _active_">Active</a>
<a class="-btn -success- _active_">Active</a>
<br><br><br><br>
<a class="-btn -disabled- _active_ _loading_">Active load</a>
<a class="-btn _active_ _loading_">Active load</a>
<a class="-btn -dark- _active_ _loading_">Active load</a>
<a class="-btn -error- _active_ _loading_">Active load</a>
<a class="-btn -primary- _active_ _loading_">Active load</a>
<a class="-btn -warning- _active_ _loading_">Active load</a>
<a class="-btn -info- _active_ _loading_">Active load</a>
<a class="-btn -success- _active_ _loading_">Active load</a>
<br><br><br><br>
<a class="-btn _tiny">Tiny button</a>
<a class="-btn _small">Small button</a>
<a class="-btn">Normal button</a>
<a class="-btn _big">Big button</a>
<a class="-btn _huge">Huge button</a>
<br><br><br><br>
<a class="-btn _small _loading_ -warning- _active_">Small active loading warning button</a>
<br><br><br><br>
<div class="-group">
    <a class="-btn">Button</a>
    <a class="-btn">Button</a>
    <a class="-btn">Button</a>
</div>
<div class="-dropdown">
    <div class="-dropdown-header">Header</div>
    <div class="-dropdown-content">Content</div>
</div>
<div class="-dropdown -primary-">
    <div class="-dropdown-header">Header</div>
    <div class="-dropdown-content">Content</div>
</div>
<div class="-dropdown -error-">
    <div class="-dropdown-header">Header</div>
    <div class="-dropdown-content">Content</div>
</div>
<div class="-dropdown -info-">
    <div class="-dropdown-header">Header</div>
    <div class="-dropdown-content">Content</div>
</div>
<div class="-dropdown -warning-">
    <div class="-dropdown-header">Header</div>
    <div class="-dropdown-content">Content</div>
</div>
<div class="-dropdown -success-">
    <div class="-dropdown-header">Header</div>
    <div class="-dropdown-content">Content</div>
</div>
<div class="-dropdown -dark-">
    <div class="-dropdown-header">Header</div>
    <div class="-dropdown-content">Content</div>
</div>
<br><br><br><br>
<a class="-btn js-modal-show">Show modal</a>

<div class="-modal js-modal">
    <div class="-modal-header">Header
        <i class="-closer">×</i>
    </div>
    <div class="-modal-content">
    	Some content to show. It can be buttons, <br>
    	other plugins inside (dropdowns,<br>
        for example), videos and other stuff.<br> 
        You can use any DOM element as modal<br>
        window, actually.
    </div>
</div>

<script type="text/javascript">
jQuery(document).ready(function () { 	
	$('.js-modal').modal({
	  animation: 'dropIn',
	  theme: 'primary'
	});
	
	$('.js-modal-show').on('click', function() {
	  $('.js-modal').data('kit-modal').open();
	});
});	
</script>
</div>

</body>