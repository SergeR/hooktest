<div class="clear-both"></div>
<div style="border:1px solid green; padding: 10px; text-align: center; font-size: 14px; font-weight: bold; line-height: 120%;">
    {if !empty($options)}
        <dl style="font: normal 12px/1.2 sans-serif; text-align: left;">
        {foreach $options as $key=>$name}
            <dt>{$key}</dt>
            <dd>{$name}</dd>
        {/foreach}
        </dl>
    {/if}
    Hook: {$hook_name}
</div>