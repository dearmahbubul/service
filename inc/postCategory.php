
        <div class="widget">
            <h5 class="widgetheading">Categories</h5>
            <ul class="cat">
                <?php
                global $con;
                $catQuery = "SELECT * FROM tbl_post_category WHERE post_categoryStatus='2' ORDER BY post_categoryName";
                $result = mysqli_query($con,$catQuery);
                $fetchResult = mysqli_fetch_all($result);
                if($fetchResult){
                    foreach($result as $category){
                        $inCatId = $category['post_categoryId'];
                        $postCountQuery = "SELECT post_postId from tbl_post where post_categoryId='$inCatId'";
                        $countResult = mysqli_query($con,$postCountQuery);
                        $count = mysqli_num_rows($countResult);
                        ?>
                        <li><i class="icon-angle-right"></i><a href="postView.php?catId=<?=$category['post_categoryId'];?>"><?=$category['post_categoryName'];?></a><span> (<?=$count;?>)</span></li>
                    <?php } }else{
                    echo "No category found!";
                } ?>
            </ul>
        </div>