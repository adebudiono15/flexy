@php
$lights = ['500px','adobe','airbnb','algolia','amazon','android','angular','apple','audible','baidu','behance','bing','bitcoin','blogger','bootstrap','chrome','codepen','creative-commons','css3','dailymotion','dev-to','deviantart','digg','digitalocean','discord','discourse','dribbble','dropbox','drupal','ebay','edge','etsy','facebook-circle','facebook-square','facebook','figma','firefox','flickr-square','flickr','foursquare','git','github','gitlab','google-plus-circle','google-plus','google','html5','imdb','instagram-alt','instagram','internet-explorer','invision','javascript','joomla','jquery','jsfiddle','kickstarter','less','linkedin-square','linkedin','magento','mailchimp','mastercard','medium-old','medium-square','medium','messenger','microsoft','nodejs','opera','patreon','paypal','periscope','pinterest-alt','pinterest','play-store','pocket','product-hunt','quora','react','redbubble','reddit','redux','sass','shopify','skype','slack-old','slack','snapchat','soundcloud','spotify','squarespace','stack-overflow','stripe','telegram','trello','tumblr','twitch','twitter','unsplash','vimeo','visa','vk','vuejs','whatsapp-square','whatsapp','wikipedia','windows','wix','wordpress','yahoo','yelp','youtube'];
@endphp

<div class="icons-item-wrapper mt-5 d-flex flex-wrap justify-content-start">

    @foreach ($lights as $light)
    <div class="icons-item text-center">
        <i class="bx bxl-{{ $light }}"></i>
        <div>bxl-{{ $light }}</div>
    </div>
    @endforeach

</div>