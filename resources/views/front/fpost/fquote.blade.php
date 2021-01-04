 <!-- FORUM POST PARAGRAPH -->
 <div class="post-quote" id="post-quote">     
    @if(isset($qpost))
    <p class="post-quote-reply-to"><i class="fa fa-reply"></i>&nbsp;In reply to: {!! $qpost->user()->first()->name !!}</p>
    <div class="post-quote-content">
    @foreach($qpost->body as $celement)
    <?php 
    
        if($celement['type'] == 'paragraph') {
    ?>
        <p class="forum-post-paragraph"> <?php echo (isset($celement['data']['text']) ? $celement['data']['text'] : '' ); ?></p>
        <?php 
        } 
        if($celement['type'] == 'delimiter') {
        ?>
            <hr />
            <?php 
        }
        if($celement['type'] == 'image') {
        ?>
            <?php 
                if(isset($celement['data']['url'])) {

            ?>
                <div class="text-center">
                    <img loading="lazy" class="forum-post-image img-fluid pad" src="<?php echo $celement['data']['url']; ?>" title="<?php echo (isset($celement['data']['caption']) ? $celement['data']['caption'] : 'Image'); ?>" />
                    <br /><em><?php echo (isset($celement['data']['caption']) ? $celement['data']['caption'] : 'Image'); ?></em>
                </div>
            <?php 

                } else {
            ?>
                <div class="text-center">
                <img loading="lazy" class="forum-post-image img-fluid pad" src="<?php echo (isset($celement['data']['file']['url']) ? $celement['data']['file']['url'] : asset('theme/img/default.png')); ?>" title="<?php echo (isset($celement['data']['caption']) ? $celement['data']['caption'] : 'Image'); ?>" />
                <br /><em><?php echo (isset($celement['data']['caption']) ? $celement['data']['caption'] : 'Image'); ?></em></div>
            <?php
                }
            ?>                                
            <?php 
        }
        if($celement['type'] == 'search') {
        ?>
            <?php 
                if(isset($celement['data']['url'])) {

            ?>
                <div class="text-center">
                    <img loading="lazy" class="forum-post-image img-fluid pad" src="<?php echo $celement['data']['url']; ?>" title="<?php echo (isset($celement['data']['caption']) ? $celement['data']['caption'] : 'Image'); ?>" />
                    <br /><em><?php echo (isset($celement['data']['caption']) ? $celement['data']['caption'] : 'Image'); ?></em>
                </div>
            <?php 
                }
            ?>
        <?php 
        }      
        
        if($celement['type'] == 'list') {
        ?>
            <ul>
                <?php 
                if(isset($celement['data']['items'])) {
                    foreach($celement['data']['items'] as $l) {
                        ?>
                        <li><?php echo $l; ?></li>
                        <?php
                    }
                }
                ?>
            </ul>
            <?php 
        }
        ?>
    @endforeach 
    </div>
    @endif
</div>
<!-- /FORUM POST PARAGRAPH --> 