<div id="promo-box">

    <div id="promo-bullets"></div>
		
		{foreach from=$newspromo key=key item=item}
        <div class="promo-container" style="{if $key > 0}display: none; {/if}background-image: url({$item.image})">
            <div class="promo-content">
                <div class="title">{$item.title}</div>
                <div class="body">{$item.body}</div>
            </div>
            
            {if $item.show_facebook == 1 }
                <a href="http://www.facebook.com/habbo" target="_blank" class="facebook-link"></a>
            {/if}
            {if $item.show_twitter == 1}
                <a href="http://www.twitter.com/habbo" target="_blank" class="twitter-link"></a>
            {/if}
            {if strlen($item.show_client) > 0}
<div class="enter-hotel-btn">
    <div class="open enter-btn">
            <a href="{$url}/client" target="client" onclick="HabboClient.openOrFocus(this); return false;">{$item.show_client} &gt;&gt;&gt;<i></i></a>
        <b></b>
    </div>
</div>
			{/if}
        </div>
        {/foreach}

</div>
<script type="text/javascript">
    document.observe("dom:loaded", function() { PromoSlideShow.init(); });
</script>