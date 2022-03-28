<div id="sidebar" class="spana33">
	<div class="well well-small" style="background-color: #1a4bbb;color:white">My Account</div>
	<ul id="sideManu" class="nav nav-tabs nav-stacked">
		<li><a href="{{route('user.active.lisitng')}}">My Active Lisitng</a>


		</li>
		<li class=""><a href="{{route('user.expired.lisitng')}}"> My Expired Listing </a>

		</li>
		<li><a href="{{route('user.active.advertising')}}">My Active Advertising</a>


		</li>
		<li class=""><a href="{{route('user.expired.advertising')}}"> My Expired Advertising </a>

		</li>
		</li>
		<li class=""><a href="{{route('user.advertising')}}">My Advertising</a>

		</li>
		<li class=""><a href="{{route('user.view.message')}}">My Messages</a>

		</li>
		<li class="menu"><a href="{{route('user.watch')}}">My Watch List</a>

		</li>
		<li class="subMenu"><a>Add Lisitng filter </a>

		</li>
		<li class="menu"><a href="{{route('user.account')}}">My Account Information</a>

		</li>
		<li class="menu"><a href="{{route('user.listing_ad')}}">Create Business Listing</a>

		</li>
		<li class=""><a href="{{route('user.lisitng')}}">My Business Listing</a>

		</li>
		<li class=""><a href="{{route('checkout')}}">My Cart</a>

		</li>
	</ul>
	<br>
	<button class="btn btn-warning"><a href="{{route('user.post_ad')}}" style="text-decoration:none">Post an Ad</a></button>
	<button class="btn btn-warning"><a href="{{route('user.logout')}}" style="text-decoration:none">Logout</a></button>

</div>