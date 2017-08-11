<style>
    .radious{
        background-color: rebeccapurple;
        border-radius: 50%;
        height: 230px;
        width: 240px;
        margin:10px 10px;
        padding:45px;
        text-align:center;
        color:#FFF000;
        font-size:30px;
    }
    .radious h2{
        font-size: 20px;
    }
</style>
<div class="col-md-12">
    <div class="row">
        <div class="radious col-md-4">
            <h2>Total User</h2>
            <?php
            global $con;
            $query = "select userId from tbl_admin_user";
            $result = mysqli_query($con,$query);
            $total = mysqli_num_rows($result);
            ?>
            <p><?=$total;?></p>
        </div>
        <div class="radious col-md-4">
            <h2>Total Post</h2>
            <?php
                $postQuery = "select post_postId from tbl_post";
                $postResult = mysqli_query($con,$postQuery);
                $totalPost = mysqli_num_rows($postResult);
            ?>
            <p><?=$totalPost;?></p>
        </div>
        <div class="radious col-md-4">
            <h2>Total Post Category</h2>
            <?php
                $postQuery = "select post_categoryId from tbl_post_category";
                $postResult = mysqli_query($con,$postQuery);
                $totalPost = mysqli_num_rows($postResult);
            ?>
            <p><?=$totalPost;?></p>
        </div>

        <div class="radious col-md-4">
            <h2>Total Portfolio</h2>
            <?php
            $portfolioQuery = "select portfolioId from tbl_portfolio";
            $portfolioResult = mysqli_query($con,$portfolioQuery);
            $totalportfolio = mysqli_num_rows($portfolioResult);
            ?>
            <p><?=$totalportfolio;?></p>
        </div>
        <div class="radious col-md-4">
            <h2>Total Gallery</h2>
            <?php
            $query = "select galleryId from tbl_gallery";
            $result = mysqli_query($con,$query);
            $total = mysqli_num_rows($result);
            ?>
            <p><?=$total;?></p>
        </div>
        <div class="radious col-md-4">
            <h2>Total Banner</h2>
            <?php
            $query = "select bannerId from tbl_banner";
            $result = mysqli_query($con,$query);
            $total = mysqli_num_rows($result);
            ?>
            <p><?=$total;?></p>
        </div>
        <div class="radious col-md-4">
            <h2>Total Message</h2>
            <?php
            $query = "select contactId from tbl_contact";
            $result = mysqli_query($con,$query);
            $total = mysqli_num_rows($result);
            ?>
            <p><?=$total;?></p>
        </div>
        <div class="radious col-md-4">
            <h2>Total Page</h2>
            <?php
            $query = "select pId from tbl_pageandfeature where pCategory='2'";
            $result = mysqli_query($con,$query);
            $total = mysqli_num_rows($result);
            ?>
            <p><?=$total;?></p>
        </div>

    </div>
</div><!--col-md-12 end-->