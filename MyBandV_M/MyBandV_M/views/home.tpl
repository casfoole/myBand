<content class="wrap">
    <div id="banner">
        <img src="" id="bannerimg">
    </div>

</content>

<content class="wrap">

{foreach from=$result item=oneItem}
    <div id="newsDiv">
       <img id="newsImage" src="{$oneItem.image}">

        <h3 id="newsTitel">{$oneItem.titel}</h3>

        <p id="content">{$oneItem.content}</p>

    </div><br>
{/foreach}

<center>

<table id="pagechanger">
    <tr><td id="left">
            {if $page gt 1}
                <a href="?url=home&page={$page-1}" style="margin-right: 2px" id="left" >Previous</a>
            {/if}
        </td>
        <p id="pagenumber" style="font-family: 'Abel', sans-serif">Page {$page}</p>
        <td id="right">
            {if $page lt $number_of_pages}
                <a href="?url=home&page={$page+1}" style="margin-left: 2px" id="right">Next</a>
            {/if}
        </td>
    </tr>
</table>
</center>
</content>