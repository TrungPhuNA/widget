<div class="vp-section-row fix-count">
    <div class="container vp-section-row-container">
        <div class="row row-section">
            
            <div class="col-sm-6 one-column column-add-item item-can-resize ui-sortable" data-type="column" data-vpage="column">
                <div class="component-item" data-ci="vp-content" data-type="counter" style="">
                    <div data-type="counter" data-vpage="widget" class="countdown widget widget-counter countdown-xs" data-countdown-type="circle" data-text="hide" data-line="show" data-complete="zero" data-countdown="09/20/2017 10:19 am">
                        <div class="countdown-box fix-mobile" data-vpage="sub-widget" style="font-family: &quot;Open Sans&quot;, sans-serif;">
                            <div class="number">08</div>
                            <span class="text">Ngày</span>                             
                        </div>
                        <div class="countdown-box fix-mobile" data-vpage="sub-widget" style="font-family: &quot;Open Sans&quot;, sans-serif;">
                            <div class="number">23</div>
                            <span class="text">Giờ</span>                              
                        </div>
                        <div class="countdown-box fix-mobile" data-vpage="sub-widget" style="font-family: &quot;Open Sans&quot;, sans-serif;">
                            <div class="number">29</div>
                            <span class="text">Phút</span>                             
                        </div>
                        <div class="countdown-box fix-mobile" data-vpage="sub-widget" style="font-family: &quot;Open Sans&quot;, sans-serif;">
                            <div class="number">28</div>
                            <span class="text">Giây</span>                             
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 one-column column-add-item item-can-resize ui-sortable" data-type="column" data-vpage="column">
                <div class="component-item" data-ci="vp-content" data-type="counter" style="">
                    <div data-type="counter" data-vpage="widget" class="countdown widget widget-counter countdown-xs" data-countdown-type="circle" data-text="hide" data-line="show" data-complete="zero" data-countdown="09/20/2017 10:19 am">
                        <div class="countdown-box fix-mobile" data-vpage="sub-widget" style="font-family: &quot;Open Sans&quot;, sans-serif;">
                            <div class="number">08</div>
                            <span class="text">Ngày</span>                             
                        </div>
                        <div class="countdown-box fix-mobile" data-vpage="sub-widget" style="font-family: &quot;Open Sans&quot;, sans-serif;">
                            <div class="number">23</div>
                            <span class="text">Giờ</span>                              
                        </div>
                        <div class="countdown-box fix-mobile" data-vpage="sub-widget" style="font-family: &quot;Open Sans&quot;, sans-serif;">
                            <div class="number">29</div>
                            <span class="text">Phút</span>                             
                        </div>
                        <div class="countdown-box fix-mobile" data-vpage="sub-widget" style="font-family: &quot;Open Sans&quot;, sans-serif;">
                            <div class="number">28</div>
                            <span class="text">Giây</span>                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $( function () {

        $(window).on('resize', function(){
            var _this = $(this); //this = window
            var cw = $('.countdown-box').width();
            var ch = $('.countdown-box').height();

            if (_this.width() <= 375) { 
                $(".fix-mobile").css("height",cw);
                $(".countdown-box").addClass("fix-mobile");
            }
            else
            {
                $(".fix-mobile").css("height",'');
                $(".countdown-box").removeClass("fix-mobile");
                // $(".countdown-box").css("height", '');
            }

            // if (_this.width() <= 320) { 
            //     $countdown.addClass("fix-mobile");
            // }
            // else
            // {
            //     $countdown.removeClass("fix-mobile");
            // }
        });
    });
</script>