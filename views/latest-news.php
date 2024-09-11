<article class="item <?php echo $item->category; ?>">
    <a href="#">
        <div class="img-container">
            <span><?php echo $item->tag; ?></span>
            <img src="<?php echo $item->thumbnail_img; ?>" alt="<?php echo $item->title; ?>">
        </div>

        <div class="block">
            <div class="text">
                <h3><?php echo $item->title; ?>
                <?php if (!empty($item->read_time)): ?>
                    <span class="read-time">- <?php echo $item->read_time; ?> minute read</span>
                <?php endif; ?>
                </h3>
                <p><?php echo $item->short_description; ?></p>
                <div class="btn">Read More</div>
            </div>

            <div class="footer">
                <div class="avatar">
                    <img src="<?php echo $item->author_img; ?>" alt="<?php echo $item->author; ?>">
                </div>
                <div class="details">
                    <strong>Posted by <?php echo $item->author; ?></strong><br>
                    <?php $publish_date = new DateTime($item->publish_date); ?>
                    <time datetime="<?php echo $publish_date->format('Y-m-d'); ?>"><?php echo $publish_date->format('jS F Y'); ?></time>
                </div>
            </div>
        </div>
    </a>
</article>