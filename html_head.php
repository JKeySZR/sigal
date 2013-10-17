<?php
$this->html_head = '<!DOCTYPE html><head><title>{title}</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="author" content="Gimli2; http://gimli2.gipix.net" />
<link rel="shotcut icon" href="./images/favicon.png" />
<link rel="stylesheet" href="./css/style.css" type="text/css" />
<!--OWNCSS--><link rel="stylesheet" href="./modules/ceebox/css/ceebox-min-static-img.css" type="text/css" media="screen" />
<script type="text/javascript" src="./js/sigal.js"></script>
<script type="text/javascript" src="./modules/ceebox/js/jquery.js"></script>
<script type="text/javascript" src="./modules/ceebox/js/jquery.metadata.js"></script>
<script type="text/javascript" src="./modules/ceebox/js/jquery.swfobject.js"></script>
<script type="text/javascript" src="./modules/ceebox/js/jquery.ceebox-min.js"></script>
<script type="text/javascript">

	$(document).ready(
	   function(){
	       $(".fotos").ceebox({imageGallery:true,image:true,html:false,video:true,videoGallery:true});
		
            //When page loads...
        	$(".tab_content").hide();
        	$("ul.tabs li:first").addClass("active").show();
        	$(".tab_content:first").show();

            var activeTab = window.location.hash;
            if (activeTab!="") {
                $("ul.tabs li").removeClass("active");
                $(".tab_content").hide();
                $("ul.tabs li").each(function(index) {
                    x = $(this).find("a").attr("href");
                    if (x == activeTab) {
                        $(this).addClass("active");
                    }
                });
                $(activeTab).show();
            }

        	//On Click Event
        	$("ul.tabs li").click(function() {
        		$("ul.tabs li").removeClass("active");
        		$(this).addClass("active");
        		$(".tab_content").hide();
        		var activeTab = $(this).find("a").attr("href");
        		$(activeTab).show();
                window.location.hash = activeTab;
        		return false;
        	});
		}
        
	);
</script></head><body>';
?>