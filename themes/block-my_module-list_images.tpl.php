<div id="list-url">
    <?php if(is_array($urls) && count($urls)>0):?>
        <?php foreach ($urls as $key => $value): ?>
            <span>
                <a target="_blank" href="<?php echo $value; ?>"><?php echo $value; ?></a><br>
            </span>
        <?php endforeach; ?>
    <?php endif;?>
</div>