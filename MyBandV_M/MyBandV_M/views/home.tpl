<content class="wrap">
    <div id="banner">
        <img src="" id="bannerimg">
    </div>
    {foreach from=$home_list item=new}
        <div id="newsDiv">
            <img id="newsImage" src="{$new.image}">

            <h3 id="newsTitel">{$new.titel}</h3>

            <p id="content">{$new.content}</p>

        </div>
        {/foreach}
</content>
<p id="pagenumber">Page {$page}</p>
<table id="pagechanger">
    <tr><td id="left">
            {if $page gt 1}
                <a href="?url=home&page={$page-1}">Previous</a>
            {/if}
        </td>
        <td id="right">
            {if $page lt $number_of_pages}
                <a href="?url=home&page={$page+1}">Next</a>
            {/if}
        </td>
    </tr>
</table>
{foreach from=$result item=oneItem}
    <table class="content">
        <tr><td><h3>{$oneItem.id}</h3></td></tr>
        <tr><td><h3>{$oneItem.title}</h3></td></tr>
        <tr><td><h3>{$oneItem.content}</h3></td></tr>
        <tr><td><h3>{$oneItem.date_created|date_format:"%e %B %Y"}</h3></td></tr>

    </table><br>

{/foreach}