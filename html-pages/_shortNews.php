<?php
$count = isset($count) ? $count : 3;
$class = isset($class) ? $class : '';
?>
<div class="blockShortNews <?= $class ?>">
    <? for ($i = 0; $i < $count; ++$i): ?>
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
    <? endfor; ?>
</div>