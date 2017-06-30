<?php
$count = isset($count) ? $count : 10;
$class = isset($class) ? $class : '';
?>
<div class="newslist <?= $class ?>">
    <? for ($i = 0; $i < $count; ++$i): ?>
        <div class="item">
            <div class="photo" data-src="/i/blank.png"></div>
            <div class="desc">
                <div class="title">It S Hurricane Season But We Are Visiting Hilton Head Island</div>
                <div class="date">
                    Posted&nbsp;On&nbsp;July&nbsp;22,&nbsp;2016&nbsp;&nbsp;&nbsp;
                    <span class="icon icon-comment"></span> 100
                </div>
                <div class="text">
                    People are wanting to fly to international destinations for vacations but planning a
                    holiday getaway can easily turn into a stressful venture when the matter of costs comes
                    up.
                </div>
            </div>
        </div>
    <? endfor; ?>
</div>
