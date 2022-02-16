 <?php
 // this function will check to see if this post requires a password value before viewing it and if it has and visitor not input it then it won't be displayed
 if(post_password_required()){
     return;
 }
  ?>
 
 <!-- Comments ============================================= -->
<div id="comments" class="clearfix">

    

    <!-- Comments List ============================================= -->
    <?php 
    // to check to see if there any comments
         if(have_comments()){
             ?>
            <h3 id="comments-title"><span><?php comments_number(); ?></span> Comments</h3>
            <ol class="commentlist clearfix">
                <?php 
                    foreach($comments as $comment){
                        ?>
                    <li class="comment even thread-even depth-1" id="li-comment-1">

                        <div id="comment-1" class="comment-wrap clearfix">

                            <div class="comment-meta">

                            <div class="comment-author vcard">

                                <span class="comment-avatar clearfix">
                                    <?php 
                                    // 60 the size of the template and '' --> image url if user doesn't have we but empty string and the forth parameter is the text to display inside the alt attribute
                                    // the fifth parameter is array for additional settings
                                    echo get_avatar($comment, 60, '', '', ['class' => 'avatar avatar-60 photo avatar-default']); //gets the avatar for a user ?>
                                </span>

                            </div>

                            </div>

                            <div class="comment-content clearfix">

                            <div class="comment-author">
                            <?php  comment_author(); ?>
                                <span><?php comment_date(); ?></span>
                            </div>

                            <?php comment_text(); ?>

                            </div>

                            <div class="clear"></div>

                        </div>



                    </li>

                        <?php

                    }
                    the_comments_pagination();
                ?>

        
            </ol><!-- .commentlist end -->

             <?php 
         }
    
    
    ?>
   

    <div class="clear"></div>

    <!-- Comment Form
                    ============================================= -->
    <div id="respond" class="clearfix">
        <?php

        // comment_field--> value will be the actual input field for the comment body from the template
         // fields --> value will be an array of all the fields available in the comments form   
        
         // this function does more than showing the form  wp checks to see if the user is logged in and can submit comments  and check if comments are open for submission

         comment_form([
                'comment_field' => '  <div class="clear"></div>

                <div class="col_full">
                    <label>Comment</label>
                    <textarea name="comment" cols="58" rows="7" class="sm-form-control"></textarea>
                </div>',
                'fields'  => [
                    'author'  => ' <div class="col_one_third">
                    <label>Name</label>
                    <input type="text" name="author" class="sm-form-control" />
                </div>',
                    'email'  =>' <div class="col_one_third">
                    <label>Email</label>
                    <input type="text" name="email" class="sm-form-control" />
                </div>',
                    'url'  => ' <div class="col_one_third col_last">
                    <label>Website</label>
                    <input type="text" name="url" class="sm-form-control" />
                </div>',
                ],
                'class_submit' => 'button button-3d nomargin',
                'label_submit' => __('Submit Comment','udemy'),
                'title_reply'  => __('Leave a <span>Comment</span>','udemy'),

            ]);
         ?>

      
    </div><!-- #respond end -->

</div><!-- #comments end -->