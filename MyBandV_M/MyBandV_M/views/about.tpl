<content class="wrap">
    {foreach from=$about_list item=x}

        <p>{$x.content}</p>

        <img src="{$x.image}">

    {/foreach}

</content>