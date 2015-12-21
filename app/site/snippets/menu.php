<nav>
    <ul>
        <li <?php e($page->id() === 'home', ' class="active"') ?> ><a href="<?php echo $site->url() ?>">Home</a></li>

        <?php foreach($pages->visible() as $p): ?>
        <li <?php e($p->isOpen(), ' class="active"') ?> >
          <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
        </li>
        <?php endforeach ?>

    </ul>
</nav>
