{if $user['role'] == '0'} {* Students *}
	{$active = [
					'dashboard' => '',
					'available_books' => '',
					'cart' => '',
					'wishlist' => ''
				]}
{elseif $user['role'] == '1'} {* Librarian *}
	{$active = [
					'dashboard' => '',
					'reservation' => '',
					'categories' => '',
					'list_of_books' => '',
					'students' => ''
				]}
{/if}
{$active.$method = 'active opened'}




	<div class="sidebar-menu">
		<div class="sidebar-menu-inner">
			<header class="logo-env">
				<!-- logo -->
				<div class="logo">
					<a href="#">
						<!-- <img src="/assets/member/images/logo@2x.png" width="120" alt="" /> -->
						<img src="/assets/auth/drive-thru-library.png" style="border-radius: 10%; padding: 10px; background-color: white; height: 150px; width: auto;" alt="" />
					</a>
				</div>

				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>

								
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>
			</header>
			
									
			<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<!-- <li class="active opened active has-sub"> -->
				{* For Librarian *}
					{if $user[ 'role' ] == '1'} 
						<li class="{$active.dashboard}">
							<a href="/librarian/dashboard">
								<i class="entypo-gauge"></i>
								<span class="title">Dashboard</span>
							</a>
						</li>
						<li class="{$active.reservation}">
							<a href="/librarian/reservation">
								<i class="entypo-archive"></i>
								<span class="title">Reservation</span>
							</a>
						</li>
						<li class="{$active.categories}">
							<a href="/librarian/categories">
								<i class="entypo-archive"></i>
								<span class="title">Categories</span>
							</a>
						</li>
						<li class="{$active.list_of_books}">
							<a href="/librarian/list_of_books">
								<i class="entypo-archive"></i>
								<span class="title">List of Books</span>
							</a>
						</li>
						<li class="{$active.students}">
							<a href="/librarian/students">
								<i class="entypo-archive"></i>
								<span class="title">Students</span>
							</a>
						</li>
				{* For Student *}
					{elseif $user[ 'role' ] == '0'}
						<li class="{$active.dashboard}">
							<a href="/student/dashboard">
								<i class="entypo-gauge"></i>
								<span class="title">Dashboard</span>
							</a>
						</li>
						<li class="{$active.available_books}">
							<a href="/student/available_books">
								<i class="entypo-book"></i>
								<span class="title">Available Books</span>
							</a>
						</li>
						<li class="{$active.cart}">
							<a href="/student/cart">
								<i class="entypo-basket"></i>
								<span class="title">Cart</span>
							</a>
						</li>
						<li class="{$active.wishlist}">
							<a href="/student/wishlist">
								<i class="entypo-heart"></i>
								<span class="title">Wishlist</span>
							</a>
						</li>
					{/if}
			</ul>
		</div>
	</div>