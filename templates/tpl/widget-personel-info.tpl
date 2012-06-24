<div id="wide-personal-info">

    <div id="habbo-plate">
            <a href="{$url}/identity/avatars">
            <img alt="{$Username}" src="{$figure}"/>
        </a>
    </div>

    <div id="name-box" class="info-box">
        <div class="label">Name:</div>
        <div class="content">{$Username}</div>
    </div>
    <div id="motto-box" class="info-box">
        <div class="label">Motto:</div>
        <div class="content">{$motto}</div>
    </div>
    <div id="last-logged-in-box" class="info-box">
        <div class="label">Last signed in:</div>
        <div class="content">{$lastsignin}</div>
    </div>

<div class="enter-hotel-btn">
    <div class="open enter-btn">
            <a href="{$url}/client" target="client" onclick="HabboClient.openOrFocus(this); return false;">Enter {$titleshort} Hotel<i></i></a>
        <b></b>
    </div>
</div>

</div>