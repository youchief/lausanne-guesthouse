<?php echo $this->element('slider_home') ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <div class="thumbnail info-thumbnail color-black">
                    <div class="caption">
                        <h3><span class="fa fa-group color-lead"></span> <?php echo __('The Family Story') ?></h3>
                        <p class="description"><?php
                            echo
                            __('of the Lausanne GuestHouse began in 1997 with the search for a building adapted to the ideas and the business-plan of the Elmiger brothers and sisters (Christian, Anne-Marie et Jodoc). The project matured and developed over a 3 year period before the actual construction work, renovation and transformation began. This took another year, during which Laura joined the family. Finally, on 3rd August 2001, the “Lausanne GuestHouse & Backpacker” opened in its present location.')
                            ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="thumbnail info-thumbnail color-black">
                    <div class="caption">
                        <h3><span class="fa fa-rocket color-lead"></span> <?php echo __('Our ambition')?></h3>
                        <p class="description"><?php echo __('is to satisfy a demanding clientele with high standards of service, cleanliness and professionalism, offering the best value for money, while insuring the viability and permanence of our business entreprise. At the same time, we try to promote a dynamic and economically attractive image of tourism in the Lausanne region as well as in the rest of Switzerland.') ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="thumbnail info-thumbnail color-black">
                    <div class="caption">
                        <h3><span class="fa fa-smile-o color-lead"></span> <?php echo __('Ethically')?></h3>
                        <p class="description"><?php echo __('
we support socially responsible employment standards. The working conditions and salaries we offer are therefore much better than average. Our employees enjoy a large degree of job security. We do not employ undeclared personnel, people without work permits or illegal immigrants. The core of our cleaning staff has not changed since 2001!
 <br>
Ecology (see the “Ecology” tab) is also our concern: we bear the Minergie quality label, observe a strict policy of waste separation and support public transport (95% of our clientele) through our proximity to the Lausanne train station.') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php echo $this->element('lastpics');?>
<?php echo $this->element('lastnews')?>


<script src="js/jquery.event.move.js"></script>
<script src="js/responsive-slider.js"></script>

<script type="text/javascript">
        function matchHeight(objects, cols, nomatch) {
                if (nomatch === undefined)
                        nomatch = false;

                var i, j, group, height, max, objIndex = 0;
                var objCatArr = [];
                var maxHeightArr = [];

                for (i = 0; i < objects.length; i++) {
                        group = Math.floor((i) / cols);
                        if (objCatArr[group] === undefined) {
                                objCatArr[group] = [];
                        }
                        objCatArr[group].push(objects[i]);
                }

                for (i in objCatArr) {
                        max = 0;
                        for (j in objCatArr[i]) {
                                height = $(objCatArr[i][j]).height();
                                max = Math.max(max, height);
                        }
                        maxHeightArr.push(max);
                        if (!nomatch)
                                $(objCatArr[i]).height(max);
                }

                return maxHeightArr;
        }
        ;
</script>

<script>

        $(window).load(function() {
                if ($(window).width() > 767) {
                        matchHeight($('.info-thumbnail .caption .description'), 3);
                }

                $(window).on('resize', function() {
                        if ($(window).width() > 767) {
                                $('.info-thumbnail .caption .description').height('auto');
                                matchHeight($('.info-thumbnail .caption .description'), 3);
                        }
                });
        });
</script>



