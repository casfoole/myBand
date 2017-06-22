<div id="margin">
<nav class="wrap">
    <ul>

        <li><a id="menuhome" href="?page=home">Home</a></li>
        <li><a id="menumusic" href="?page=articles">Music</a></li>
        <li><a id="menuschema" href="?page=tourschema">Tours</a></li>
        <li><a id="menuabout" href="?page=about">About</a></li>

    </ul>
</div>
        {if $smarty.get.page==home}
            <script>
                document.getElementById("menuhome").style.textDecoration = "line-through"
            </script>
        {elseif $smarty.get.page==articles}
            <script>
                document.getElementById("menumusic").style.textDecoration = "line-through"
            </script>
        {elseif $smarty.get.page==about}
            <script>
                document.getElementById("menuabout").style.textDecoration = "line-through"
            </script>
        {elseif $smarty.get.page==tourschema}
            <script>
                document.getElementById("menuschema").style.textDecoration = "line-through"
            </script>
        {/if}


            </nav>
