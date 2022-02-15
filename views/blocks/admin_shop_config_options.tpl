[{$smarty.block.parent}]
<div class="groupExp">
    <div>
        <a href="#" onclick="_groupExp(this);return false;" class="rc"><b>[{oxmultilang ident="SHOP_OPTIONS_GROUP_CUSTOM_SETTINGS"}]</b></a>
        [{foreach from=$aAdditionalConfBools item=sAdditionalConfBoolTitle key=sAdditionalConfBoolKey }]
        <dl>
            <dt>
                <input type=hidden name=confbools[[{$sAdditionalConfBoolKey}]] value=false>
                <input
                        type=checkbox
                        name=confbools[[{$sAdditionalConfBoolKey}]]
                        value=true [{if ($confbools.$sAdditionalConfBoolKey)}]checked[{/if}] [{$readonly}]
                >
            </dt>
            <dd>
                [{$sAdditionalConfBoolTitle}]
            </dd>
            <div class="spacer"></div>
        </dl>
        [{/foreach}]

        [{foreach from=$aAdditionalConfStrs item=sAdditionalConfStrTitle key=sAdditionalConfStrKey }]
        <dl>
            <dt>
                <input type=text class="txt" name=confstrs[[{$sAdditionalConfStrKey}]] value="[{$confstrs.$sAdditionalConfStrKey}]" [{$readonly}]>
            </dt>
            <dd>
                [{$sAdditionalConfStrTitle}]
            </dd>
            <div class="spacer"></div>
        </dl>
        [{/foreach}]

        [{foreach from=$aAdditionalConfArrs item=sAdditionalConfArrTitle key=sAdditionalConfArrKey }]
        <dl>
            <dt>
                <textarea class="txtfield" name=confarrs[[{$sAdditionalConfArrKey}]] [{$readonly}]>[{$confarrs.$sAdditionalConfArrKey}]</textarea>
            </dt>
            <dd>
                [{$sAdditionalConfArrTitle}]
            </dd>
            <div class="spacer"></div>
        </dl>
        [{/foreach}]

        [{foreach from=$aAdditionalConfAArrs item=sAdditionalConfAArrTitle key=sAdditionalConfAArrKey }]
        <dl>
            <dt>
                <textarea class="txtfield" name=confaarrs[[{$sAdditionalConfAArrKey}]] [{$readonly}]>[{$confaarrs.$sAdditionalConfAArrKey}]</textarea>
            </dt>
            <dd>
                [{$sAdditionalConfAArrTitle}]
            </dd>
            <div class="spacer"></div>
        </dl>
        [{/foreach}]
    </div>
</div>