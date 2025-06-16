<body>
	<a class="flex flex-row m-5 p-2 border-none rounded-md border-solid border-4 border-[#b3d8f3] texture-<?php $items = ["hideout", "plus", "toe", "fourpoint"]; print($items[rand(0,3)]) ?>"
		href="{{ $social->social_link }}" target="_blank">
		<img src='{{ asset($social->image_path) }}'
			class='h-24 w-24 object-cover rounded-full border-4 border border-[#7a9cae]' />
		<div class='flex flex-col justify-center -ml-[96px] w-full'>
			<h1 class="text-center text-3xl tracking-wide font-medium font-sans text-[#2e3d49] text-shadow-lg/30">{{ $social->social_name }}</h1>
			<p class="text-center text-[#6c7c87] text-shadow-md/20">
				{{ $social->display_text }}
			</p>
		</div>
	</a>
</body>
