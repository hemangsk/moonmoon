<?php
$all_people = &$Planet->getPeople();
usort($all_people, array('PlanetFeed', 'compare'));
?>
<div >
    <div id="sidebar-people" class="section">
        <div class="sidebar-section-title"><?php echo _g('People') . ' (' . count($all_people) . ')'?></div>
        <ul>
            <?php foreach ($all_people as $person) : ?>
            <li class="sec-li">
                <a href="<?php echo htmlspecialchars($person->getFeed(), ENT_QUOTES, 'UTF-8'); ?>" title="<?=_g('Feed')?>"><img src="postload.php?url=<?php echo urlencode(htmlspecialchars($person->getFeed(), ENT_QUOTES, 'UTF-8')); ?>" alt="" height="12" width="12" /></a>
                <a href="<?php echo $person->getWebsite(); ?>" title="<?=_g('Website')?>"><?php echo htmlspecialchars($person->getName(), ENT_QUOTES, 'UTF-8'); ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
        <p class="sec-li">
        <img src="custom/img/opml.png" alt="<?=_g('Feed')?>" height="12" width="12" /> <a href="custom/people.opml"><?=_g('All feeds in OPML format')?></a>
        </p>
    </div>

    <div class="section">
        <div class="sidebar-section-title"><?=_g('Syndicate')?></div>
        <ul>
            <li class="sec-li"><img src="custom/img/feed.png" alt="<?=_g('Feed')?>" height="12" width="12" />&nbsp;<a href="atom.php"><?=_g('Feed (ATOM)')?></a></li>
        </ul>
    </div>

    <div class="section">
        <div class="sidebar-section-title"><?=_g('Archives')?></div>
        <ul>
            <li class="sec-li"><a href="?type=archive"><?=_g('See all headlines')?></a></li>
        </ul>
    </div>
</div>
