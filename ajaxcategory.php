<?php 
	include('connectDB.php');
	if(isset($_GET['category'])){
		$categorys = $_GET['category'];
		$sql = "SELECT * from Products as p join Categorys as c on c.id_category=p.id_category where c.category='$categorys'";
		$rs = mysqli_query($conn,$sql);
		while ($row = mysqli_fetch_array($rs)) {
 ?>
			<div class="item-slick2 p-l-15 p-r-15 slick-slide" style="width: 300px;">
			<!-- Block2 -->
				<div class="block2">
					<div class="block2-img wrap-pic-w of-hidden pos-relative">
						<img src="images/<?php echo $row['thumbnail'] ?>" alt="IMG-PRODUCT" wight="270px" height="360px">
						<div class="block2-overlay trans-0-4">
							<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
								<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
								<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
							</a>

							<div class="block2-btn-addcart w-size1 trans-0-4">
								<!-- Button -->
								<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 addcart" ten="<?php echo $row['id_product'] ?>">
									Add to Cart
								</button>
							</div>
						</div>
					</div>

					<div class="block2-txt p-t-20">
						<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
							<?php echo $row['name']; ?>
						</a>

						<span class="block2-price m-text6 p-r-5">
							<?php  echo $row['price']; ?> 
						</span>
						đ
					</div>
				</div>
			</div>
<?php 	
	}
} ?>
<script type="text/javascript">
		
		$(document).ready(function(){
			$('.addcart').on('click', function(){
				var ten = $(this).attr('ten');
				window.location.href="product-detail.php?id="+ten;
			});
		});
</script>