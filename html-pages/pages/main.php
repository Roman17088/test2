<? require_once __DIR__ . '/../_header.php'; ?>
    <div class="mainNewsPhoto row">
        <div class="col-md-6 col-sm-4 col-xs-6 hidden-xs">
            <a href="#" class="newsSize newsSize-big" data-src="/i/blank.png">
                <div class="desc">
                    <span class="tag">travel</span>
                    <div class="title">Virgin Atlantic SALE Fares Departing From London</div>
                    <div class="date">
                        Posted&nbsp;On&nbsp;July&nbsp;22,&nbsp;2015&nbsp;&nbsp;&nbsp;
                        <span class="numComments"><span class="icon icon-comment"></span> 55</span>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-6 col-sm-8 col-xs-12">
            <div class="row">
                <!-- копия первой новости  -->
                <div class="col-xs-6 visible-xs">
                    <a rel="nofollow" href="#" class="newsSize newsSize-small" data-src="/i/blank.png">
                        <div class="desc">
                            <span class="tag">travel</span>
                            <div class="title">Virgin Atlantic SALE Fares Departing From London</div>
                        </div>
                    </a>
                </div>
                <!-- копия первой новости  -->

                <div class="col-xs-6">
                    <a href="#" class="newsSize newsSize-small" data-src="/i/blank.png">
                        <div class="desc">
                            <span class="tag">tech</span>
                            <div class="title">Apple Want To Block Your Phone Camera</div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-6">
                    <a href="#" class="newsSize newsSize-small" data-src="/i/blank.png">
                        <div class="desc">
                            <span class="tag">sport</span>
                            <div class="title">Germany-Italy talking points</div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-12 col-xs-6">
                    <a href="#" class="newsSize newsSize-middle" data-src="/i/blank.png">
                        <div class="desc">
                            <span class="tag">food</span>
                            <div class="title">World Meat Free Day: Why Vegetarianism Could Be The Future</div>
                            <div class="date">
                                Posted&nbsp;On&nbsp;July&nbsp;22,&nbsp;2015&nbsp;&nbsp;&nbsp;
                                <span class="numComments"><span class="icon icon-comment"></span> 55</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="oneBigNews">
                <div class="photo asLink" data-src="/i/blank.png" data-href="#"></div>
                <a href="#" class="title">INCREDIBLE CLAIMS Could sickly man be worst serial killer?</a>
                <div class="date">
                    Posted&nbsp;On&nbsp;July&nbsp;22,&nbsp;2016&nbsp;&nbsp;&nbsp;
                    <span class="icon icon-comment"></span> 100
                </div>
                <div class="text">
                    Precariously positioned on the banks of both the IJ Bay and the Amstel River headwaters, Amsterdam
                    made an early mark on the world with its dominant seafaring fleet and colonial aspirations in the
                    17th and 18th centuries.
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <?
            $class = 'blockShortNews-main';
            include __DIR__ . '/../_shortNews.php'; ?>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="titleAsTape titleAsTape-link">MOST POPULAR</div>
            Banners, banners, banners
        </div>

        <div class="col-md-8 col-xs-12">
            <div class="titleAsTape titleAsTape-link">Life style</div>
            <?
            $count = 3;
            $class = 'newslist-main';
            require_once __DIR__ . '/../_newsList.php';
            ?>
        </div>
        <div class="col-md-4 col-xs-12">
            <div class="titleAsTape titleAsTape-link">MOST POPULAR</div>
            <div class="blockShortNews blockShortNews-main">
                <div class="row">
                    <? for ($i = 0; $i < 6; ++$i): ?>
                        <div class="col-md-12 col-sm-6 col-xs-12">
                            <div class="item">
                                <div class="photo asLink" data-href="#" data-src="/i/blank.png"></div>
                                <div class="desc">
                                    <a href="#" class="title">TV host’s hand impaled on nail in failed magic tricks</a>
                                    <div class="date">
                                        December&nbsp;22,&nbsp;2016&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span class="icon icon-comment"></span>&nbsp;300
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? endfor; ?>
                </div>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="titleAsTape titleAsTape-link">reportages</div>
        </div>

        <? for ($i = 0; $i < 4; ++$i): ?>
            <div class="col-sm-3 col-xs-6">
                <div class="videoMain" data-src="/i/blank.png">
                    <div class="play"></div>
                </div>
                <div class="videoMainTitle">Germany-Italy talking points</div>
            </div>
        <? endfor; ?>

        <div class="col-xs-12">
            <p></p>
        </div>

    </div>
<? require_once __DIR__ . '/../_footer.php'; ?>