<section class="card-container color-{{$i}}">
    <div class="recto decorated-container">
        <div class="antlitz-outer">
            <img class="antlitz" src="{{$entry->img}}" alt=""/>
        </div>
        <div class="frame">
            <img src="img/frame.png">
            <h2 class="badge-bottom">{{$entry->name}}</h2>
        </div>
    </div>
    <div class="verso decorated-container">
        <div class="frame">
            <img src="img/frame.png">
            <h2 class="badge-top">{{$entry->name}}</h2>
        </div>
        <div class="card-properties-outer">
            <table class="card-properties">
                <colgroup>
                    <col width="25%">
                    <col width="25%">
                    <col width="25%">
                    <col width="25%">
                </colgroup>
                <tbody>
                <tr>
                    <td>AC</td>
                    <td class="value">{{$entry->ac}}</td>
                    <td>HP</td>
                    <td class="value">{{$entry->hp}}</td>
                </tr>
                <tr>
                    <td>Attack</td>
                    <td colspan="3" class="value">{{$entry->attack_parameters}}</td>
                </tr>
                <tr>
                    <td>Saves</td>
                    <td colspan="3" class="value">
                        <span class="value-part">+{{$entry->fort}}</span>
                        <span class="value-part">+{{$entry->reflex}}</span>
                        <span class="value-part">+{{$entry->will}}</span>
                    </td>
                </tr>
                <tr>
                    <td>Stats</td>
                    <td colspan="3" class="value">
                        <span class="value-part">{{$entry->str}}</span>
                        <span class="value-part">{{$entry->dex}}</span>
                        <span class="value-part">{{$entry->con}}</span>
                        <span class="value-part">{{$entry->int}}</span>
                        <span class="value-part">{{$entry->wis}}</span>
                        <span class="value-part">{{$entry->cha}}</span>
                </tr>
                <tr class="pre-ultimate">
                    <td>Init</td>
                    <td class="value">+{{$entry->initiative_bonus}}</td>
                    <td>Speed</td>
                    <td class="value">{{$entry->speed}} feet</td>
                </tr>
                <tr>
                    <td colspan="4" class="long-text">{{$entry->notes}}</td>
                </tr>
                </tbody>
            </table>
            <div class="badge-cr">{{$entry->cr}}</div>
        </div>
    </div>
</section>