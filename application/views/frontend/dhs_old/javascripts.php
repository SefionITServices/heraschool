
		<!-- Latest compiled and minified Bootstrap -->
			<script src="<?php echo base_url();?>assets/themes/<?php echo $theme;?>/assets/bootstrap/js/bootstrap.min.js"></script>														
		<!-- countTo js -->
			<script src="<?php echo base_url();?>assets/themes/<?php echo $theme;?>/assets/js/jquery.inview.min.js"></script>			
		<!-- owl-carousel min js  -->
			<script src="<?php echo base_url();?>assets/themes/<?php echo $theme;?>/assets/owlcarousel/js/owl.carousel.min.js"></script>	
		<!-- magnific-popup js -->               
			<script src="<?php echo base_url();?>assets/themes/<?php echo $theme;?>/assets/js/jquery.magnific-popup.min.js"></script>
		<!-- jquery mixitup js -->   
			<script src="<?php echo base_url();?>assets/themes/<?php echo $theme;?>/assets/js/jquery.mixitup.min.js"></script>	
		<!-- paradise_slider_min js -->
			<script src="<?php echo base_url();?>assets/themes/<?php echo $theme;?>/assets/js/paradise_slider_min.js"></script>	
		<!-- scrolltopcontrol js -->
			<script src="<?php echo base_url();?>assets/themes/<?php echo $theme;?>/assets/js/scrolltopcontrol.js"></script>												
		<!-- scripts js -->
			<script src="<?php echo base_url();?>assets/themes/<?php echo $theme;?>/assets/js/scripts.js"></script>

<script type="text/javascript">
		$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-success').addClass('btn-default');
            $item.addClass('btn-success');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-success').trigger('click');
});
</script>


