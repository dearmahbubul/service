<div class="widget">
    <h5 class="widgetheading">Latest posts</h5>
    <ul class="recent">
        <?php
        global $con;
        $postQuery = "SELECT * FROM tbl_post WHERE post_postStatus='2' ORDER BY post_postId DESC LIMIT 3";
        $postResult = mysqli_query($con,$postQuery);
        if($postResult){
            while($post = $postResult->fetch_array()){
                extract($post);
                ?>
                <li>
                    <a href="#"><img src="Admin/uploads/postImage/<?=$post_postImage;?>" class="pull-left" alt="" style="width:60px;height:60px;"/></a>
                    <h6><a href="postView.php?postViewId=<?=$post_postId;?>"><?=$post_postTitle;?></a></h6>
                    <p>
                        <?=textShorten($post_postDetails,70);?>
                    </p>
                </li>
            <?php } } ?>
    </ul>
</div>
</aside>
</div>
</div>
</div>
</section>