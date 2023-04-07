<div class="hero-slider-1">
    <p class="rs-p-wp-fix"></p>
    <rs-module-wrap id="rev_slider_1_1_wrapper" data-alias="home-1" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
        <rs-module id="rev_slider_1_1" data-version="6.5.7">
            <rs-slides>
                @for($i=1;$i <= 10;$i++)
                    <rs-slide style="position: absolute;" data-key="rs-{{$i}}" data-title="Slide" data-thumb="assets/bg-slider-img1-50x100.jpg" data-anim="ms:1000;r:0;" data-in="o:0;" data-out="a:false;">
                        <img src="/banner/{{$i}}.jpg" title="bg-slider-img1" width="1920" height="676" class="rev-slidebg tp-rs-img" data-panzoom="d:10000;ss:115%;se:100;" data-no-retina>
                    </rs-slide>
                @endfor
            </rs-slides>
        </rs-module>
    </rs-module-wrap>
</div>
